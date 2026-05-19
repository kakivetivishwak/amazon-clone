<?php
include("db_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Registration Successful');
            window.location.href='login.html';
          </script>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>