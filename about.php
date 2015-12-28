<?php
/**
 * Created by PhpStorm.
 * User: Albc
 * Date: 12/23/2015
 * Time: 12:24 AM
 */
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
             <?php if(isset($_SESSION['name'])){
                 echo '<li ><a href="profile.php">Home</a></li>
    <li ><a href="function/logout.php">Logout</a></li>
    <li class="active"><a href="adventure.php">Adventure</a></li>
    <li><a href="contact.php">Messaging</a></li>

    ';
             }
             else{
                 echo '
    <li ><a href="index.php">Index</a></li>
    <li ><a href="about.php">About</a></li>
    <li ><a href="signup.php">Signup</a></li>
    <li class="active"><a href="adventure.php">Adventure</a></li>
    <li ><a href="loginform.php">Login</a></li>
    <li><a href="contact.php">Contact</a></li>
    ';
             }?>


         </ul>
            </div>

        </div>

    </nav>

    <!-- Page Content -->
    <div class="container">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">About
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Intro Content -->
        <div class="row">

            <div class="col-md-12">
                <h2>About Wanderblog</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div>
        <!-- /.row -->



        <hr>

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
