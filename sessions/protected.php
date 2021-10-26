<?php

include 'init.php';

if(!isset($_SESSION['username'])){

header('location:./sessions.php');

}

?> 
<p>Any page content that you want to protect can be placed here</p>

<a href="logout.php">Logout Page</a>