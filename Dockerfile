FROM php:8.5.12-apache
WORKDIR /var/www/html
ENV PORT 5006
COPY src /var/www/html
EXPOSE 5006
