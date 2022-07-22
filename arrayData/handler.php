<?php
	
	class Note
	{
		public int $id;
		public string $title;
		public $content; // string | null
		public string $created_at; 
	}
	
	$noteId = $_POST['id'];
	$noteId = 55;
	
	$dbh = new \PDO('mysql:dbname=experimental;host=localhost;charset=utf8', 'root', '');
	$sth = $dbh->prepare('SELECT * FROM `notes` WHERE `id` = :id LIMIT 1;');
	$sth->execute([':id' => $noteId]);
	$notes = $sth->fetchAll(\PDO::FETCH_CLASS, 'Note');
	$note = ! empty($notes) ? $notes[0] : null;
	
	// Формируем массив с данными для передачи по ajax запросу
	$timestmp = strtotime($note->created_at);
	$date = date('d.m.Y', $timestmp);
	
	$data = [
		'title' => $note->title,
		'content' => $note->content,
		'createdAt' => $date
	];
	
	// Кодируем массив в строку в формате json и передаем по ajax запросу непосредственно ее
	// Без добавления параметра JSON_UNESCAPED_UNICODE в функцию json_encode() 
	// мы получим на выходе строку с закодированной кириллицей, 
	// которая будет содержать множество символов типа \u0417\u043d\u0430\u0447
	// и иметь гигантскую длину. 
	echo json_encode($data, JSON_UNESCAPED_UNICODE);
	
	
?>