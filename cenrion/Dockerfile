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
FROM php:8.2-fpm-alpine

# Install system dependencies
RUN apk add --no-cache \
        libpng-dev \
        libjpeg-turbo-dev \
        libwebp-dev \
        libzip-dev \
        zip \
        unzip \
        oniguruma-dev \
        freetype-dev \
        $PHPIZE_DEPS

# Configure and install PHP extensions
RUN docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install \
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
