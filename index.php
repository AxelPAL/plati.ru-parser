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
    <link href="vendor/bower-asset/pace/themes/blue/pace-theme-corner-indicator.css" type="text/css" rel="stylesheet" />
    <link href="styles/style.css" type="text/css" rel="stylesheet" />
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
			<div class="mdl-textfield mdl-js-textfield">
				<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="lower_first">
					<input type="checkbox" <?=($_GET['sort'] === "0") ? "" : 'checked="checked"'?> id="lower_first"  class="mdl-switch__input" />
					<span class="mdl-switch__label">Сортировка по цене</span>
				</label>
			</div>
			<div class="button_wrapper">
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id='update'>Спарсить</button>
			</div>
		</div>
		<div id="p2" class="mdl-progress mdl-js-progress mdl-progress__indeterminate progress-demo"></div>
	</div>

</div>
<div id="wrapper"></div>
</body>
</html>