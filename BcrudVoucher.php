<?php
session_start();
require 'conn.php';

if(isset($_POST['delete_Voucher']))
{
    
    $VoucherID = mysqli_real_escape_string($conn, $_POST['delete_Voucher']);
   

    $query = "DELETE FROM vouchercode WHERE VoucherID='$VoucherID' ";
    $query_run = mysqli_query($conn, $query);


    if($query_run)
    {
        $_SESSION['message'] = "Voucher Deleted Successfully";
        header("Location: Admin-Manage Vouchers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Voucher Not Deleted";
        header("Location: Admin-Manage Vouchers.php");
        exit(0);
    }
}





if(isset($_POST['update_Voucher']))
{
    $VoucherID = mysqli_real_escape_string($conn, $_POST['VoucherID']);
    $VoucherCode = mysqli_real_escape_string($conn, $_POST['VoucherCode']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Status = mysqli_real_escape_string($conn, $_POST['Status']);
    

    $query = "UPDATE vouchercode SET VoucherCode='$VoucherCode',Email = '$Email' ,Status='Redeemed'WHERE VoucherID='$VoucherID' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Voucher Redeemed Successfully";
        header("Location: Admin-Manage Vouchers.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: Admin-Manage Vouchers.php");
        exit(0);
    }

}




?>