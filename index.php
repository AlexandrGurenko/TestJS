<?php
include 'tpl/header.php';
include 'tpl/nav.php';
?>
<div class="jumbotron">
	<div class="container">
		<h1>Привет, случайный посетитель!</h1>
		<p>Это какой-то сайт... Здесь нет ничего интересного, уходи!<img src="img/run.jpeg"></p>

		<p><a class="btn btn-primary btn-lg" onclick="clickButton()" role="button">Эта кнопка ничего не делает &raquo;</a></p>
	</div>
</div>

<div class="container">
	<!-- Example row of columns -->
	<div class="row">
		<div class="col-md-4">
			<h2>Конвертер температур</h2>
			<p>Конвертирует градусы по Фаренгейту в градусы по Цельсию и наоборот</p>
			<p><a class="btn btn-default" href="#" role="button">Конвертер температур &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Заголовок</h2>
			<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			<p><a class="btn btn-default" href="#" role="button">Проглянути деталі &raquo;</a></p>
		</div>
		<div class="col-md-4">
			<h2>Заголовок</h2>
			<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			<p><a class="btn btn-default" href="#" role="button">Проглянути деталі &raquo;</a></p>
		</div>
	</div>
	
	<script type="text/javascript">
		function clickButton() {
			alert('Ничегошеньки, кроме этого...');
		}
	</script>
	
	<hr>
	<?php include 'tpl/footer.php'; ?>