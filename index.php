<!DOCTYPE html>

<?php

include "assets/php/config.php";

if(isset($_POST['submit'])){

}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Customers</title>

    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body class="bg-light w-100 h-100 row justify-content-center">

    <!-- Form -->
    <section class="col-12">

        <div class="d-flex justify-content-center align-items-center">

            <form class="w-75 row" method="post">

                <div class="mb-3 mt-5 col-3">
                    <label for="txtCusId" class="form-label">Customer ID</label>
                    <input type="text" class="form-control" name="cusId">
                    <span></span>
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtCusName" class="form-labename">Customer Name</label>
                    <input type="text" class="form-control" name="cusName">
                    <span></span>
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtAddress" class="form-labename">Address</label>
                    <input type="text" class="form-control" name="address">
                    <span></span>
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtSalary" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                    <span></span>
                </div>

                <div class="row mb-5 mt-2 justify-content-end">
                    <button class="me-2 col-1 btn btn-success">Save</button>
                    <button class="me-2 col-1 btn btn-warning">Update</button>
                    <button class="me-2 col-1 btn btn-danger">Delete</button>
                </div>

            </form>

        </div>

    </section>

    <!-- Table -->
    <section class="col-10">
        <div class="row d-flex justify-content-center align-items-center overflow-auto mb-5 shadow-lg">
            <table class="table table-hover" id="tblCustomer">
                <thead class="bg-primary text-light table-bordered sticky-top">
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Customer Salary</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>