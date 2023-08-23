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

    <title>Delete Stock</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Delete Stock
                            <a href="Admin- Manage Userscopy.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['StockID']))
                        {
                            $StockID = mysqli_real_escape_string($conn, $_GET['StockID']);
                            $query = "SELECT * FROM stockitem WHERE  `StockID` ='$StockID' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $Stock = mysqli_fetch_array($query_run);
                                ?>
                                <form action="crudStocks.php" method="POST">
                                    <input type="hidden" readonly name="StockID" value="<?= $Stock['StockID']; ?>">

                                    <div class="mb-3">
                                        <label>Item Name</label>
                                        <input type="text" readonly name="Stockname" value="<?=$Stock['StockName'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Price</label>
                                        <input type="email" readonly    name="Price" value="<?=$Stock['StockPrice'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <input type="text" readonly name="Quantity" value="<?=$Stock['Quantity'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" name="delete_Stock" value="<?=$Stock['StockID'];?>" class="btn btn-primary">
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