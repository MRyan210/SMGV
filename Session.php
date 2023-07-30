<?php
	include 'Log.php';

	if (empty($_SESSION['Email'])) {
      	header("Location: login.html");
   }
   else{
   // 1=customer 2= business owner, 3= admin
	   	if ($_SESSION['Email'] == 1) {
	   		header("location: index.php");
	   	}
	   	elseif ($_SESSION['Email'] == 2) {
	   		header("location: BusinessHome.php");
	   	}
	   	elseif ($_SESSION['Email'] == 3) {
	   		header("location: AdminHome.php ");
	   	}
   }


?>