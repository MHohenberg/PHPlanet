<?php

define(DB_NAME, "");
define(DB_USER, "");
define(DB_PASS, "");
define(DB_HOST, "");

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
