#!/bin/bash

# Копирование файла .env.example в .env
cp .env.example .env

# Запуск контейнеров Docker
docker-compose up -d

# Установка зависимостей с помощью Composer
docker-compose exec app composer install

# Генерация ключа приложения
docker-compose exec app php artisan key:generate

# Выполнение миграций и заполнение базы данных тестовыми данными
docker-compose exec app php artisan migrate
