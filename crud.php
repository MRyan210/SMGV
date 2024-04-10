<?php
session_start();
require 'conn.php';

if(isset($_POST['delete_User']))
{
    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Phonenumber = mysqli_real_escape_string($conn, $_POST['Phonenumber']);
    $DateofBirth = mysqli_real_escape_string($conn, $_POST['DateofBirth']);
    $NationalID = mysqli_real_escape_string($conn, $_POST['NationalID']);
    

    $query = "UPDATE user SET Status=2 WHERE NationalID='$NationalID' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Deleted Successfully";
        header("Location: Admin- Manage Users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Deleted";
        header("Location: Admin- Manage Users.php");
        exit(0);
    }
}

if(isset($_POST['update_User']))
{
    
    $DateofBirth = date('Y-m-d', strtotime($_POST['DateofBirth']));

    $FirstName = mysqli_real_escape_string($conn, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($conn, $_POST['LastName']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Phonenumber = mysqli_real_escape_string($conn, $_POST['Phonenumber']);
    $DateofBirth = mysqli_real_escape_string($conn, $_POST['DateofBirth']);
    $NationalID = mysqli_real_escape_string($conn, $_POST['NationalID']);
    $BusinessID = mysqli_real_escape_string($conn, $_POST['Business']);

    $query = "UPDATE user SET FirstName='$FirstName',LastName='$LastName',Email = '$Email' ,Phonenumber='$Phonenumber',DateofBirth='$DateofBirth', BusinessID ='$BusinessID'  WHERE NationalID='$NationalID' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: Admin- Manage Users.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "User Not Updated";
        header("Location: Admin- Manage Users.php");
        exit(0);
    }

}




?>