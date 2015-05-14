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
    <link href="vendor/bower-asset/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="vendor/bower-asset/bootstrap/dist/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet" />
    <link href="vendor/bower-asset/pace/themes/blue/pace-theme-corner-indicator.css" type="text/css" rel="stylesheet" />
    <link href="style.css" type="text/css" rel="stylesheet" />
    <script src="vendor/bower-asset/jquery/dist/jquery.min.js"></script>
    <script src="vendor/bower-asset/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/bower-asset/jquery.tablesorter/dist/js/jquery.tablesorter.min.js"></script>
    <script src="vendor/bower-asset/jquery.tablesorter/dist/js/jquery.tablesorter.widgets.js"></script>
    <script src="vendor/bower-asset/pace/pace.min.js"></script>
    <script src="app.js"></script>
</head>
<body>
<div id="wrapp">
    <input type="text" id="text" value="<?=trim($_GET['q'])?>" />
	<div class="row">
		<input type="checkbox" <?=($_GET['sort'] === "0") ? "" : 'checked="checked"'?> id="lower_first" />
		<label for="lower_first">Сортировка по цене</label>
	</div>
    <div class="button_wrapper">
        <button class="btn btn-default" id='update'>Спарсить</button>
    </div>

</div>
<div id="wrapper"></div>
</body>
</html>