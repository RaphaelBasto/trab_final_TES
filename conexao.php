<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");

$hostname = "localhost";
$banco = "raphaelbasto";
$username = "root"; //"cakephp";
$password = ""; //"Cake#123";

$mysqli =  new \MySQLi($hostname, $username, $password, $banco);

if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
