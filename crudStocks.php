<?php
session_start();
require 'conn.php';

if(isset($_POST['delete_Stock']))
{
    $StockID = mysqli_real_escape_string($conn, $_POST['delete_Stock']);
   

    $query = "DELETE FROM stockitem WHERE StockID='$StockID' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Stock Deleted Successfully";
        header("Location: Admin-Manage Stocks.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Stock Not Deleted";
        header("Location: Admin-Manage Stocks.php");
        exit(0);
    }
}

if(isset($_POST['update_Stock']))
{
    
    $StockID = mysqli_real_escape_string($conn, $_POST['StockID']);
    $StockName = mysqli_real_escape_string($conn, $_POST['StockName']);
    $Price = mysqli_real_escape_string($conn, $_POST['StockPrice']);
    $Quantity = mysqli_real_escape_string($conn, $_POST['Quantity']);
   

    $query = "UPDATE stockitem SET StockName = ' $StockName', StockPrice = '$Price', Quantity = '$Quantity' WHERE StockID='$StockID' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header("Location: Admin-Manage Stocks.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Not Updated";
        header("Location: Admin-Manage Stocks.php");
        exit(0);
    }

}




?>