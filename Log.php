<?php
session_start();
require 'conn.php';

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Password = sha1($Password);
$_SESSION["Email"] = "$Email";
$sql="SELECT 
		`Email`, `Password`,`Role`,`Status`
		FROM `user`
		WHERE `Email` = '$Email' AND `Password` = '$Password' AND `Status`='1';";


 $result = mysqli_query($connect,$sql);
	try
	{
		$result = mysqli_query($connect,$sql);
		
		
		if($result->num_rows > 0)
		{
			$result = mysqli_fetch_array($result);

			$userType = $result["Role"];
			echo $userType;
						// 1=customer 2= business owner, 3= admin
			switch ($userType){
				// if they are a customer
				case 1:
					$_SESSION['Email'] = "$Email";
					header("location: index.php");
					break;
					// if they are a business owner
				case 2:
					$_SESSION['Email'] = "$Email";
					header("location: BusinessHome.php");
					break;
					 // if they are an admin
				case 3:
					$_SESSION['Email'] = "$Email";
					header("location: AdminHome.php");
					
					break;
					$currentUser = $_SESSION['Email'];
				}
			
	
		}
		
		else
		{
			echo "<script>
			alert('Email or password is incorrect)'
			</script>";
			 header("location: login.html");	
		}
		
	}
	catch(exception $e)
	{
		echo $e->message;
		echo mysqli_error($connect);
	}
	
?>