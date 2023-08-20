FROM php:8.0-apache
WORKDIR /var/www/html
ENV PORT 5006
COPY src /var/www/html
EXPOSE 5006
