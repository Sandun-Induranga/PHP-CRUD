<?php
session_start();
require 'config.php';


// Create 

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


// Update

if(isset($_POST['update'])){

    $cusId = mysqli_real_escape_string($con, $_POST['cusId']);
    $cusName = mysqli_real_escape_string($con, $_POST['cusName']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);

    $sql = "UPDATE Customer SET cusName = '$cusName', cusAddress = '$address', cusSalary = '$salary' WHERE cusId = '$cusId'";

    $excecute = mysqli_query($con, $sql);

    if($excecute){
        $_SESSION['message'] = "Customer Updated Successfully..!";

        header("Location: create.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Something Went Wrong..!";

        header("Location: create.php");
        exit(0);
    }

}


// Delete

if(isset($_POST['delete'])){

    $cusId = mysqli_real_escape_string($con, $_POST['delete']);
    $sql = "DELETE FROM Customer WHERE cusId = '$cusId'";

    $excecute = mysqli_query($con, $sql);

    if($excecute){
        $_SESSION['message'] = "Customer Deleted Successfully..!";

        header("Location: index.php");
        exit(0);
    }else{
        $_SESSION['message'] = "Something Went Wrong..!";

        header("Location: index.php");
        exit(0);
    }
}

?>