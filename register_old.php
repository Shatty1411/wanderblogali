<?php
error_reporting(0);
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
    echo $email;
}

	if(isset($_GET['submit'])){
        $email = $_GET['InputEmail'];
        //echo $email;
        $sql = "SELECT * FROM users where email='$email'";
        $query = mysqli_query($DbConnection,$sql);
        if( mysqli_num_rows($query) > 0){
            header('Location:signup.php?error=1');
            exit;
        }

        $name = $_GET['InputName'];
        $lastname = $_GET['InputLastName'];
        $country =  $_GET['InputCountrys'];;
        $password = md5( $_GET['InputPassword'] );
        $date = $_GET['InputDate'];
        $role = $_GET['usertype'];
        $run_sql = "INSERT INTO users (email ,name, surname, passw, nationality, role, birthday)
 VALUES ('$email', '$name', '$lastname', '$password', '$country', '$role', '$date') ";


        if(mysqli_query($DbConnection,$run_sql)){
            header( "refresh:2;url=index.php" );
            echo "<script>alert('Your registration was successful')</script>";  ;
        }
    }else{
        header('Location:signup.php?error=2');

    }
