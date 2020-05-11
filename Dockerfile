FROM php:7.4-fpm-alpine

RUN apk --no-cache --update add curl \
    vim \
    freetype-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    openssl-dev \
    libzip-dev \
    oniguruma-dev 

RUN docker-php-ext-install bcmath ctype fileinfo tokenizer zip mbstring pdo

WORKDIR /var/www/html