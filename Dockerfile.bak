# Gunakan PHP 8.2 dengan Apache
FROM php:8.2-apache

# Install ekstensi dan tools yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
  && docker-php-ext-install pdo_mysql zip \
  && a2enmod rewrite

# Atur DocumentRoot ke folder public Laravel
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/000-default.conf

# Set working directory
WORKDIR /var/www/html

# Install Composer  
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy semua file aplikasi
COPY . /var/www/html

# Install dependencies & generate APP_KEY
RUN composer install --no-dev --optimize-autoloader \
  && php artisan key:generate --force

# Atur permission agar Apache dapat menulis ke storage dan cache
RUN chown -R www-data:www-data /var/www/html \
  && chmod -R 755 storage bootstrap/cache

# Buka port 80 agar Railway dapat expose
EXPOSE 80

# Jalankan Apache di foreground
CMD ["apache2-foreground"]
