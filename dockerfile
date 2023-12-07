FROM php:apache
WORKDIR /var/www/html
COPY . /var/www/html
RUN apt-get update && apt-get install -y libzip-dev
RUN docker-php-ext-install zip mysqli && docker-php-ext-enable zip mysqli
EXPOSE 80 443