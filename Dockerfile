FROM php:7.2.8-apache

RUN apt-get update && apt-get install -y --no-install-recommends \
libsqlite3-dev \
ruby-dev

RUN gem install mailcatcher

COPY php.ini /usr/local/etc/php/
