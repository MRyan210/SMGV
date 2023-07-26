<?php
session_start();

$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="stockmgmt";
 
$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Password = sha1($Password);
$_SESSION["Email"] = "$Email";
$sql="SELECT 
		`Email`, `Password`,`Role`,`Status`
		FROM `user`
		WHERE `Email` = '$Email' AND `Password` = '$Password' AND `Status`='Active';";


$result = mysqli_query($connect,$sql);
	try
	{
		$result = mysqli_query($connect,$sql);
		
		
		if($result->num_rows > 0)
		{
			$result = mysqli_fetch_array($result);

			$userType = $result["Role"];
			// echo $userType;
						
			switch ($userType){
				// if they are an Employer
				case 1:
					$_SESSION['Email'] = "$Email";
					header("location: index.php");
					break;
					// if they are a jobseeker
				case 2:
					$_SESSION['Email'] = "$Email";
					header("location: GREEN.php");
					break;
					 // if they are an admin
				case 3:
					$_SESSION['Email'] = "$Email";
					header("location: session.php");
					
					break;
					//$currentUser = $_SESSION['Email'];
				}
			
	
		}
		
		else
		{
			 header("location: login.html");	
		}
		
	}
	catch(exception $e)
	{
		echo $e->message;
		echo mysqli_error($connect);
	}
	
?>