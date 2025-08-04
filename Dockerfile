FROM webdevops/php-nginx:8.2

# Copy semua file project
COPY . /app

# Set working directory
WORKDIR /app

# Install Composer dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Set permission (opsional tapi penting)
RUN chown -R application:application /app

# Jalankan permission Laravel
RUN chmod -R 775 storage bootstrap/cache

# Jalankan artisan config dan route cache
RUN php artisan config:cache && php artisan route:cache

# Expose port
EXPOSE 80