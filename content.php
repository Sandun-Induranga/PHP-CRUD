<?php
session_start();
require 'config.php';

if(isset($_POST['save'])){

    $cusId = mysqli_real_escape_string($con, $_POST['cusId']);
    $cusName = mysqli_real_escape_string($con, $_POST['cusName']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);

    $sql = "INSERT INTO Customer VALUES ('$cusId', '$cusName', '$address', '$salary')";

    $excecute = mysqli_query($con, $sql);

    if($excecute){
        $_SESSION['message'] = "Customer Added Successfully..!";

        header("Location: create.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Something Went Wrong..!";

        header("Location: create.php");
        exit(0);
    }

}

?>