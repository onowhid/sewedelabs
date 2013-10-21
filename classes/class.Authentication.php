<?php
	class TAuthentication {
		function __construct() {
			// Constructor
			if ($_SESSION['LoggedIn'] == 1) {
				$this->isAuthorized = 1;
			}
			else {
				$this->isAuthorized = 0;
			}
		}
		
		function isAuthorized($username, $password) {
			// Determine if someone is authorized
			return $this->isAuthorized;
		}
	}
?>
