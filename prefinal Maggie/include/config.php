<?php
define("MYSQLUSER","root");
define("MYSQLPASS","root");
define("HOSTNAME","localhost");
define("MYSQLDB","Maggie");
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>