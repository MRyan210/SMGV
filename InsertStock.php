<?php
$dbserver="localhost";
$dbusername="root";
$password="";
$dbname="stockmgmt1";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);

$StockName =$_POST["StockName"];
$StockPrice=$_POST["StockPrice"];
$Quantity = $_POST["Quantity"];


$insert="INSERT INTO `stockitem`(`StockName`, `StockPrice`, `Quantity`)
VALUES('".$StockName."','".$StockPrice."','".$Quantity."')";


if(mysqli_query($connect,$insert)){
    echo "success";
    header("Location: Admin-Manage Stocks.html");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($connect);
}

?>