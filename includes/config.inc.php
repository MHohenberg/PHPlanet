<?php

$dbname = "planet_dev";
$dbuser = "planet_dev";
$dbpass = "xQM32STnTKmdpdyE";
$dbhost = "localhost";

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);

function __autoload($class) {
	include_once("includes/$class.class.php");
}

?>
