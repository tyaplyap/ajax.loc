# ajax.loc
 Ajax, jQuery, PHP - Изучение технологии Ajax

Репозитарий создан для изучения технологии AJAX. Все примеры имеют одну структуру. 
Индексный файл и папка с файлами с таким же названием, которые использует индексный файл. 

### /liveSearchForm.php
Живой поиск. Подробно покрыт комментариями. 
Сделан по примерам статей:
- Быстрый поиск с выводом результатов: [snipp.ru](https://snipp.ru/jquery/fast-search)
- Как сделать живой поиск на сайте, с помощью JavaScript, AJAX и PHP: [sozdatisite.ru](http://sozdatisite.ru/skripty/sozdanie-zhivogo-poiska-dlya-sajta-s-pomoshhyu-php-ajax-javascript)

### /login.php
Отправка формы через AJAX
Сделано по примерам статей:
- Примеры отправки AJAX JQuery: [snipp.ru](https://snipp.ru/jquery/ajax-jquery)
- AJAX и jQuery. Динамическое обновление контента. Основы: [codething.ru](https://codething.ru/ajax.php)

### /arrayData.php
Смысл этого примера в том, что обработчк hndler.php возвращает не html для вставки на страницу, а ассоциативный массив. 
Этот массив приводится к json строке и возвращается в ответ на ajax-запрос. Полученная строка парсится, разбивается на переменные,
которые можно вставлять в любые нужные места в разметке. 
Т.е. теперь получаем не готовый сформированный html-блок для вставки в заранее оперделенное место, а чистые данные, из которых можно получить
разные переменные и вставить в разные места в разметке. 
Статьи, которые помогли в этом разобраться:
- Работа с JSON в PHP: [snipp.ru](https://snipp.ru/php/json-php)
- How to return an array from an AJAX call?: [stackoverflow.com](https://stackoverflow.com/questions/8823925/how-to-return-an-array-from-an-ajax-call)
- Передача данных от клиента на сервер в формате JSON с помощью jQuery AJAX: [ru.stackoverflow.com](https://ru.stackoverflow.com/questions/433801/%D0%9F%D0%B5%D1%80%D0%B5%D0%B4%D0%B0%D1%87%D0%B0-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%BE%D1%82-%D0%BA%D0%BB%D0%B8%D0%B5%D0%BD%D1%82%D0%B0-%D0%BD%D0%B0-%D1%81%D0%B5%D1%80%D0%B2%D0%B5%D1%80-%D0%B2-%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%82%D0%B5-json-%D1%81-%D0%BF%D0%BE%D0%BC%D0%BE%D1%89%D1%8C%D1%8E-jquery-ajax)