<?php 

	header('Content-type: text/html; charset=utf-8');
	define('DB_HOST', 'localhost'); //localhost
	define('DB_USER', 'root'); //root
	define('DB_PASS', ''); //
	define('DB_NAME', '360_creative'); //360_creative
	
	/*
	360_admin
	ASDasd456awe1as2f1sd87gs1dfasdqASdawasd12
	*/	

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
	}

?>