<?php
    //include connection
    include 'connection.php';
    
    //get id
    $id = $_GET['id'];
    
    //build query
    $query = "DELETE FROM Products WHERE ProductID='$id'";

    //run and return to the main page
    mysqli_query($connection,$query);

    // check to see if any rows were affected    
    if (mysqli_affected_rows($connection) > 0) {
        //If yes , return to calling page(stored in the server variables)
        header("Location: {$_SERVER['HTTP_REFERER']}");
       } else {
        // print error message
        echo "Error in query: $query. " . mysqli_error($connection);
        exit ;
       }
       

?>