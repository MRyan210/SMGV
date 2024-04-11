<?php
require 'conn.php';
if(isset($_POST['update_Voucher'])){

$VoucherCode = $_POST["VoucherCode"];


$update="UPDATE vouchercode SET Status='Redeemed' WHERE VoucherCode='$VoucherCode'";



$cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['Name'] .' ('. $product_item['Quantity'] .') ';
         $product_price = $product_item['Price'] * $product_item['Quantity'];
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);

   mysqli_begin_transaction($conn);
   try {
	//insert to orders table
	$insert_orders_querry = "INSERT INTO Orders (Email, total_products, total_price, VoucherCode) 
	SELECT vouchercode.Email, '$total_product', '$price_total', CASE WHEN '$VoucherCode' != '' THEN vouchercode.VoucherCode ELSE NULL END 
    FROM vouchercode 
    WHERE vouchercode.VoucherCode = '$VoucherCode'";

	$result_orders=mysqli_query($conn,$insert_orders_querry);

	if(!$result_orders){
		throw new Exception('Failed to insert data into Orders table');

	}
	$last_order_id = mysqli_insert_id($conn);


	$email_query = "SELECT Email FROM Orders WHERE OrderID = '$last_order_id'";
        $result_email = mysqli_query($conn, $email_query);
        $last_order_email = mysqli_fetch_assoc($result_email)['Email'];

	$order_id_query = "SELECT OrderID FROM Orders WHERE Email = '$last_order_email' ORDER BY DateCreated DESC";
        $order_id_result = mysqli_query($conn, $order_id_query);
        $last_order_id = mysqli_fetch_assoc($order_id_result)['OrderID'];

		$insert_customer_query = "INSERT INTO customer (OrderID, Email, VoucherCode) 
        SELECT Orders.OrderID, Orders.Email, '$VoucherCode'
        FROM Orders
        WHERE Orders.OrderID = '$last_order_id'";



$result_customer = mysqli_query($conn, $insert_customer_query);
if (!$result_customer) {
throw new Exception('Failed to insert data into customer table');
}
 // Update quantity in stockitem table based on items in cart fix quanity to not be taken out when 0
 $update_quantity_query = "
 UPDATE stockitem
 JOIN cart ON stockitem.StockName = cart.Name
 SET stockitem.Quantity = CASE 
 WHEN (stockitem.Quantity - cart.Quantity) >= 0 THEN (stockitem.Quantity - cart.Quantity)
 ELSE 0 END WHERE cart.Name IN (SELECT Name FROM cart)";

$result_update_quantity = mysqli_query($conn, $update_quantity_query);
if (!$result_update_quantity) {
 throw new Exception('No stock available for one or more Items');
}

// Clear the cart table
$clear_cart_query = "DELETE FROM cart";
$result_clear_cart = mysqli_query($conn, $clear_cart_query);

if ($result_clear_cart) {
    echo 'Cart cleared successfully';
} else {
    throw new Exception('Failed to clear cart');
}

// Commit the transaction if all queries were successful
mysqli_commit($conn);
echo 'Data inserted successfully into both Orders and customer tables';
} catch (Exception $e) {
// Rollback the transaction if an error occurred
mysqli_rollback($conn);
echo 'Error: ' . $e->getMessage();
}
}


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