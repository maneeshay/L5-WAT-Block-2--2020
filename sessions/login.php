<?php 


include 'init.php';
//Gather details submitted from the $_POST array and store in local vars
if(isset($_POST['subLogin'])) {
  $username = $_POST['txtUser'];
  $password = $_POST['txtPass'];

//build query to SELECT records from the users table WHERE

//the username AND password in the table are equal to those entered
  $query="SELECT * FROM users WHERE username = '$username' && password ='$password' ";

    //check result and generate message with code below
//run query and store it in result
    $result = mysqli_query($connection, $query) or die("Query Failed");
    $total = mysqli_num_rows($result);
    if($total == 1)
    { 
       $_SESSION['username'] = $username;
       header('location:loginform.php');
    }

    else{
        echo "invalid login";
    }
}

 ?>