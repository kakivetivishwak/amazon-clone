<?php
session_start();
include("db_connect.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
} else {
    echo "<script>
            alert('Invalid Email or Password');
            window.location.href='login.html';
          </script>";
}

$conn->close();
?>