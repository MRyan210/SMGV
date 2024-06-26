<?php 
session_start();
	require 'conn.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>Business dashboard</title>
	    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
	    <!----css3---->
        <link rel="stylesheet" href="css/custom.css">
		
		
		<!--google fonts -->
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	   <!--google material icon-->
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

  </head>
  <body>
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="img/Stocklogo.png" class="img-fluid"/><span>SGMV</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li>
		  <a href="BusinessHome.php" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		</li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">inventory_2</i>Manage Stocks
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
			 <li><a href="Business-Manage Stocks.php">Manage Stocks </a></li>
			 <li><a href="Business-Manage Stocks.php">Add Stock Item</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">redeem</i>Vouchering
		  </a>
		</li>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
			 <li><a href="Business-Manage Vouchers.php">Manage Active vouchers</a></li>
			 <li><a href="Business-ViewRVouchers.php">View Redeemed Vouchers</a></li>
			 <li><a href="BRedeemVoucher.php">Redeem vouchers</a></li>
		  </ul>
		  </li>

		  <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <li class="active">
		  <i class="material-icons">summarize</i>Reporting
		  </a>
		</li>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
			 <li><a href="Business-ViewRVouchers.php">View Redeemed Vouchers</a></li>
			 <li><a href="Business-ViewOrders.php">View Past Orders</a></li>
		  </ul>
		  </li>
		  
		   
	 </div>
	 
   <!-------sidebar--design- close----------->
   
   
   
      <!-------page-content start----------->
   
      <div id="content">
	     
		  <!------top-navbar-start-----------> 
		     
		  <div class="top-navbar">
		     <div class="xd-topbar">
			     <div class="row">
				     <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
					    <div class="xp-menubar">
						    <span class="material-icons text-white">signal_cellular_alt</span>
						</div>
					 </div>
					 
					 <div class="col-md-5 col-lg-3 order-3 order-md-2">
					     
					 </div>
					 
					 
					 <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
					     <div class="xp-profilebar text-right">
						    <nav class="navbar p-0">
							   <ul class="nav navbar-nav flex-row ml-auto">
							   
								<a href="index.php" class="nav-link">
									<span class="material-icons text-white">home</span>
								</a>
							 


							   <li class="dropdown nav-item">
							     <a class="nav-link" href="#" data-toggle="dropdown">
								  <img src="img/User.png" style="width:40px; border-radius:50%;"/>
								  <span class="xp-user-live"></span>
								 </a>
								  <ul class="dropdown-menu small-menu">
								     <li><a href="#">
									 <span class="material-icons">person_outline</span>
									 Profile
									 </a></li>
									 <li><a href="#">
									 <span class="material-icons">settings</span>
									 Settings
									 </a></li>
									 <li><a href="logout.php">
									 <span class="material-icons">logout</span>
									 Logout
									 </a></li>
									 
								  </ul>
							   </li>
							   
							   
							   </ul>
							</nav>
						 </div>
					 </div>
					 
				 </div>
				 
				 <div class="xp-breadcrumbbar text-center">
				    <h4 class="page-title">Dashboard-Manage Vouchers</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item active" aria-curent="page"> Business Dashboard</li>
					</ol>
				 </div>
				 
				 
			 </div>
		  </div>
		  <!------top-navbar-end-----------> 
		  
		  
		   <!------main-content-start-----------> 
		     
		      <div class="main-content">
			     <div class="row">
				    <div class="col-md-12">
					   <div class="table-wrapper">
					     
					   <div class="table-title">
					     <div class="row">
						     <div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
							    <h2 class="ml-lg-2">View Past Orders</h2>
							 </div>
							 <!--
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add Voucher reciepient</span>
							   </a>
							   <!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a> -->
	<!--
							   <a href="BRedeemVoucher.php" class="btn btn-success" >
							   <i class="material-icons">&#xE147;</i>
							   <span>Redeem Voucher</span>
							   </a> -->

							   
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							
							 <th style="font-weight: bold;">Date Created</th>
							 <th style="font-weight: bold;">Voucher Code</th>
							 <th style="font-weight: bold;">Customer's Email</th>
							 <th style="font-weight: bold;">Products Taken</th>
							 <th style="font-weight: bold;">Amount</th>

							 </tr>
						  </thead>
						  
						 <!--to Put Menu Dashboards here-->
						 <tbody>
						 <?php 
                                  // Pagination code starts here
                            // Number of records per page
                            $records_per_page = 15;

                            // Get the current page number from the URL parameter
                            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
                            $start_from = ($current_page - 1) * $records_per_page;

                            // SQL query with LIMIT clause
                            $query = "SELECT * FROM orders ORDER BY DateCreated DESC";
                            $query_run = mysqli_query($conn, $query);

                            // Fetch and display records
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $Voucher) {
                                            ?>
                                            <tr style= "font-size:smaller">
                                                <td><?= $Voucher['DateCreated']; ?></td>
                                                <td><?= $Voucher['VoucherCode']; ?></td>
												<td><?= $Voucher['Email']; ?></td>
												<td ><?= $Voucher['total_products']; ?></td> 
												<td style= "font-size:medium">Ksh <?= number_format($Voucher['total_price']); ?></td>
                                                <!-- <td>
                                                  <a href="student-view.php?UserID=" class="btn btn-info btn-sm">View</a> 

                                                   <a href="UserEdit.php?UserID=<?= $Voucher['VoucherID']; ?>" class="btn btn-success btn-sm">Edit</a> 

													 Delete section 
													 <a href="BVoucherdelete.php?VoucherID=<?= $Voucher['VoucherID']; ?>" class="btn btn-danger">Delete</a>
                                                       <button type="submit" name="delete_User" value="<?= $User['UserID'];?>" class="btn btn-danger btn-sm">Delete</button> 
                                                    
                                                </td> -->
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<tr><td colspan='5'>No Record Found</td></tr>";
                                    }
									?>
						  </tbody>
						  <tfoot>
						  <!-- <tr>
                                    <td colspan="5">
                                        <div class="pagination">
                                            <?php
                                            // Pagination code starts here
                                            $records_per_page = 10;
                                            $total_records = mysqli_num_rows($query_run);
                                            $total_pages = ceil($total_records / $records_per_page);
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo "<a href='Business-ViewRVouchers.php?page=$i'>$i</a> ";
                                            }
                                            ?>
                                    </div>
                                </td>
                            </tr> -->
                        </tfoot>
						  
					      
					   </table>
					
					   <div class="clearfix">
    <div class="hint-text">
        showing <b><?php echo min($records_per_page, $total_records); ?></b> out of <b><?php echo $total_records; ?></b>
    </div>
    <ul class="pagination">
        <li class="page-item <?php echo $current_page == 1 ? 'disabled' : ''; ?>">
            <a href="Business-ViewRVouchers.php?page=<?php echo ($current_page - 1); ?>" class="page-link">Previous</a>
        </li>
        <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
            <li class="page-item <?php echo $i == $current_page ? 'active' : ''; ?>">
                <a href="Business-ViewRVouchers.php?page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>
        <li class="page-item <?php echo $current_page == $total_pages ? 'disabled' : ''; ?>">
            <a href="Business-ViewRVouchers.php?page=<?php echo ($current_page + 1); ?>" class="page-link">Next</a>
        </li>
    </ul>
</div>
						
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					
		
					<!----add-modal start--------->

		
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">

	<form action="BVoucherSend.php" method="POST">
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Voucher reciepient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
	 <div class="form-group">
			<label>Voucher Code</label>
			<input type="text" class="form-control" name="VoucherCode" id="VoucherCode" readonly="readonly" required="required" />
			<br />
			<button id="generate" class="btn btn-success" name="generate" type="button"><span class="glyphicon glyphicon-random"></span> Generate</button> 
			</div>

        <div class="form-group">
		    <label>Customer Email</label>
			<input type="text" name = "Email" class="form-control" required="true">
		</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" class="form-control" name="Discount" min="10" required="required"/>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button name="save" class="btn btn-success">Add</button>
      </div>
    </div>
</form>
  </div>
</div>




									<!--Voucher redemption modal Start 
									<div class="modal fade" tabindex="-1" id="VoucherRedeem" role="dialog">
  <div class="modal-dialog" role="document">

	<form action="RedeemVoucher.php" method="POST">
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Voucher reciepient</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
			
	  <div class="form-group">
		    <label>Product</label>
			<select id ="Product"  input type="submit" name="Product" class="form-control" required="true">
				<option value="Select" selected>Select Product</option>
				<?php




?>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				</select>
		</div>



		<div class="modal-body">
	 <div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control" name="Price" id="Price" readonly="readonly" required="required" />
			<br />
			</div>

        <div class="form-group">
		    <label>Voucher Code</label>
			<input type="text" name = "VoucherCode" class="form-control" required="true">
		</div>
			<div class="form-group">
				<label>Discount</label>
				<input type="number" class="form-control" name="Discount" min="10" required="required"/>
			</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button name="save" class="btn btn-success">Add</button>
      </div>
    </div>
</form>
  </div>
</div>

-->


<!-- Voucher redemption end -->





					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
			<form action="Voucheredit.php" method="POST">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Voucher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Status</label>
			<input type="text" class="form-control" required>
		</div>
		
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</form>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
	<form action="Voucherdelete.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Voucher</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this Records</p>
		<p class="text-warning"><small>this action Cannot be Undone,</small></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Delete</button>
      </div>
    </div>
</form>
  </div>
</div>

					   <!----edit-modal end--------->   
					   
					
					
				 
			     </div>
			  </div>
		  
		    <!------main-content-end-----------> 
		  
		 
		 
		 <!----footer-design------------->
		 
		 <footer class="footer">
		    <div class="container-fluid">
			   
			</div>
		 </footer>
		 
		 
		 
		 
	  </div>
   
</div>



<!-------complete html----------->





  
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="Generate Coupon Code/js/bootstrap.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
   
  
  
   <script type="text/javascript">
       $(document).ready(function(){

		$('#generate').on('click', function(){
			$.get("GenerateVouchercode.php", function(data){
				$('#VoucherCode').val(data);
			});
		});

	      $(".xp-menubar").on('click',function(){
		    $("#sidebar").toggleClass('active');
			$("#content").toggleClass('active');
		  });
		  
		  $('.xp-menubar,.body-overlay').on('click',function(){
		     $("#sidebar,.body-overlay").toggleClass('show-nav');
		  });
		  
	   });
  </script>
  
  



  </body>
  
  </html>


