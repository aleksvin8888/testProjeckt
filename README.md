
- Розвернуть проект taskTest+ Vojager.
- добавить миграцыи .
- Профессии.
- Навыки.
- Учебное заведение.
- Заполнить БД тестовыми значениями.
- 




установить Laravel + Vojager
Создать структуру БД для работы с такими сущностями:
Профессии
php artisan make:migration create_professions_table
Навыки
php artisan make:migration creat_skills_table
Учебное заведение
Educational institution
У профессии может быть несколько навыков
Учебное заведение может обучать нескольким профессиям
Заполнить БД тестовыми значениями

Создать страницу с выводом на экран простой таблицы с колонками:
Профессия, Список навыков для профессии, Список учебных заведений 
для профессии

Создать API метод с авторизацией по Bearer Token. 
тип запроса POST,
параметр запроса - список навыков(массив, json на выбор) .
Ответ - json [профессия, учебное заведение] - список профессий и 
заведений соответствующих списку навыков. совпадение должно быть точным,
то есть все навыки в запросе должны присутствовать у профессии.
