<?php

//	controller

	require_once("../classes/class.Authentication.php");
	require_once("../classes/class.Session.php");

	$Session = new TSession();
	$Authentication = new TAuthentication();

	$_SESSION['LoggedIn'] = 0;	

	if ($Authentication->isAuthorized) {
		// logged in
		echo "You are logged in <br>";
	}
	else {
		echo "You are not logged in <br>";
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
