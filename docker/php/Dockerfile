FROM php:8.1-fpm

# 必要な拡張をインストール
RUN apt update \
    && apt install -y \
    default-mysql-client \
    zlib1g-dev \
    libzip-dev \
    unzip \
    libonig-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libssl-dev \
    libicu-dev \
    && docker-php-ext-install \
    pdo_mysql \
    zip \
    mbstring \
    xml \
    intl

# Composer（Composer 2系の最新版）をインストール
# Laravel9でも利用可能
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

COPY php.ini /usr/local/etc/php/

WORKDIR /var/www
