<?php
	function AdminSession(){
		setcookie('admin_session', true);
	}

	function hash_generate($max_count)
	{	
		$var = "qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM123456789"
		for ($i=0; $i < $max_count; $i++) { 
			
		}
	}

	public function Index()//all projects
	{
		include 'mysql.inc.php';
	}

	public function MenuSort(type)//menu selected
	{
		include 'mysql.inc.php';
	}

	public function ProjectOpen()//project open
	{
		include 'mysql.inc.php';
	}

	public function ProjectCreate(name, logo, poster, description, type)//Project create
	{
		include 'mysql.inc.php';
	}

	public function ProjectRemove(id)//Project remove
	{
		include 'mysql.inc.php';
	}

	public function FunctionName()
	{
		include 'mysql.inc.php';
	}
?>
