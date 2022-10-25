<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Customers</title>

    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body class="bg-dark w-100 h-100 d-flex justify-content-center align-items-center">

    <!-- Form -->
    <section class="bg-light border border-2 rounded-5 shadow-lg border-primary mt-5 w-75">

        <?php

            include('alert.php');

        ?>

        <div class="d-flex flex-column justify-content-center align-items-center">

            <div class="mt-5">
                <a class="d-inline me-5" href="index.php"><button class="btn btn-danger">Back</button></a>
                <h1 class="d-inline text-primary">Add Customers</h1>
            </div>

            <form action="content.php" class="mt-5 w-75 h-100 row justify-content-center align-items-center" method="POST">

                <div class=" mt-3 col-8">
                    <label for="txtCusId" class="form-label">Customer ID</label>
                    <input type="text" class="form-control" name="cusId">
                </div>
                <div class="mt-3 col-8">
                    <label for="txtCusName" class="form-labename">Customer Name</label>
                    <input type="text" class="form-control" name="cusName">
                </div>
                <div class="mt-3 col-8">
                    <label for="txtAddress" class="form-labename">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mt-3 col-8">
                    <label for="txtSalary" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>

                <div class="mt-5 mb-5 col-5">
                    <button class="btn btn-success" name="save">Save Customer</button>
                </div>

            </form>

        </div>

    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>