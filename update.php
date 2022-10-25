<?php

session_start();
require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Customers</title>

    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body class="bg-light w-100 h-100 row justify-content-center align-items-center">

    <!-- Form -->
    <section>

        <div class="d-flex flex-column justify-content-center align-items-center">

            <a class="mt-5" href="index.php"><button class="btn btn-danger">Back</button></a>

            <?php

            if (isset($_GET['cusId'])) {

                $cusId = mysqli_real_escape_string($con, $_GET['cusId']);
                $sql = "SELECT * FROM Customer WHERE cusId = '$cusId'";
                $excecute = mysqli_query($con, $sql);

                if (mysqli_num_rows($excecute) > 0) {

                    $customer = mysqli_fetch_array($excecute);
                    ?>
                        <form action="content.php" class="mt-5 w-75 h-100 row" method="POST">

                            <div class=" mt-3 col-8">
                                <label for="txtCusId" class="form-label">Customer ID</label>
                                <input type="text" class="form-control" name="cusId" value="<?= $customer['cusId']; ?>">
                            </div>

                            <div class="mt-3 col-8">
                                <label for="txtCusName" class="form-labename">Customer Name</label>
                                <input type="text" class="form-control" name="cusName" value="<?= $customer['cusName']; ?>">
                            </div>

                            <div class="mt-3 col-8">
                                <label for="txtAddress" class="form-labename">Address</label>
                                <input type="text" class="form-control" name="address" value="<?= $customer['cusAddress']; ?>">
                            </div>

                            <div class="mt-3 col-8">
                                <label for="txtSalary" class="form-label">Salary</label>
                                <input type="text" class="form-control" name="salary" value="<?= $customer['cusSalary']; ?>">
                            </div>

                            <div class="mt-5">
                                <button class="col-2 btn btn-success" name="update">Update</button>
                            </div>

                        </form>

                    <?php

                } else {
                    echo "<h4>Invalid Customer Id</h4>";
                }
            }

            ?>

        </div>

    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>