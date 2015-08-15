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
$platiSearchUrl = "http://www.plati.com/asp/ajax.asp?action=as&q=$q&limit=10&timestamp=" . time();
$input = file_get_contents($platiSearchUrl);
$examples = explode("\n",$input);
$words = [];
if($examples){
	foreach ($examples as $example) {
		$word = substr($example, 0, strpos($example, '|'));
		if($word){
			$words[] = $word;
		}
	}
}

echo json_encode($words);