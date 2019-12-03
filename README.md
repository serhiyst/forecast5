Установка и использование

- Клонируйте репозиторий с помощью git clone
- Скопируйте данные из .env.example в .env и отредактируйте в нем данные подключениия к бд 
- Далее composer install
- Далее php artisan key:generate
- Далее php artisan migrate 
- Далее php artisan serve

Файлы из тз

- app.php - app/Controllers/ForecastController.php
- index.html - resources/views/forecast.blade.php
- main.js - public/js/ajax.js
- style.css - стили поключены по ссылке

Дамп бд в корневой папке (forecasts.sql)
