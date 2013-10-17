<?php

//	contrroller

	require_once("../classes/class.Authentication.php");

	session_start();

	if ($_SESSION['LoggedIn'] == 1) {
		// logged in
		echo "You are logged in";
	}
	else {
		
		if ($_POST['submit'] == 'Submit') {
			// they submitted the login form		

			if ($_POST['username'] == 'Sebastian' && $_POST['password'] == 'blahblah') {
				echo "logged in!";
				$_SESSION['loggedIn'] = 1;
			} else {
				echo "wrong username!";
				$_SESSION['loggedIn'] = 0;
			}	
			
		} else {
		}
		//not logged in 
		$content = file_get_contents("../templates/loginform.html");
		echo $content;

		// $_SESSION['LoggedIn'] = 1;
	}
	die;
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
