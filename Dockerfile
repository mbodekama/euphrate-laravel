# ─── Stage 1 : build des assets frontend ───────────────────────────────────
FROM node:22-alpine AS assets

WORKDIR /app

COPY package.json ./
RUN npm install --ignore-scripts

COPY vite.config.js ./
COPY resources/ ./resources/
COPY public/ ./public/

RUN npm run build

# ─── Stage 2 : image PHP-FPM finale ─────────────────────────────────────────
FROM php:8.4-fpm-alpine AS app

# Extensions PHP nécessaires
RUN apk add --no-cache \
        nginx \
        supervisor \
        bash \
        git \
        curl \
        zip \
        unzip \
        libpng-dev \
        libjpeg-turbo-dev \
        freetype-dev \
        libzip-dev \
        oniguruma-dev \
        sqlite-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        pdo \
        pdo_sqlite \
        pdo_mysql \
        mbstring \
        zip \
        gd \
        opcache \
        bcmath \
        pcntl

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Dépendances PHP (sans dev)
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-interaction --optimize-autoloader --no-scripts

# Code source
COPY . .

# Assets compilés depuis le stage précédent
COPY --from=assets /app/public/build ./public/build

# .env de base (les vraies valeurs sont injectées par l'entrypoint)
RUN cp .env.example .env && chmod +x docker/entrypoint.sh

# Permissions storage & cache
RUN mkdir -p storage/logs storage/framework/{sessions,views,cache} \
             storage/app/public bootstrap/cache \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache

# Config nginx
COPY docker/nginx/default.conf /etc/nginx/http.d/default.conf

# Config supervisord
COPY docker/supervisord.conf /etc/supervisord.conf

# PHP ini prod
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

EXPOSE 80

ENTRYPOINT ["/var/www/html/docker/entrypoint.sh"]
