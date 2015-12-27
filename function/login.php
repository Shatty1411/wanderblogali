<?php
session_start();
include("db.php");
global $DbConnection;
if (isset($_POST['olvidado'])) {
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }

    $email = mysqli_real_escape_string($DbConnection, $_POST['email']);
    $password = md5($_POST['password']);

    $checklogin = mysqli_query($DbConnection, "SELECT * FROM users WHERE email = '$email' AND password = '$password'");

    if (mysqli_num_rows($checklogin) == 1) {
        $row = mysqli_fetch_assoc($checklogin);
        $username = $row['email'];
        $name = $row['firstname'];
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $name;
        $_SESSION['LoggedIn'] = 1;
        echo "<script>window.open('../profile.php', '_self')</script>";
        exit();
    }
    else {
        echo "<script>alert('Username and/or password incorrect')</script>";
    }
}