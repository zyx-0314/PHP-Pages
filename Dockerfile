FROM php:8.3.21-fpm-alpine3.20

ENV NODE_ENV=development

RUN addgroup -S developer && adduser -S zyx -G developer

WORKDIR /var/www/html

RUN apk add --no-cache git unzip autoconf make g++ icu-dev libzip-dev zlib-dev postgresql-dev libpq
RUN docker-php-ext-install pdo_pgsql intl zip
RUN pecl install mongodb 
RUN docker-php-ext-enable mongodb

COPY --from=composer:2.6 /usr/bin/composer /usr/local/bin/composer

COPY . /var/www/html/

USER zyx

EXPOSE 8000

RUN composer install

CMD ["php", "-S", "0.0.0.0:8000", "router.php"]