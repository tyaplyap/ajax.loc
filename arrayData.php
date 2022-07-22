<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ajax jQuery PHP| Передача массива из обработчика</title>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery -->
		<script src="/arrayData/script.js?v=1"></script><!-- Подключаем наш скрипт ajax -->
	</head>
	<body>
		<div>
			<p>Title</p>
			<textarea id="title"></textarea><!-- Между тегами textarea будет вставлен заголовок заметки -->
		</div>
		<div>
			<p>Content</p><!--  -->
			<textarea id="content"></textarea>
			<p>Created At: <span id="created-at"></span></p><!-- Между тегами textarea будет вставлено содержание заметки -->
		</div>
		<div>
			<button data-id="55">Отправить</button><!-- Передадим id заметки в базе данных по нажатию на кнопку -->
		</div>
	</body>
</html>