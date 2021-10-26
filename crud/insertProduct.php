<?php
    include 'connection.php';

    //check to see if the form has been submitted
    if (isset($_POST['submit'])){

        //gather data from form
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        //prepare a query
        $query = "INSERT INTO products 
                    (productName, productPrice, productImageName)
                         VALUES
                            ('$name','$price','$image')";
        
        //run query to insert new records
        mysqli_query($connection,$query);

        //return to calling page(stored in the server variables)
        header("Location: {$_SERVER['HTTP_REFERER']}");
    }
?>