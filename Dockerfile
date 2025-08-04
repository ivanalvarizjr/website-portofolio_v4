FROM webdevops/php-nginx:8.2

WORKDIR /app

# 1. Salin kode dan contoh env
COPY . /app
COPY .env.example /app/.env

# 2. ENV default (jika dibutuhkan)
ENV PHP_SOCKET=127.0.0.1:9000
ENV WEB_DOCUMENT_ROOT=/app/public

# 3. Install & generate key
RUN composer install --no-interaction --optimize-autoloader \
 && php artisan key:generate --force \
 && chown -R application:application /app \
 && chmod -R 775 storage bootstrap/cache public

# 4. Pakai startup.sh bawaan image
ENTRYPOINT ["tini", "--", "/opt/docker/bin/startup.sh"]
CMD ["supervisord", "-n"]
EXPOSE 80
