FROM php:8.2-apache

# Install ekstensi PHP yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    zip unzip curl libzip-dev libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo_mysql zip mbstring exif pcntl bcmath

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file project Laravel ke container
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader

# Ganti permission (biar storage bisa ditulis Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Copy config Apache
COPY ./docker/apache.conf /etc/apache2/sites-available/000-default.conf

# Aktifkan mod_rewrite Laravel
RUN a2enmod rewrite
