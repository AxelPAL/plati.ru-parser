<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 15.02.14
 * Time: 13:05
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <title>Парсер Plati.ru</title>
    <link href="vendor/bower-asset/material-design-lite/material.min.css" type="text/css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="vendor/bower-asset/pace/themes/blue/pace-theme-corner-indicator.css" type="text/css" rel="stylesheet" />
    <link href="styles/style.css" type="text/css" rel="stylesheet" />
	<link rel="icon" type="image/png" href="http://plati.ru/favicon.png">
	<link rel="search" type="application/opensearchdescription+xml"href="/search.xml" title="Поиск товаров на Плати.ру" />
    <script src="vendor/bower-asset/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bower-asset/material-design-lite/material.min.js"></script>
    <script src="vendor/bower-asset/jquery.tablesorter/dist/js/jquery.tablesorter.min.js"></script>
    <script src="vendor/bower-asset/jquery.tablesorter/dist/js/jquery.tablesorter.widgets.js"></script>
    <script src="vendor/bower-asset/pace/pace.min.js"></script>
    <script src="js/app.js"></script>
</head>
<body>
<div id="wrapp">
	<div class="demo-grid-ruler mdl-grid">
		<div class="mdl-cell mdl-cell--12-col">
			<div class="mdl-textfield mdl-js-textfield is-focused">
				<input class="mdl-textfield__input" type="text" id="text" value="<?=trim($_GET['q'])?>" autofocus="autofocus"/>
				<label class="mdl-textfield__label" for="text">Поиск...</label>
			</div>
			<button id="demo-menu-lower-left"
					class="mdl-button mdl-js-button mdl-button--icon">
				<i class="material-icons">more_vert</i>
			</button>

			<ul class="predict-menu mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left"></ul>
			<div class="mdl-textfield mdl-js-textfield">
				<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="lower_first">
					<input type="checkbox" <?=($_GET['sort'] === "0") ? "" : 'checked="checked"'?> id="lower_first"  class="mdl-switch__input" />
					<span class="mdl-switch__label">Сортировка по цене</span>
				</label>
			</div>
			<div class="button_wrapper">
				<a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored" id='update'>Найти</a>
			</div>
		</div>
		<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate progress-demo"></div>
	</div>

</div>
<div id="wrapper"></div>
</body>
</html>