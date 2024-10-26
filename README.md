# План:

## Выполнено:
1.	Начать проект на Laravel  https://laravel.com/docs/11.x/installation 
2.	Выгрузить проект в git 
3.	Создание моделей с миграциями https://laravel.com/docs/11.x/eloquent 
4.	Модели https://laravel.com/docs/11.x/eloquent-relationships 
5.	Миграции https://laravel.com/docs/11.x/migrations#column-method-json
6.	Создание миграции sessions с помощью (иначе выдавало ошибку)
   6.1	In the console i wrote => php artisan tinker
   6.2  Then again in console => Schema::drop('users')
   6.3	At the end => php artisan migrate

7.	Появилась ошибка на сервере с миграцией sessions
8.	Значение Session_driver = file (было database) в файле .env .и env.example
9.	Ошибка пропала
10.	Создание ресурсных контроллеров – может в этом проекте не нужны ресурсные контролллеры?
11.	Добавление логики маршрутов ресурсных контроллеров (не сделано)
12.	Установка Laravel ui
13.	Файл web.php
14.	Cоздание middleware php artisan make:middleware название
15.	Файл kernel (его нет в Laravel 11) – что вместо него?
16.	Добавить миграцию для таблицы user
17.	Настроить файл с миграцией
18.	Папка recourses – css, views, blades

