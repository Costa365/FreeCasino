FROM php:8.0-apache
WORKDIR /var/www/html

COPY src /var/www/html
EXPOSE 80