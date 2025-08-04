FROM webdevops/php-nginx:8.2

ENV WEB_DOCUMENT_ROOT=/app/public
ENV PHP_SOCKET=127.0.0.1:9000

WORKDIR /app
COPY . /app

# Install semua dependensi, generate key, set permission
RUN composer install --no-interaction --optimize-autoloader \
 && php artisan key:generate --force \
 && chown -R application:application /app \
 && chmod -R 775 storage bootstrap/cache public

# Pakai startup.sh untuk render config + buat folder log
ENTRYPOINT ["tini", "--", "/opt/docker/bin/startup.sh"]

# Tampilkan supervisord di foreground
CMD ["supervisord", "-n"]
