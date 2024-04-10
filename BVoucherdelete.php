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

    <title>Delete Voucher</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Delete Voucher
                            <a href="Business-Manage Vouchers.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['VoucherID']))
                        {
                            $VoucherID = mysqli_real_escape_string($conn, $_GET['VoucherID']);
                            $query = "SELECT * FROM vouchercode WHERE  `VoucherID` ='$VoucherID' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $Voucher = mysqli_fetch_array($query_run);
                                ?>
                                <form action="BcrudVoucher.php" method="POST">
                                    <input type="hidden" readonly name="VoucherID" value="<?= $Voucher['VoucherID']; ?>">

                                    <div class="mb-3">
                                        <label>Voucher Code</label>
                                        <input type="text" readonly name="Stockname" value="<?=$Voucher['VoucherCode'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <input type="email" readonly    name="Price" value="<?=$Voucher['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Discount%</label>
                                        <input type="text" readonly name="Quantity" value="<?=$Voucher['Discount'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="delete_Voucher" value="<?=$Voucher['VoucherID'];?>" class="btn btn-primary">
                                            Delete
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