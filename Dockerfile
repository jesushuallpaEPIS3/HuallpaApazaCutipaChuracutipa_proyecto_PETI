FROM php:8.0-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html/

COPY add_config.sh /usr/local/bin/add_config.sh

RUN chmod +x /usr/local/bin/add_config.sh

RUN /usr/local/bin/add_config.sh

WORKDIR /var/www/html/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf \
    && a2enmod rewrite

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
