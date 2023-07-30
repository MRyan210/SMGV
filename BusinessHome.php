<?php require 'Session.php';?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
       
	 <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/inv.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
	 
	  <title>Business dashboard</title>


	 <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />




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
		  <li class="active">
		  <a href="AdminHome.html" class="dashboard"><i class="material-icons">dashboard</i>dashboard </a>
		  </li>
		  
		  <li class="dropdown">
		  <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">inventory_2</i>Manage Stocks
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu1">
		     <li><a href="#">Stock Menu <!--Leads to dashboard--></a></li>
			 <li><a href="#">Manage Stocks </a></li>
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
			 <li><a href="Admin-Manage Vouchers.html">Manage vouchers</a></li>
			<!-- <li><a href="#">Generate Voucher code</a></li> -->
		  </ul>
		  </li>
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu3" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">business</i>Manage Business
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu3">
			 <li><a href="Admin-Manage Business.html">Manage Business</a></li>
		  </ul>
		  </li>
		  
		  
		   <li class="dropdown">
		  <a href="#homeSubmenu4" data-toggle="collapse" aria-expanded="false" 
		  class="dropdown-toggle">
		  <i class="material-icons">people</i>Manage User
		  </a>
		  <ul class="collapse list-unstyled menu" id="homeSubmenu4">
			 <li><a href="#">Attach User to Business</a></li>
			 <li><a href="Admin- Manage Users.html">Manage Users</a></li>
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
			     <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
         Services
        </h2>
      </div>
    </div>
    <div class="container ">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/SMG1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Manage Stocks
              </h4>
              <p>
                Manage Stocks that are owned by a business.
              </p>
              <a href="">
                Select 
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box ">
            <div class="img-box">
              <img src="images/V1.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Vouchering
              </h4>
              <p>
                Manage Vouchers for businesses on the system.
              </p>
              <a href="Admin-Manage Vouchers.html">
                Select
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 ">
          <div class="box ">
            <div class="img-box">
              <img src="images/P2.png" alt="">
            </div>
            <div class="detail-box">
              <h4>
                Manage Business
              </h4>
              <p>
                Manage Businesses on the system.
              </p>
              <a href="Admin-Manage Business.html">
                Select
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>

              </a>
            </div>
          </div>
        </div>

		<div class="col-md-6 col-lg-4 ">
			<div class="box ">
			  <div class="img-box">
				<img src="images/warehouse-4.png" alt="">
			  </div>
			  <div class="detail-box">
				<h4>
				  Stock Item No.
				</h4>
				<p>
				  See total stock numbers on the system
				</p>
				<a href="">
				  Select
				  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  
				</a>
			  </div>
			</div>
		  </div>

		  <div class="col-md-6 col-lg-4 ">
			<div class="box ">
			  <div class="img-box">
				<img src="images/User.png" alt="">
			  </div>
			  <div class="detail-box">
				<h4>
				  Manage Users
				</h4>
				<p>
				  Manage Users on the system
				</p>
				<a href="Admin- Manage Users.html">
				  Select
				  <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
  
				</a>
			  </div>
			</div>
		  </div>

      </div>
    </div>
  </section>

  <!-- end service section -->
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


