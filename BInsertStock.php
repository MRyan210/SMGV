<?php
$dbserver="localhost";
$dbusername="root";
$password="";
$dbname="stockmgmt1";

$connect=mysqli_connect($dbserver,$dbusername,$password,$dbname);
if(isset($_POST['add_product'])){
$StockName =$_POST["StockName"];
$StockPrice=$_POST["StockPrice"];
$Quantity = $_POST["Quantity"];



$insert="INSERT INTO `stockitem`(`StockName`, `StockPrice`, `Quantity`)
VALUES('".$StockName."','".$StockPrice."','".$Quantity."')";


if(mysqli_query($connect,$insert)){
    header("Location: Business-Manage Stocks.php");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($connect);
}}

?>