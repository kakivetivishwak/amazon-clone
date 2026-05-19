<?php

$servername = "localhost";
$username = "root";
$password = "Vichu@2008";
$database = "users";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

?>