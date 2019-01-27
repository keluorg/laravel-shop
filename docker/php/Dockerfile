FROM php:7.1-fpm

RUN apt-get update

RUN apt-get install -y libpq-dev \
        libfreetype6-dev \
        libmcrypt-dev \
        libjpeg-dev \
        libpng-dev \
        libssl-dev \
        libcurl4-openssl-dev \
        libbz2-dev \
        libjpeg-dev \
        libpng-dev \
        libgmp-dev \
        libicu-dev \
        libmcrypt-dev \
        freetds-dev \
        libxslt-dev \
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-configure gd \
        --enable-gd-native-ttf \
        --with-freetype-dir=/usr/include/freetype2 \
        --with-png-dir=/usr/include \
        --with-jpeg-dir=/usr/include \
    && docker-php-ext-install pdo_pgsql pgsql gd \
    && docker-php-ext-enable gd
