<?php

function dump($array){
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
}
function dumpx($array){
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
	exit;
}

function current_date() {
	return date('Y-m-d H:i:s');
}