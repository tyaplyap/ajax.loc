<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ajax jQuery PHP| Отправка формы</title>	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!-- jQuery -->
		<script src="/login/ajax.js?v=1"></script><!-- Подключаем наш скрипт ajax -->
	</head>
	<body>
		<form id="login">
			Логин:<br>
			<input type="text" name="login"><br><br>
			Пароль:<br>
			<input type="password" name="password" autocomplete="off"><br><br>
			<input type="submit">
		</form>
		<div id="message"></div><!-- Контейнер для ответа с сервера -->
	</body>
</html>