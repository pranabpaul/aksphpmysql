# FROM php:7.4-apache
# RUN docker-php-ext-install mysqli
# RUN mkdir -p /var/www/html/
# COPY ./src/ /var/www/html/

# FROM composer:1.10 as build
# WORKDIR /app
# COPY ./src /app
# RUN composer install
FROM php:7.4-apache
RUN docker-php-ext-install mysqli
RUN mkdir -p /var/www/html/
COPY ./src /var/www/html/
# COPY --from=build /app /var/www/html/
