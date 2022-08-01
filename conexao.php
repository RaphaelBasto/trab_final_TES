<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$hostname = "us-cdbr-east-06.cleardb.net";
$banco = "raphaelbasto";
$username = "bbec8ec88a2b5f"; 
$password = "3a9c327b"; 

$mysqli =  new \MySQLi($hostname, $username, $password, $banco);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
