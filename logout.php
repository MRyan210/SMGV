<?php 

include 'Log.php';

	if ($_SESSION['email']) {
		session_destroy();
		header("Location: greenlight_Landing.html");
	}
?>