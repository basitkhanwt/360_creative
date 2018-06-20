<?php
$_POST['sort'] = "package";
if(isset($_POST['sort'])){
	$req = false;
	$sort = $_POST['sort']; 
	include_once 'mysql.inc.php';

	$sort = $mysqli->real_escape_string($sort);

	$result = $mysqli->query("SELECT * FROM `project` WHERE `project_type` = '$sort'");


	
	while ($row = $result->fetch_assoc()) {
    	echo $row["id"] . "<br>";
    	echo $row["project_type"] . "<br>";
    	echo ;
	}
    	

    

	/*if ($mysqli->errno) {
		die('Select Error (' . $mysqli->errno . ') ' . $mysqli->error);
	}

	$my_json = json_encode($row); 

	echo $my_json;
	exit;*/
}

