<?php 

include 'Log.php';

	if ($_SESSION['Email']) {
		session_destroy();
		header("Location: index.html");
	}
?>