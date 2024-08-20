<?php
session_start();
include("connect.php");
$conn = new mysqli($servername, $username, $password, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    
    $valid_username = "admin";
    $valid_password = "password";

    
    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: mainpage.php");
        exit();
    } else {
        $error = "Invalid username or password";
    }
}
?>
