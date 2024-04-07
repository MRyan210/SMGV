<?php
require 'conn.php';


$Bname = $_POST["Bname"];
$Bemail = $_POST["Bemail"];
$Location = $_POST["Location"];
$Status = 1;

$insert="INSERT INTO `business`(`Bname`, `Bemail`, `Location`, `Status`) VALUES('".$Bname."','".$Bemail."','".$Location."','".$Status."')";


if(mysqli_query($connect,$insert)){
    echo "success";
    header("Location: Admin-Manage Business.php");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($connect);
}

?>