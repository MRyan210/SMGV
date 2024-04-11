<?php
require_once 'conn.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

if(ISSET($_POST['save'])){
    $Email = $_POST['Email'];
    $VoucherCode = $_POST['VoucherCode'];
    $Discount = $_POST['Discount'];
    $Status = "Active";
    $query = mysqli_query($conn, "SELECT * FROM `vouchercode` WHERE `VoucherCode` = '$VoucherCode'") or die(mysqli_error());
    $row = mysqli_num_rows($query);
    



    if($row > 0){
        echo "<script>alert('Coupon Already Use')</script>";
        echo "<script>window.location = 'Business-Manage Vouchers.php'</script>";
    }else{
        mysqli_query($conn, "INSERT INTO `vouchercode`(`Email`,`VoucherCode`, `Discount`, `Status`) VALUES('$Email', '$VoucherCode', '$Discount', '$Status')") or die(mysqli_error());
        echo "<script>alert('Voucher Code has been Sent!')</script>";
        echo "<script>window.location = 'Business-Manage Vouchers.php'</script>";

    }


        //email voucher code
        try {
            //Server settings
                              
            $mail->isSMTP();                                         
            $mail->Host       = 'smtp.gmail.com';                    
            $mail->SMTPAuth   = true;                                 
            $mail->Username   = 'smgvoucher1@gmail.com';                
            $mail->Password   = 'bkxbziwifdpdgpzc';                     
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
            $mail->Port       = 465;                                    
        
            //Recipients
            $mail->setFrom('smgvoucher1@gmail.com', 'SMGV');
           // $mail->addAddress($_POST["email"]);    
           $mail->addAddress($Email);    
                                                                  
        
            
            //Content
            $mail->isHTML(true);                                  
            $mail->Subject = 'Voucher Code from SMGV';
            $mail->Body    ="Hello Dear Customer, Here is your Voucher code: $VoucherCode <br>
            Visit the business at any time to redeem the voucher code and to enjoy the discount Worth :  $Discount% ";
            $mail->AltBody = "Hello Dear Customer, Here is your Voucher code: $VoucherCode <br>
            Visit the business at any time to redeem the voucher code and to enjoy the discount Worth :  $Discount% ";
        
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }




    }

?>