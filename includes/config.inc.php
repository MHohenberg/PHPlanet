<?php

$dbname = "planet_dev";
$dbuser = "planet_dev";
$dbpass = "xQM32STnTKmdpdyE";
$dbhost = "localhost";

mysql_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($dbname);

function __autoload($class) {
	$f = false;
	$subdir = array("./","simplepie/");
	while ($f != true) {
		$filetest = "includes/".$subdir[$i]."$class.class.php";
if (file_exists($filetest)) {
	require_once($filetest);
	$f=true;
}
		$i++;
if ($i == count($subdir)) {
	$f = true;
} 
	}
}

?>
