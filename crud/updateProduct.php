<?php
    include 'connection.php';
    $id = $_POST['id'];
    $name=$_POST['name'];
    $price =$_POST['price'];
    $image =$_POST['image'];

    //Update query
    $query = "UPDATE Products
                SET 
                    ProductID = '$id',
                    ProductName = '$name',
                    ProductPrice = '$price',
                    ProductImageName = '$image'
                WHERE
                    ProductID = '$id'
    ";

    //run query
    mysqli_query($connection,$query);
    //relocate back to main page
    header("Location: ./crud.php");
?>