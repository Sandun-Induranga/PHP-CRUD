<?php

    require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Manage Customers</title>

    <!-- CSS For Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

</head>

<body class="bg-light w-100 h-100 row justify-content-center">

    <!-- Table -->
    <section class="col-10">
        <div class="row d-flex justify-content-center align-items-center overflow-auto mt-5 mb-5 shadow-lg">

            <a class="mt-5 mb-4" href="create.php"><button class="btn btn-primary">Add Customers</button></a>
            <table class="table table-hover table-bordered table-striped" id="tblCustomer">
                <thead class="bg-primary text-light table-bordered sticky-top">
                    <tr>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Customer Address</th>
                        <th scope="col">Customer Salary</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                    $sql = "SELECT * FROM Customer";
                    $excecute = mysqli_query($con, $sql);

                    if(mysqli_num_rows($excecute)>0){

                        foreach($excecute as $customer){
                            ?>

                            <tr>
                                <td> <?= $customer['cusId'] ?> </td>
                                <td> <?= $customer['cusName'] ?> </td>
                                <td> <?= $customer['cusAddress'] ?> </td>
                                <td> <?= $customer['cusSalary'] ?> </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="update.php?cusId=<?= $customer['cusId'] ?>">Edit</a>
                                    <form action="content.php" method="POST" class="d-inline">
                                        <button type="submit" name="delete" value="<?= $customer['cusId']; ?>" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>

                            <?php
                        }

                    }else{
                        echo "<h4>This Table is Empty</h4>";
                    }

                ?>

                </tbody>
            </table>
        </div>
    </section>

    <!-- JS For Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>