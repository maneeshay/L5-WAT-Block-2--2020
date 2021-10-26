<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $databaseName = 'redstore';
    $connection = mysqli_connect($hostname, $username, $password, $databaseName) or
        exit("Unable to connect to database!");
?>