<?php
	function coupon($l){
		$coupon = "SG".substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',$l-2)),0,$l-2);

		return $coupon;
	}
	
	echo coupon(6);
?>