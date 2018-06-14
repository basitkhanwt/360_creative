<?php 
	if(isset($_POST["send_message"])){
		$theme = $_POST["theme"];
		$text = $_POST["text"];
		$headers = 	'From: webmaster@example.com' . "\r\n" .
				    'Reply-To: webmaster@example.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion();

		$mail = mail("admin@360creative.com", $theme, $text, $headers)

		if(!$mail){
			return false;
		} else{
			return true;
		}
	}
 ?>