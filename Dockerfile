FROM webdevops/php-nginx:8.2

# Arahkan nginx ke public folder
ENV WEB_DOCUMENT_ROOT=/app/public

# Tentukan PHP-FPM socket agar placeholder <PHP_SOCKET> tergantikan
ENV PHP_SOCKET=127.0.0.1:9000

# Buat direktori dan file log nginx
RUN mkdir -p /var/log/nginx \
    && touch /var/log/nginx/error.log /var/log/nginx/access.log \
    && chown -R application:application /var/log/nginx

WORKDIR /app
COPY . /app

# Install dependencies dan optimasi Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && chown -R application:application /app \
    && chmod -R 775 storage bootstrap/cache public \
    && php artisan config:cache \
    && php artisan route:cache

EXPOSE 80

# Gunakan supervisord untuk menjalankan nginx + php-fpm
CMD ["supervisord"]
