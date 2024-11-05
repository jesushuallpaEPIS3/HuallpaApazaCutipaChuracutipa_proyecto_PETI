FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

RUN cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini \
    && echo "display_errors = On" >> /usr/local/etc/php/php.ini \
    && echo "error_reporting = E_ALL" >> /usr/local/etc/php/php.ini

EXPOSE 80

CMD ["apache2-foreground"]
