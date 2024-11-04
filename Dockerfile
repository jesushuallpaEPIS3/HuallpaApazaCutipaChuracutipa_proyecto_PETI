FROM php:8.0-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html/

WORKDIR /var/www/html/
