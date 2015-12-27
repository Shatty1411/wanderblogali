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
    echo $email;
}

	if(isset($_POST['submit'])){
        $email = $_POST['InputEmail'];
        //echo $email;
        $sql = "SELECT * FROM users where email='$email'";
        $query = mysqli_query($con,$sql);
        if( mysqli_num_rows($query) > 0){
            header('Location:signup.php?error=1');
            exit;
        }

        $name = $_POST['InputName'];
        $lastname = $_POST['InputLastName'];
        $country =  $_POST['InputCountry'];;
        $password = md5( $_POST['InputPassword'] );
        $date = $_POST['InputDate'];
        $role = $_POST['usertype'];
      echo  $run_sql = "INSERT INTO users (name ,surname, role, birthday, email, passw, nationality)
 VALUES ('$name', '$lastname', '$role', '$date', '$email', '$role', '$password', '$country' ) ";
        exit;

        if(mysqli_query($DbConnection,$run_sql)){
            header( "refresh:2;url=index.php" );
            echo "<script>alert('Your registration was successful')</script>";  ;
        }
    }else{
        header('Location:signup.php?error=2');

    }
