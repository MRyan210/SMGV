<?php
require 'conn.php';
$VoucherCode = $_POST["VoucherCode"];


$update="UPDATE vouchercode SET Status='Redeemed' WHERE VoucherCode='$VoucherCode'";



if( mysqli_query($conn,$update)){
    
    header("Location: Business-Manage Vouchers.php");
}
else{
    echo"failure";
    echo"<br/>";
    echo mysqli_error($conn);
}

?>


?>