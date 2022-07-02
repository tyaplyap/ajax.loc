<?php
	
	// Наша база данных, по которой будем осуществлять поиск
	$names = require_once __DIR__ . '/../sources/names.php';
	
	// Здесь будем хранить результаты поиска
	$searchResults = [];
	
	// Проверяем, передал ли ajax на сервер данные
	// Обращаемся к массиву POST по индексу name
	// Если он не пуст, начинаем поиск по базе
	if(! empty($_POST['name'])){
		
		// Получаем поисковый запрос
		$searchRequest = $_POST['name'];
		
		// Оставить в тексте только буквы, цифры и пробел
		$searchRequest = mb_eregi_replace("[^a-zа-яё0-9 ]", '', $searchRequest);
		
		$searchRequest = trim($searchRequest);
		
		// Ищем имена, подходящие под наш запрос
		foreach($names as $name){
			// strpos работает аналогично sql LIKE '%needle%'
			if(strpos($name, $searchRequest) !== false){
				
				// Подходящие имена собираем в массив
				$searchResults[] = $name;
			}
		}
	}
	
	// Если массив не пустой, подключаем файл ajaxInsertTemplate.php с html-шаблоном
	// Файл с шаблоном возьмет из массива с результатами данные и расставит их в нужные места
	
	// Если массив пустой - ничего не подключаем, т.е. фктически наш 
	// обработчик ничего не вернет скрипту ajax
	
	if($searchResults !== []){
		include __DIR__ . '/../AjaxInsertsTemplates/ajaxInsertTemplate.php';
	}
?>