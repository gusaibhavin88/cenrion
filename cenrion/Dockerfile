# ──────────────────────────────────────────────
# Stage 1 – Composer dependencies
# ──────────────────────────────────────────────
FROM composer:latest AS vendor

WORKDIR /app

COPY composer.json ./

RUN composer install \
        --no-interaction \
        --no-progress \
        --optimize-autoloader \
        --ignore-platform-reqs \
        --no-security-blocking \
        --no-scripts

# ──────────────────────────────────────────────
# Stage 2 – Production image
# ──────────────────────────────────────────────
FROM php:8.2-fpm

# Use mlocati/docker-php-extension-installer for pre-compiled extensions
# (no gcc/g++/make needed – much smaller disk footprint)
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/

RUN apt-get update && apt-get install -y --no-install-recommends \
        zip \
        unzip \
    && rm -rf /var/lib/apt/lists/* \
    && install-php-extensions \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip

# Copy custom PHP ini
COPY docker/php.ini /usr/local/etc/php/conf.d/cenrion.ini

# Set working directory
WORKDIR /var/www/html

# Copy vendor from stage 1
COPY --from=vendor /app/vendor ./vendor

# Copy application source
COPY . .

# Set correct permissions for storage and bootstrap cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 9000

CMD ["php-fpm"]
