<?php

//	contrrollwe

	if ($_SERVER['REQUEST_URI'] == '/') {
		// hompage
		$content = file_get_contents("../templates/index.html");
		$content = str_replace('{text}', 'Now you are welcomed dynamic', $content);
		echo $content;
		}
		else {
		echo 'Not the homepage';
		}
?>
