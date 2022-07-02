<!-- html-вставка для контейнера с результатами поиска -->
<!-- Важно! Здесь не целиком html-документ, а только та часть, которая будет вставлена в -->
<!-- контейнер для отображения результатов поиска, между тегами <div id="display-handler-respose"></div> -->
<!-- <div id="display-handler-respose">... вот сюда ...</div> -->
<!-- Это и есть ответ обработчка ajaxHandler.php, который будет помещен в переменную handlerRespose в скрипте с js -->
<p>Результаты поиска:</p>
<ul style=" margin-left: 0;padding-left: 0;">
	<li style="list-style-type: none;">Клик по имени вставит имя в поле поиска и очистит результаты поиска</li>
	<li style="list-style-type: none;">Клик по ссылке добавит get-параметр и перезагрузит страницу</li>
</ul>
<ul class="search-results">
	<?php foreach($searchResults as $row) : ?>
	<li><span><?= $row['name'] ; ?></span>: <a href="/front/LiveSearchForm.php?id=<?= $row['id']; ?>">Перейти</a></li>
	<?php endforeach; ?>
</ul>