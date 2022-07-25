<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ajax jQuery PHP| Передача массива из обработчика</title>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery -->
		<script src="/arrayData/script.js?v=2"></script><!-- Подключаем наш скрипт ajax -->
	</head>
	<body>
		<div>
			<p>Title</p>
			<textarea id="title"></textarea><!-- Между тегами textarea будет вставлен заголовок заметки -->
		</div>
		<div>
			<p>Content</p><!--  -->
			<textarea id="content"></textarea><!-- Между тегами textarea будет вставлено содержание заметки -->
			<p>Created At: <span id="created-at"></span></p><!-- Между тегами span будет вставлена дата создания заметки -->
		</div>
		<div>
			<button id="noteContent" data-id="78">Отправить</button><!-- Передадим id заметки в базе данных по нажатию на кнопку -->
			<button id="clean">Очистить</button><!-- Очистить текстовые поля -->
		</div>
	</body>
</html>