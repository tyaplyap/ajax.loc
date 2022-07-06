	$(document).ready(function(){
		
		// Отслеживаем клик по чекбоксу
		$('#article').click(function(){
			
			// Если галочка проставлена
			if($(this).is(':checked')){
				
				// Получаем значение value в инпуте
				let inputID = $(this).val();
				
				// Указываем параметры аякс запроса
				$.ajax({
					method: 'POST',
					url: '/../AjaxHandlers/checkboxHandler.php',
					data: {
						'id': inputID // ключу id присвом значение инпута value
					},
					
					// При успешном запросе в переменную response поместим html-код, который придет из url
					success: function(response){
						
						// выведем значение response между div-ами с id=display-response
						$('#display-response').html(response).show();
					}
				});
				
			} else{
				// если галочка снята с чебокса, оставим пустую строку и скроем ответ
				$('#display-response').html('').hide();
			}
		});
	});