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

            <form class="w-75 row" method="post">

                <div class="mb-3 mt-5 col-3">
                    <label for="txtCusId" class="form-label">Customer ID</label>
                    <input type="text" class="form-control" name="cusId">
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtCusName" class="form-labename">Customer Name</label>
                    <input type="text" class="form-control" name="cusName">
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtAddress" class="form-labename">Address</label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="mb-3 mt-5 col-3">
                    <label for="txtSalary" class="form-label">Salary</label>
                    <input type="text" class="form-control" name="salary">
                </div>

                <div class="row mb-5 mt-2 justify-content-end">
                    <button class="me-2 col-1 btn btn-success">Save</button>
                    <button class="me-2 col-1 btn btn-warning">Update</button>
                    <button class="me-2 col-1 btn btn-danger">Delete</button>
                </div>

            </form>

        </div>

    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>