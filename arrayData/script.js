$(document).ready(function(){
				
	$('button#noteContent').click(function(){
		// получаем значение пользоватльского атрибута data-id
		let noteId = $(this).attr('data-id');
					
		$.ajax({
			method: 'post',
			url: '/arrayData/handler.php',
			dataType: 'json',
			data: {
				'id': noteId
			},
			success: function(response){
				// в переменную response обработчик передал данные в формате json
				// с помощью функции JSON.parse() парсим эту строку и можем теперь обращаться к значениям по ключам
				// msg = JSON.parse(response); // это не нужно, т.к. данные уже в формате json
				
				// Вставляем каждое значение в нужное нам место в разметке
				$('textarea#title').val(response.title);
				$('textarea#content').val(response.content);
				$('span#created-at').text(response.createdAt);
			}
		});
	});
	// Очистить текстовые поля
	$('button#clean').click(function(){
		$('textarea#title').val('');
		$('textarea#content').val('');
		$('span#created-at').text('');
	});
});