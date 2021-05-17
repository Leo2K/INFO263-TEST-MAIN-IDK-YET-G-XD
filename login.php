<?php

$hostname = "127.0.0.1";
$database = "tserver";
$username = "root";
$password = "mysql";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    fatalError($conn->connect_error);
    return;
}

function login($conn, $username, $password) {
    $query = "select username, password from user where username = '{$username}'  and password = '{$password}'";
    $result = mysqli_query($conn, $query);
    $results = $result->fetch_array(MYSQLI_ASSOC);

    if (count($results) > 0) {
        return true;
    }
    return false;

}
echo login($conn, $username, $password);

?>