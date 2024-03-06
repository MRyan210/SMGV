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

    <title>User Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit User
                            <a href="Admin- Manage Users.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['UserID']))
                        {
                            $UserID = mysqli_real_escape_string($conn, $_GET['UserID']);
                            $query = "SELECT * FROM user WHERE  `UserID` ='$UserID' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $User = mysqli_fetch_array($query_run);
                                ?>
                                <form action="crud.php" method="POST">
                                    <input type="hidden" name="UserID" value="<?= $User['UserID']; ?>">

                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="FirstName" value="<?=$User['FirstName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="LastName" value="<?=$User['LastName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" name="Email" value="<?=$User['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Phonenumber</label>
                                        <input type="text" name="Phonenumber" value="<?=$User['Phonenumber'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>NationalID</label>
                                        <input type="email" readonly    name="NationalID" value="<?=$User['NationalID'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Date of Birth</label>
                                        <input type="date" name="DateofBirth" value="<?=$User['DateofBirth'];?>" class="form-control">
                                    </div>
                                    <div class="form-group">
			<?php
				$result = "SELECT BName, BusinessID From business";
                $query_run = mysqli_query($conn,$result);
			?>
		    <label>Add Business</label>

			<Select type= "text" name="Business" class="form-control" required>
				<?php
                while($rows =$query_run->fetch_assoc()) {
					$Bname = $rows['BName'];
					$BID = $rows['BusinessID'];
					echo "<Option Value ='".$BID."'>.$Bname</Option>";
				}
				?>
			</Select>
		</div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_User" class="btn btn-primary">
                                            Update
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>