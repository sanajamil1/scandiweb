<?php
session_start();

define("DB_HOST","localhost");
define("DB_USER","id19576050_root");
define("DB_PASS","A~bwlOn6Ql@(|i9X");
define("DB_DATABASE","id19576050_scandiweb");
define("DB_PORT","");

include_once('DatabaseConnection.php');

$db = new DatabaseConnection();

function redirect($redirectTo){
	header("location:$redirectTo");
	exit(0);
}

?>
