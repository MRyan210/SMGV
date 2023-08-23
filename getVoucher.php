<?php
	require_once 'conn.php';
	$VoucherCode = $_POST['VoucherCode'];
	$StockPrice = $_POST['StockPrice'];
 
	$query = mysqli_query($conn, "SELECT * FROM `vouchercode` WHERE `VoucherCode` = '$VoucherCode' && `Status` = 'Active'") or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$fetch = mysqli_fetch_array($query);
	$array = array();
	if($count > 0){
		$Discount = $fetch['Discount'] / 100;
		$total = $Discount * $StockPrice;
		$array['Discount'] = $fetch['Discount'];
		$array['StockPrice'] = $StockPrice - $total;
 
		echo json_encode($array);
 
	}else{
		echo "error";
	}
?>