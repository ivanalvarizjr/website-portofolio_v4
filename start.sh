#!/usr/bin/env bash
# 1. Tuliskan APP_KEY & ENV VARS ke .env
echo "APP_KEY=${APP_KEY}" > .env
# Tambahkan env lain secara manual kalau perlu:
# echo "DB_CONNECTION=${DB_CONNECTION}" >> .env

# 2. Jalankan Laravel
php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
