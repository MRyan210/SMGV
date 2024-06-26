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
        <title>Admin dashboard</title>
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
  <body onload="table();">
  


<div class="wrapper">
     
	  <div class="body-overlay"></div>
	 
	 <!-------sidebar--design------------>
	 
	 <div id="sidebar">
	    <div class="sidebar-header">
		   <h3><img src="img/Stocklogo.png" class="img-fluid"/><span>SGMV</span></h3>
		</div>
		<ul class="list-unstyled component m-0">
		  <li>
		  <a href="AdminHome.php" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  
		</li>
		<li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">inventory_2</i>Manage Stocks
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
			 <li><a href="Admin-Manage Stocks.php">Manage Stocks </a></li>
			 <li><a href="#">Add Stock Item</a></li>
		  </ul>
		  </li>
		  
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">redeem</i>Vouchering
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu2">
		   <!--  <li><a href="#">Manage Voucher Batch</a></li> -->
			 <li><a href="Admin-Manage Vouchers.php">Manage vouchers</a></li>
			<!-- <li><a href="#">Generate Voucher code</a></li> -->
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">business</i>Manage Business
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
			 <li><a href="Admin-Manage Business.php">Manage Business</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <li class="active">
		  <i class="material-icons">people</i>Manage User
		  </a>
		</li>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
			 <li><a href="#">Attach User to Business</a></li>
			 <li><a href="Admin- Manage Users.php">Manage Users</a></li>
		  </ul>
		  </li>
		  
		   <!-- <li class="dropdown">
		  <a href="#homeSubmenu5" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">border_color</i>forms
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu5">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu6" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">grid_on</i>tables
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu6">
		     <li><a href="#">table 1</a></li>
			 <li><a href="#">table 2</a></li>
			 <li><a href="#">table 3</a></li>
		  </ul>
		  </li>
		  
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu7" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">content_copy</i>Pages
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu7">
		     <li><a href="#">Pages 1</a></li>
			 <li><a href="#">Pages 2</a></li>
			 <li><a href="#">Pages 3</a></li>
		  </ul>
		  </li>
		
		   
		  <li class="">
		  <a href="#" class=""><i class="material-icons">date_range</i>copy </a>
		  </li>
		  <li class="">
		  <a href="#" class=""><i class="material-icons">library_books</i>calender </a>
		  </li>
		
		</ul>
	-->
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
							   
								<a href="index.html" class="nav-link">
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
				    <h4 class="page-title">Dashboard</h4>
					<ol class="breadcrumb">
					  <li class="breadcrumb-item active" aria-curent="page"> Admin Dashboard</li>
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
							    <h2 class="ml-lg-2">Manage  Users</h2>
							 </div>
							 <div class="col-sm-6 p-0 flex justify-content-lg-end justify-content-center">
							   <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
							   <i class="material-icons">&#xE147;</i>
							   <span>Add New User</span>
							   </a>
							   <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal">
							   <i class="material-icons">&#xE15C;</i>
							   <span>Delete</span>
							   </a>
							 </div>
					     </div>
					   </div>
					   
					   <table class="table table-striped table-hover">
					      <thead>
						     <tr>
							<!-- <th><span class="custom-checkbox">
							 <input type="checkbox" id="selectAll"> 
							 <label for="selectAll"></label></th>-->
							<b> <th>Date Created</th> </b>
							 <th>First Name</th>
							 <th>Last Name</th>
							 <th>National ID</th>
							 <th>Gender</th>
							 <th>DateofBirth</th>
							 <th>PhoneNumber</th>
							 <th>Email</th> </b>
							 </tr>
						  </thead>
						  
						 <!--to Put Menu Dashboards here -->




						  <tbody>
						  <?php 
                                    $query = "SELECT * FROM user WHERE Status = 1 ORDER BY DateCreated DESC";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $User)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $User['DateCreated']; ?></td>
                                                <td><?= $User['FirstName']; ?></td>
												<td><?= $User['LastName']; ?></td>
												<td><?= $User['NationalID']; ?></td>
												<td><?= $User['Gender']; ?></td>
												<td><?= $User['DateofBirth']; ?></td>
                                                <td><?= $User['Email']; ?></td>
                                                <td><?= $User['Phonenumber']; ?></td>
                                                
												
                                                <td>
                                                    <a href="UserEdit.php?UserID=<?= $User['UserID']; ?>" class="btn btn-success btn-sm">Edit</a>

													<!-- Delete section -->
													<a href="UserDelete.php?UserID=<?= $User['UserID']; ?>" class="btn btn-danger">Delete</a>
                                                      <!--  <button type="submit" name="delete_User" value="<?= $User['UserID'];?>" class="btn btn-danger btn-sm">Delete</button> -->
                                                    
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
						  </tbody>
						  
					      
					   </table>
					   
					   <!--
					   <div class="clearfix">
					     <div class="hint-text">showing <b>5</b> out of <b>25</b></div>
					     <ul class="pagination">
						    <li class="page-item disabled"><a href="#">Previous</a></li>
							<li class="page-item "><a href="#"class="page-link">1</a></li>
							<li class="page-item "><a href="#"class="page-link">2</a></li>
							<li class="page-item active"><a href="#"class="page-link">3</a></li>
							<li class="page-item "><a href="#"class="page-link">4</a></li>
							<li class="page-item "><a href="#"class="page-link">5</a></li>
							<li class="page-item "><a href="#" class="page-link">Next</a></li>
						 </ul>
					   </div>
								-->
					   
					   
					   
					   
	
					   
					   
					   
					   
					   </div>
					</div>
					
					
		
					<!----add-modal start--------->

		
<div class="modal fade" tabindex="-1" id="addEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">

	<form action="InserttAdmin.php" method="POST">
	<div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>First Name</label>
			<input type="text" name = "FirstName" class="form-control" required="true">
		</div>
		<div class="form-group">
		    <label>Last Name</label>
			<input type="text" name="LastName" class="form-control" required="true">
		</div>

		<div class="form-group">
		    <label>National ID</label>
			<input type="text" name="NationalID" class="form-control" required="true">
		</div>

		<div class="form-group">
		    <label>Gender</label>
			<select id ="Gender"  input type="submit" name="Gender" class="form-control" required="true">
				<option value="Select" selected>Select Gender</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
				</select>
		</div>

		<div class="form-group">
		    <label>Date of Birth</label>
			<input type="date" name="DateofBirth" class="form-control" required="true">
		</div>
		
		<div class="form-group">
		    <label>PhoneNumber</label>
			<input type="text" name="PhoneNumber" class="form-control" required="true">
		</div>

		<div class="form-group">
		    <label>Email</label>
			<input type="email" name="Email" class="form-control" required>
		</div>
			
		<div class="form-group">
			<?php
				$result = "SELECT BName, BusinessID From business";
                $query_run = mysqli_query($conn,$result);
			?>
		    <label>Add Business</label>

			<Select type= "text" name="Business" class="form-control" required>
				
				<?php
				echo "<Option disabled selected> Select Business </Option>";
                while($rows =$query_run->fetch_assoc()) {
					$Bname = $rows['BName'];
					$BID = $rows['BusinessID'];
					
					echo "<Option Value ='".$BID."'>.$Bname</Option>";
				}
				?>
			</Select>
		</div>




		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-success">Add</button>
      </div>
    </div>
</form>


  </div>
</div>

					   <!----edit-modal end--------->
					   
					   
					   
					   
					   
				   <!----edit-modal start--------->
		<div class="modal fade" tabindex="-1" id="editEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Employees</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
		    <label>Name</label>
			<input type="text" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Email</label>
			<input type="emil" class="form-control" required>
		</div>
		<div class="form-group">
		    <label>Address</label>
			<textarea class="form-control" required></textarea>
		</div>
		<div class="form-group">
		    <label>Phone</label>
			<input type="text" class="form-control" required>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>

					   <!----edit-modal end--------->	   
					   
					   
					 <!----delete-modal start--------->
		<div class="modal fade" tabindex="-1" id="deleteEmployeeModal" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Delete Employees</h5>
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
        <button type="button" class="btn btn-success">Delete</button>
      </div>
    </div>
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
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
       $(document).ready(function(){
		$('.edit').click(function(){
			var PhoneNumber = $(this).data('id');
			$('#editEmployeeModal').load('')
			$('#editModal').load('editEmployeeModal.php?Phonenumber=' + phoneNumber);
        });

        // Handle the click event on delete links
        $('.delete').click(function () {
            var phoneNumber = $(this).data('id');
            // Load the delete modal content dynamically using AJAX
            $('#deleteEmployeeModal').load('deleteEmployeeModal.php?Phonenumber=' + phoneNumber);
     
   

		})
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


