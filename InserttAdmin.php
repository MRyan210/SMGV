<?php
$dbserver="localhost";
$dbusername="root";
$password="";
$dbname="stockmgmt1";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);


$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$DateofBirth = date('yyyy-mm-dd', strtotime($_POST["DateofBirth"]));
$NationalID =$_POST["NationalID"];
$Gender=$_POST["Gender"];
$PhoneNumber = $_POST["PhoneNumber"];
$Password=$_POST["Password"];
$BusinessID=$_POST["Business"];

$Password = sha1($Password);

$insert="INSERT INTO `user`(`FirstName`, `LastName`, `NationalID`, `Gender`, `DateofBirth`, `Phonenumber`, `Email`,  `Role`, `Status`, `BusinessID`)
VALUES('".$FirstName."','".$LastName."','".$NationalID."','".$Gender."','".$DateOfBirth."','".$PhoneNumber."','".$Email."','1','1','".$BusinessID."')";


if(mysqli_query($connect,$insert)){
    echo "success";
    header("Location: Admin- Manage Users.php");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($connect);
}

?>