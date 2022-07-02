<?php
	
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
		
		// Триммируем
		$searchRequest = trim($searchRequest);
		
		// Подключаемся к базе данных, выполняем запрос
		$dbh = new \PDO('mysql:dbname=experimental;host=localhost;charset=UTF8', 'root', '');
		$sth = $dbh->prepare('SELECT * FROM `users` WHERE `name` LIKE :search ORDER BY `name` LIMIT 10');
		$sth->execute([':search' => $searchRequest . '%']);
		
		// Получаем результаты из базы данных в виде ассоциативного массива
		$searchResults = $sth->fetchAll(\PDO::FETCH_ASSOC);
	}
	
	// Если массив не пустой, подключаем файл ajaxInsertTemplate.php с html-шаблоном
	// Файл с шаблоном возьмет из массива с результатами данные и расставит их в нужные места
	
	// Если массив пустой - ничего не подключаем, т.е. фктически наш 
	// обработчик ничего не вернет скрипту ajax
	
	if($searchResults !== []){
		include __DIR__ . '/../AjaxInsertsTemplates/ajaxInsertTemplate.php';
	}
?>