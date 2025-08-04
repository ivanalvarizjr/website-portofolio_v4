FROM php:8.2-apache

# Install dependensi sistem dan PHP extensions
RUN apt-get update && apt-get install -y unzip curl git libonig-dev \
    && docker-php-ext-install mbstring pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copy source code
COPY . /var/www/html
WORKDIR /var/www/html

# Install Laravel dependency
RUN composer install

# Permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
