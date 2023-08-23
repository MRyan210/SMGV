<?php
session_start();
require 'conn.php';

if(isset($_POST['delete_Business']))
{
    $Bname = mysqli_real_escape_string($conn, $_POST['Bname']);
    $Bemail = mysqli_real_escape_string($conn, $_POST['Bemail']);
    $Location = mysqli_real_escape_string($conn, $_POST['Location']);
    

    $query = "UPDATE business SET Status = 2 WHERE Bname='$Bname' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Business Deleted Successfully";
        header("Location: Admin-Manage Business.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Business Not Deleted";
        header("Location: Admin-Manage Business.php");
        exit(0);
    }
}

if(isset($_POST['update_Business']))
{
    

    $BusinessID = mysqli_real_escape_string($conn, $_POST['BusinessID']);
    $Bname = mysqli_real_escape_string($conn, $_POST['Bname']);
    $Bemail = mysqli_real_escape_string($conn, $_POST['Bemail']);
    $Location = mysqli_real_escape_string($conn, $_POST['Location']);
    

    $query = "UPDATE business SET Bname = '$Bname', Bemail = '$Bemail', `Location` = '$Location'  WHERE BusinessID='$BusinessID' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Business Updated Successfully";
        header("Location: Admin-Manage Business.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: Admin-Manage Business.php");
        exit(0);
    }

}




?>