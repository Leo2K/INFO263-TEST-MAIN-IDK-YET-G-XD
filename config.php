<?php
$hostname = "127.0.0.1";
$database = "tserver";
$username = "root";
$password = "mysql";

//new connection to database
$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    fatalError($conn->connect_error);
    return;
}
?>
