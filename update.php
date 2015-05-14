<?php
/**
 * Created by PhpStorm.
 * User: Family
 * Date: 15.02.14
 * Time: 14:18
 */
//UPDATE
error_reporting( E_ALL ^ E_NOTICE );
$q = urlencode(trim( $_GET['q'] ));
$platiSearchUrl = "http://www.plati.com/api/search.ashx?query=$q&pagesize=500&response=json";
$input = file_get_contents($platiSearchUrl);
$object = json_decode($input);
$totalPages = (int) $object->total;
if ( $totalPages ) {
	$rows = $object->items;
	if (is_array($rows) && $_GET['sort'] == 1 ) {
		uasort( $rows, 'cmp' );
	}
	echo "<table id='table' class='table table-striped'><thead>
    <tr>
        <th>Название</th>
        <th>Цена, руб.</th>
    </tr>
    </thead><tbody>";
	foreach ( $rows as $row ) {
        $id    = $row->id;
        $name  = $row->name;
        $price = $row->price_rur;
        $url   = "http://plati.ru/asp/pay.asp?id_d=$id&ai=60697";
		if($price > 0):?>
		<tr>
			<td><a href="<?= $url ?>"><?= $name ?></a></td>
			<td><?= $price ?></td>
		</tr>
			<?endif?>
	<?
	}
	echo "</tbody></table>";
} else {
	echo "<div class='no-results'>Ничего не найдено :(</div>";
}

function cmp( $a, $b ) {
	return $a->price_rur > $b->price_rur;
}