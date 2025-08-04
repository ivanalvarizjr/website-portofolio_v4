FROM php:8.2-apache

# Install tools dan ekstensi PHP
RUN apt-get update && apt-get install -y unzip curl git \
    && docker-php-ext-install mbstring pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copy project
COPY . /var/www/html
WORKDIR /var/www/html

# Install Laravel dependency
RUN composer install

# Permission
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
