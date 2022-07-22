$(document).ready(function(){
				
	$('button').click(function(){
		// получаем значение пользоватльского атрибута data-id
		let noteId = $(this).attr('data-id');
					
		$.ajax({
			method: 'post',
			url: '/arrayData/handler.php',
			//dataType: 'json',
			data: {
				'id': noteId
			},
			success: function(response){
				// в переменную response обработчик передал массив, приведенный к строке в формате json
				// с помощью функции JSON.parse() парсим эту строку и можем теперь обращаться к значениям по ключам
				msg = JSON.parse(response);
				
				// Вставляем каждое значение в нужное нам место в разметке
				$('textarea#title').text(msg.title);
				$('textarea#content').text(msg.content);
				$('span#created-at').text(msg.createdAt);
			}
		});
	});
});