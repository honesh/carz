<?php
$username = $_POST['username'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "carz");

$query = "SELECT password FROM users WHERE username='$username'";

$result = mysqli_query($conn, $query);

$result = mysqli_fetch_array($result, MYSQLI_ASSOC);

mysqli_close($conn);
if ($result['password'] == $password) {
    setcookie("username", $username);
    echo "Login Successful";
    header("Location: /home");
} else {
    echo "Login failed, Username or password is wrong";
}