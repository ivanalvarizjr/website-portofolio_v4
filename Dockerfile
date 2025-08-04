FROM webdevops/php-nginx:8.2

WORKDIR /app
COPY . /app

ENV PHP_SOCKET=127.0.0.1:9000
ENV WEB_DOCUMENT_ROOT=/app/public

RUN composer install --no-interaction --optimize-autoloader \
 && chown -R application:application /app \
 && chmod -R 775 storage bootstrap/cache public

ENTRYPOINT ["tini", "--", "/opt/docker/bin/startup.sh"]
CMD ["supervisord", "-n"]
EXPOSE 80
