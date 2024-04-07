<?php
require 'conn.php';


$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$Email = $_POST["Email"];
$DateofBirth = $_POST["DateofBirth"];
$NationalID =$_POST["NationalID"];
$Gender=$_POST["Gender"];
$PhoneNumber = $_POST["PhoneNumber"];
$Password=$_POST["Password"];

$Password = sha1($Password);

$insert="INSERT INTO `user`(`FirstName`, `LastName`, `NationalID`, `Gender`, `DateofBirth`, `Phonenumber`, `Email`, `Password`, `Role`, `Status`)
VALUES('".$FirstName."','".$LastName."','".$NationalID."','".$Gender."','".$DateOfBirth."','".$PhoneNumber."','".$Email."','".$Password."','2','1')";


if(mysqli_query($connect,$insert)){
    echo "success";
    header("Location: login.html");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($connect);
}

?>