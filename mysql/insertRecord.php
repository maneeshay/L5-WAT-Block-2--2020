<?php
    //include connection
    include 'connection.php';

    if (isset($_POST['submitBtn'])){
        $fname =$_POST['fname'];
        $lname= $_POST['sname'];
        $email= $_POST['email'];
        $pass = $_POST['pass'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];

        //produce query to insert into table
        $query = "INSERT INTO Customer(FirstName, LastName, Email, Password, Gender, Age)
            VALUES('$fname', '$lname', '$email', '$pass','$gender', '$age')";

        //echo $query;
        //exit();

        //run query through connection
        if(mysqli_query($connection, $query)){
            echo "Record inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
         }
         //Navigate the stated location
        //header('location:mysql.php');
        
        }

        

?>