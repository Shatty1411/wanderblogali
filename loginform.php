<?php?>
/**
* Created by PhpStorm.
* User: Albc
* Date: 12/23/2015
* Time: 12:25 AM
*/

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
                <li><a href="signup.php">Signup</a></li>
                <li><a href="adventure.php">Adventure</a></li>
                <li class="active"><a href="loginform.php">Login</a></li>
                <li><a href="contact.php">Contact</a></li>

            </ul>
        </div>

    </div>

</nav>



<!-- Page Content -->
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Login
            </h1>

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">

        <div class="col-md-6 col-md-offset-3">
            <h4 style="border-bottom: 1px solid #c5c5c5;">
                <i class="glyphicon glyphicon-user">
                </i>
                Account Access
            </h4>
            <div style="padding: 20px;" id="form-olvidado">
                <form accept-charset="UTF-8" role="form" id="login-form" method="post" action="function/login.php">

                    <fieldset>
                        <div class="form-group input-group">
          <span class="input-group-addon">
@
          </span>
                            <input class="form-control" placeholder="Email" name="email" type="email" required="" autofocus="">
                        </div>
                        <div class="form-group input-group">
          <span class="input-group-addon">
            <i class="glyphicon glyphicon-lock">
            </i>
          </span>
                            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" id="olvidado" name="olvidado">
                                Access
                            </button>
                            <p class="help-block">
                                <a class="pull-right text-muted" href="#" id="olvidado"><small>Forgot your password?</small></a>
                            </p>
                        </div>
                    </fieldset>
                </form>
            </div>
            <div style="display: none;" id="form-olvidado">
                <h4 class="">
                    Forgot your password?
                </h4>
                <form accept-charset="UTF-8" role="form" id="login-recordar" method="post">
                    <fieldset>
        <span class="help-block">
Email address you use to log in to your account
<br>
          We'll send you an email with instructions to choose a new password.
        </span>
                        <div class="form-group input-group">
          <span class="input-group-addon">
            @
          </span>
                            <input class="form-control" placeholder="Email" name="email" type="email" required="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block" id="btn-olvidado">
                            Continue
                        </button>
                        <p class="help-block">
                            <a class="text-muted" href="#" id="acceso"><small>Account Access</small></a>
                        </p>
                    </fieldset>
                </form>
            </div>
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
