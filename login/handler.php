<?php
	
	$login = ! empty($_POST['login']) ? $_POST['login'] : '';
	$password = ! empty($_POST['password']) ? $_POST['password'] : '';
	
	$message = '';
	
	if($login === ''){
		$message = 'Не указан логин';
	} elseif($password === ''){
		$message = 'Не указан пароль';
	} else{
		$message = 'Вы успешно авторизованы';
	}
	
	include __DIR__ . '/template.php';
?>