<!-- html-вставка для контейнера с результатами поиска -->
<!-- Важно! Здесь не целиком html-документ, а только та часть, которая будет вставлена в -->
<!-- контейнер для отображения результатов поиска, между тегами <div id="display-handler-respose"></div> -->
<!-- <div id="display-handler-respose">... вот сюда ...</div> -->
<!-- Это и есть ответ обработчка ajaxHandler.php, который будет помещен в переменную handlerRespose в скрипте с js -->
<p>Результаты поиска:</p>
<ul>
	<?php foreach($searchResults as $value) : ?>
	<li><?= $value ; ?></li>
	<?php endforeach; ?>
</ul>