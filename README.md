# ajax.loc
 Ajax, jQuery, PHP - Изучение технологии Ajax

Репозитарий создан для изучения технологии AJAX. Все примеры имеют одну структуру. 
- Front: в этой папке индексные файлы.  Каждый пример запускается с этой папки: 
 `ajax.loc/front/... .php`
- js: скрипты с аякосм
- AjaxHandlers: обработчики данных, пришедших по ajax
- AjaxInsertsTemlates: шаблоны html-вставок, которые подключает обработчик
- source: данные, которые нужны для скриптов

### front/liveSearchForm.php
Живой поиск. Подробно покрыт комментариями. 
Сделан по примерам статей:
- Быстрый поиск с выводом результатов: [snipp.ru](https://snipp.ru/jquery/fast-search)
- Как сделать живой поиск на сайте, с помощью JavaScript, AJAX и PHP: [sozdatisite.ru](http://sozdatisite.ru/skripty/sozdanie-zhivogo-poiska-dlya-sajta-s-pomoshhyu-php-ajax-javascript)

### front/inputCheckbox.php
Реализован пример, когда при проставлении галочки в чекбоксе, с помощью AJAX на сервер передается значение value из инпута.
В ответ от сервера получаем html и подгружаем на страницу. 
Примеры статей:
- Работа с checkbox в JQuery: [snipp.ru](https://snipp.ru/jquery/checkbox-jquery)
- Примеры отправки AJAX JQuery: [snipp.ru](https://snipp.ru/jquery/ajax-jquery)
