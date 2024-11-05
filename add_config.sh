#!/bin/bash

cp /usr/local/etc/php/php.ini-development /usr/local/etc/php/php.ini

echo "display_errors = On" >> /usr/local/etc/php/php.ini
echo "error_reporting = E_ALL" >> /usr/local/etc/php/php.ini
