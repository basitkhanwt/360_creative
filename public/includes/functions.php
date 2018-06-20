<?php
	function AdminSession(){
		setcookie('admin_session', true);
	}

	function hash_generate($max_count)
	{	
		$var = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789";
		for ($i=0; $i <= $max_count; $i++) { 
			
		}
	}

	function Index()//all projects
	{
		include 'mysql.inc.php';
	}

	function MenuSort($type)//menu selected
	{
		include 'mysql.inc.php';
	}

	function ProjectCreate($name, $logo, $poster, $description, $type)//Project create
	{
		include 'mysql.inc.php';
	}

	function ProjectRemove($id)//Project remove
	{
		include 'mysql.inc.php';
	}

	function FunctionName()
	{
		include 'mysql.inc.php';
	}

