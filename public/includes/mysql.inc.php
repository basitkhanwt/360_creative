<?php 
	define('DB_HOST', '360_creative');
	define('DB_USER', 'sample_user');
	define('DB_PASS', 'EOLidfebQuiGok3');
	define('DB_Name', 'localhost');
	/*
	360_admin
	ASDasd456awe1as2f1sd87gs1dfasdqASdawasd12
	*/	

	$err_list_for_admin = array();

	$connect = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	
	if($connect->connect_error){
		die("connection failed: " .$connect->connect_error);
	}

	echo "Connecting successfully";
?>