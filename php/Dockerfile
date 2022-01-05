FROM php:7.2.34-apache

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

RUN apt-get update
RUN apt-get install -y \
    libpq-dev \
    vim
RUN docker-php-ext-install pgsql
RUN /etc/init.d/apache2 restart

ENV PORT 80

COPY . /var/www/html
