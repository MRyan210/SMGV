<?php
session_start();

$dbserver = "localhost";
$dbusername = "root";
$password="";
$dbname="stockmgmt1";
 
$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$Email = $_POST["Email"];
$Password = $_POST["Password"];

$Password = md5($Password);

$sql="SELECT 
		`Email`, `Password`,`Role`,`Status`
		FROM `user`
		WHERE `Email` = '$Email' AND `Password` = '$Password' AND `Status`='1';";


$result = mysqli_query($connect,$sql);
while($row = mysqli_fetch_array($result)){

	echo $result;
}


?>