<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'system';

//Create connection and select DB
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($con->connect_error) {
    die("Unable to connect database: " . $con->connect_error);
} 

?>