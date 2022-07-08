$(document).ready(function(){
	// получаем всю форму по клику на кнопку submit
	$('#login').on('submit', function(){
					
		// функция serialize() обходит форму и собирает названия и 
		// заполненные пользователем значения полей и возвращает данные
		// в виде массива – {login: 'ЗНАЧЕНИЯ_ПОЛЯ', password: 'ЗНАЧЕНИЯ_ПОЛЯ'}
		// как раз в том виде, в котором нужно их передать в параметр data
						
		// Пример, какие данные будут собраны с формы:
		//let formData = $(this).serialize();
		//alert(formData); // login=myLogin&password=MyPassword
						
		// Особенности serialize():
		// - кнопки формы, их атрибуты name и value игнорируются
		// - функцию можно применить только к тегу form и полям формы
					
		$.ajax({
			method: 'post',
			url: '/login/handler.php',
			dataType: 'html',
			data: $(this).serialize(),
			success: function(response){
				$('#message').html(response);
			}
		});
					
		// Это сделано для того, чтобы форма не пыталась передать данные 
		// файлу, из которого она запускается и 
		// не происходило перезагрузки страницы.
		return false;
	});
});