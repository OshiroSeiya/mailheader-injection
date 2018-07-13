FROM php:5.6.36-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
libmcrypt-dev

RUN docker-php-ext-install \
fileinfo \
mbstring \
mcrypt

COPY php.ini /usr/local/etc/php/
