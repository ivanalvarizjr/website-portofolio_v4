FROM webdevops/php-nginx:8.2

ENV WEB_DOCUMENT_ROOT=/app/public

WORKDIR /app
COPY . /app

RUN composer install --no-interaction --prefer-dist --optimize-autoloader \
    && chown -R application:application /app \
    && chmod -R 775 storage bootstrap/cache public \
    && php artisan config:cache \
    && php artisan route:cache

EXPOSE 80
