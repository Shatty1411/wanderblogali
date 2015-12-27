<?php
/**
 * Created by PhpStorm.
 * User: Albc
 * Date: 12/25/2015
 * Time: 4:56 PM
 */
include("function/db.php");

global $DbConnection;

$error = 0;
if (isset($_POST['submit'])){
    $email = $_POST['InputEmail'];
    $name = $_POST['InputName'];

    $country =  $_POST['InputCountry'];;
    $password = md5( $_POST['InputPassword'] );

    $role = $_POST['usertype'];
    $run_sql = "INSERT INTO users (name , role, email, passw, nationality)
  VALUES ('$name', '$role', '$email', '$password', '$country' ) ";
    if(mysqli_query($DbConnection,$run_sql)){
        header( "refresh:2;url=index.php" );
        echo "<script>alert('Your registration was successful')</script>";  ;
    } else {
        echo "error";
    }

}








