<?php

@include 'conn.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET Quantity = '$update_value' WHERE CartID = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE CartID = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Shopping Cart</title>
</head>

<body>

<div class="container mt-5">
<?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Shopping Cart
                    <a href="BRedeemVoucher.php" class="btn btn-danger float-end">BACK</a>
                </h4>
            </div>
            <div class="box">


<section class="main-content">
   <table class= "table table-striped table-hover">

      <thead>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
           
            <td><?php echo $fetch_cart['Name']; ?></td>
            <td>Ksh<?php echo number_format($fetch_cart['Price']); ?>/-</td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['CartID']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['Quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn" class = "btn btn-success btn-sm">
               </form>   
            </td>
            <td>Ksh<?php echo $sub_total = $fetch_cart['Price'] * $fetch_cart['Quantity']; ?>/-</td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['CartID']; ?>" onclick="return confirm('remove item from cart?')" class="btn btn-danger float-end"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <form style="padding: 10px 20px 10px 0px;">
          <div class="form-group">
            <th colspan="4">Grand Total</th>
            <td>Ksh<?php echo $grand_total; ?>/-</td>
      
         </form>
      </tbody>

   </table>

   </div>
   <div class="text-center">
                            <a href="BVoucher.php" class="btn btn-primary<?= ($grand_total > 1) ? '' : 'disabled'; ?>">Proceed to checkout</a>
                            <a href="BRedeemVoucher.php" class="btn btn-primary">Continue Shopping</a>
                            <a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="btn btn-danger">Delete All</a>
                        </div>
</section>

</div>
   
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>