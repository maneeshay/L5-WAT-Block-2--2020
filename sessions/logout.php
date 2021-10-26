
<?php  

if (isset($_POST['logout'])) {
    # code...
    session_unset(); //clear the session variables
    session_destroy(); //delete the session itself
    header('location:./sessions.php');

} 

?>

