FROM php:8.2-apache

# Install dependency
RUN apt-get update && apt-get install -y \
    unzip curl git libonig-dev libzip-dev zip \
    && docker-php-ext-install pdo_mysql mbstring

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy Laravel files
COPY . /var/www/html

COPY .env.example /var/www/html/.env

# Give permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Apache DocumentRoot diatur ke public/
RUN sed -i 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Set working dir
WORKDIR /var/www/html/public

# Expose port
EXPOSE 80

CMD ["apache2-foreground"]