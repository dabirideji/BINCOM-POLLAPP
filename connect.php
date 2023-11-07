<?php
// Database connection
$servername = "sql213.infinityfree.com";
$username = "if0_35378125";
$password = "c0yzokpRjpUUwz4";
$dbname = "if0_35378125_bincom_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("ERROR  CONNECTING TO DATABASE". $conn->connect_error);
};
 

?>