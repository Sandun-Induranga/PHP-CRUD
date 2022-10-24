<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Customers</title>

    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body class="bg-light w-100 h-100 row justify-content-center">

    <!-- Form -->
    <section>

        <div class="d-flex justify-content-center align-items-center">

            <form action="content.php" class="mt-5 w-75 h-100 row" method="POST">

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

                <div class="mt-5">
                    <button class="col-2 btn btn-success" name="save">Save</button>
                </div>

            </form>

        </div>

    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>