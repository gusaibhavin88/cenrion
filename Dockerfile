# Production image for Render. Build context is the repository root.
# ──────────────────────────────────────────────
# Stage 1 – Composer dependencies
# ──────────────────────────────────────────────
FROM composer:2 AS vendor

WORKDIR /app

COPY cenrion/composer.json cenrion/composer.lock ./

RUN composer install \
        --no-dev \
        --no-interaction \
        --no-progress \
        --optimize-autoloader \
        --no-scripts

# ──────────────────────────────────────────────
# Stage 2 – nginx + php-fpm, listens on $PORT
# ──────────────────────────────────────────────
FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
        nginx \
        oniguruma \
        libzip \
    && apk add --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        oniguruma-dev \
        libzip-dev \
    && docker-php-ext-install mbstring zip opcache \
    && apk del .build-deps \
    && rm -rf /var/cache/apk/* \
    && printf '\nclear_env = no\n' >> /usr/local/etc/php-fpm.d/www.conf

COPY cenrion/docker/php.ini /usr/local/etc/php/conf.d/cenrion.ini
COPY cenrion/docker/render-entrypoint.sh /usr/local/bin/render-entrypoint.sh

WORKDIR /var/www/html

COPY --from=vendor /usr/bin/composer /usr/bin/composer
COPY --from=vendor /app/vendor ./vendor
COPY cenrion/ .

RUN mkdir -p \
        storage/app/public \
        storage/framework/cache/data \
        storage/framework/sessions \
        storage/framework/views \
        storage/logs \
        bootstrap/cache \
        /var/log/php \
    && chown www-data:www-data /var/log/php \
    && composer dump-autoload --optimize --no-dev --no-scripts \
    && php artisan package:discover --ansi \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R ug+rwx storage bootstrap/cache \
    && chmod +x /usr/local/bin/render-entrypoint.sh \
    && rm -f bootstrap/cache/config.php bootstrap/cache/routes-v7.php

EXPOSE 10000

CMD ["/usr/local/bin/render-entrypoint.sh"]
