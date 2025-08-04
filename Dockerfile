FROM php:8.2-apache

# Install dependensi sistem dan PHP extensions
RUN apt-get update && apt-get install -y unzip curl git libonig-dev \
    && docker-php-ext-install mbstring pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

# Copy source code
COPY . /var/www/html
# Set working directory
WORKDIR /var/www/html

# Copy Laravel files
COPY . .

# Set permission
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Install Laravel dependency
RUN composer install

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]