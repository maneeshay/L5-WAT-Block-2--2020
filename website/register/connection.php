<?php

$hostname='localhost';
$username='root';
$password='';
$databaseName='databaseconnection';

$connection= mysqli_connect($hostname,$username,$password,$databaseName) or exit('Unable to connect');
?>