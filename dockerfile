FROM php:8.0-apache

COPY ./imagen /var/www/html/images

RUN docker-php-ext-install pdo pdo_mysql