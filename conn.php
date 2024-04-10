<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'stockmgmt1');
 
	if(!$conn){
		die("Error: Failed to connect to database");
	}
      
	$select_rows = mysqli_query($conn, "SELECT * FROM `stockitem`") or die('query failed');
	$row_count = mysqli_num_rows($select_rows);

	
	
    ?>
