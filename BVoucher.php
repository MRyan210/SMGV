<?php
session_start();
require 'conn.php';




  // $detail_query = mysqli_query($conn, "INSERT INTO Orders (Email, total_products, total_price, VoucherCode)
 //  SELECT vouchercode.Email, '$total_product', '$price_total', vouchercode.VoucherCode
 //  FROM vouchercode
  // WHERE vouchercode.VoucherCode = '$VoucherCode'") or die('query failed');

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Redeem Voucher</title>
</head>
<body>
  
    <div class="container mt-5">

	
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Redeem Voucher
                            <a href="BRedeemVoucher.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					<?php
			//$query = mysqli_query($conn, "SELECT * FROM `stockitem` WHERE `StockID` = '$_REQUEST[StockID]'") or die(mysqli_error());
			//$fetch = mysqli_fetch_array($query);
		?>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
			<div class="display-order">
     <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price =$fetch_cart['Price'] * $fetch_cart['Quantity'];
            $grand_total = $total += $total_price;
      ?>
	 
      <span><?= $fetch_cart['Name']; ?>(<?= $fetch_cart['Quantity']; ?>)</span>
	  <input type="hidden" value="<?php echo $fetch_cart['Price']?>" id="StockPrice"/> 

	 
      <?php
	  
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
	   </div>
    <!--  <span class="grand-total"> grand total : $<?//= $grand_total; ?>/- </span> -->

				<!-- <h4 class="text-warning">*Optional</h4> -->
				
				<label>Voucher Code</label>
				<form action="BVoucherRedeem.php"style="padding: 10px 20px 10px 0px;" method="post">
				<input class="form-control" name="VoucherCode" type="text" id="VoucherCode"/>
				
				<input type="hidden" value="<?php echo $grand_total?>" id="StockPrice"/>
				<div id="result"></div>
				
				<br style="clear:both;"/>
				<a class="btn btn-primary" id="activate" >Check Code</a>
				
				<button type="submit" class="btn btn-primary" name="update_Voucher" id="redeem">Checkout</button>
	
				</form>


				
				<!--<button type="submit" name="update_Voucher" class="btn btn-redeem" id="Redeem">Redeem Code</button>
-->



			</div>
			<div class="form-group">
				<label>Total Price</label>
				<input class="form-control" type="number" value="<?php echo $grand_total?>" id="total" readonly="readonly" lang="en-150"/>
			</div>
			
		</div>
		
                    </div>
                </div>
            </div>
        </div>
    </div>

	<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
		
       $(document).ready(function(){
   // Store the original price when the page loads
   var originalPrice = parseFloat($('#total').val());

// Function to handle voucher code activation
$('#activate').one('click', function(){
	var coupon = $('#VoucherCode').val().trim();
	var price = parseFloat($('#total').val());
	if(coupon == ""){
		alert("Please enter a Voucher code!");
		return;
	}
	var button = $(this);
	button.prop('disabled', true);
	$.post('getVoucher.php', {VoucherCode: coupon, StockPrice: price}, function(data){
		if(data == "error"){
			alert("Invalid Voucher Code!");
			$('#result').html('');
		}else{
			var json = JSON.parse(data);
			$('#result').html("<h4 class='pull-right text-danger'>"+json.Discount+"% Off</h4>");
			$('#total').val(json.StockPrice);
		}
	}).always(function(){
		button.prop('disabled',false);
	});
});

// Function to handle voucher code generation
$('#generate').on('click', function(){
	$.get("getVoucher.php", function(data){
		$('#VoucherCode').val(data);
	});
});

// Event handler to revert total price when voucher code field is empty
$('#VoucherCode').on('input', function(){
	var coupon = $(this).val().trim();
	if(coupon === ""){
		$('#result').html(''); // Clear discount display
		// Only revert to original price if the total has been updated by a voucher code
		var currentPrice = parseFloat($('#total').val());
		if (currentPrice !== originalPrice) {
			$('#total').val(originalPrice);
		}
	}
});
});
  </script>
  

</body>
</html>