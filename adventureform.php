<?php
/**
* Created by PhpStorm.
* User: Albc
* Date: 12/23/2015
* Time: 12:27 AM
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
            <h1 class="page-header">Create an Adventure
            </h1>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <form role="form" action="adventureProcessing.php" method="post">
                <div class="col-md-6 col-md-offset-3">


                    <div class="form-group">
                        <label for="InputTitle">Adventure title</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputTitle" id="InputTitle">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Adventure Country</label>
                        <div class="input-group">
                            <input type="country" class="form-control" id="InputCountry" name="InputCountry" placeholder="Enter Country" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="InputAdventure">Tell your Story</label>
                        <div class="input-group">
                            <textarea class="form-control" id="InputAdventure" name="InputAdventure" cols="50" rows="10"></textarea>
                        </div>
                    </div>


                    <!--<div class="input-group">-->
                    <input type="submit" name="create" id="create" value="Create" class="btn btn-info pull-right">
                       <!-- <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>

                    </div>
                  -->
                </div>

            </form>

        </div>
    </div>

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

<!-- Script to Activate the Carousel -->
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
</script>

</body>

</html>
