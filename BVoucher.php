<?php
session_start();
require 'conn.php';
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
                            <a href="Business-Manage Vouchers.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
					<?php
			$query = mysqli_query($conn, "SELECT * FROM `stockitem` WHERE `StockID` = '$_REQUEST[StockID]'") or die(mysqli_error());
			$fetch = mysqli_fetch_array($query);
		?>
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="form-group">
				<!-- <h4 class="text-warning">*Optional</h4> -->
				<label>Voucher Code</label>
				<form action="BVoucherRedeem.php"style="padding: 10px 20px 10px 0px;" method="post">
				<input class="form-control" name="VoucherCode" type="text" id="VoucherCode"/>
				<input type="hidden" value="<?php echo $fetch['StockPrice']?>" id="StockPrice"/>
				<div id="result"></div>
				<br style="clear:both;"/>
				<a class="btn btn-primary" id="activate" >Check Code</a>
				
				<button type="submit" class="btn btn-primary" name="update_Voucher" id="redeem">Redeem Code</button>

				</form>


				
				<!--<button type="submit" name="update_Voucher" class="btn btn-redeem" id="Redeem">Redeem Code</button>
-->



			</div>
			<div class="form-group">
				<label>Total Price</label>
				<input class="form-control" type="number" value="<?php echo $fetch['StockPrice']?>" id="total" readonly="readonly" lang="en-150"/>
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

		$('#activate').on('click', function(){
			var coupon = $('#VoucherCode').val();
			var price = $('#StockPrice').val();
			if(coupon == ""){
				alert("Please enter a coupon code!");
			}else{
				$.post('getVoucher.php', {VoucherCode: coupon, StockPrice: price}, function(data){
					if(data == "error"){
						alert("Invalid Coupon Code!");
						$('#total').val(price);
						$('#result').html('');
					}else{
						var json = JSON.parse(data);
						$('#result').html("<h4 class='pull-right text-danger'>"+json.Discount+"% Off</h4>");
						$('#total').val(json.StockPrice);
					}
				});
			}
		});


		$('#generate').on('click', function(){
			$.get("getVoucher.php", function(data){
				$('#VoucherCode').val(data);
			});
		});
    });
  </script>
  

</body>
</html>