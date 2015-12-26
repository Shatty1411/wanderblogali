<?php
/**
* Created by PhpStorm.
* User: Albc
* Date: 12/23/2015
* Time: 12:23 AM
 *
*/
include ("function/function.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wanderblog</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/wanderblog.css" rel="stylesheet">






</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Wanderblog</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">

                <li ><a href="index.php">Index</a></li>
                <li class=""><a href="about.php">About</a></li>
                <li ><a href="signup.php">Signup</a></li>
                <li><a href="adventure.php">Adventure</a></li>
                <li ><a href="loginform.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>

    </div>

</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Authors Page</h1>

        </div>
    </div>
    <!-- /.row -->
    <!-- Page Content -->
    <div class="container">

        <div class="col-md-3">

            <h4>
                <?php get_authors(); ?>
            </h4>

            <br>




        </div>


        <div class="col-md-9">

            <h2 class="text-center">Adventure posted page option</h2>
            <br>
            <h5 class="text-center">Adventure posted page options area here..</h5>

            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>
            <p  class="text-center">............</p>

        </div>




    </div>





    <!-- Footer -->
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Wanderblog 2015</p>
            </div>
        </div>
    </footer>

</div>


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
