<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 7-5-2018
 * Time: 13:49
*/
session_start();

if(isset($_SESSION["user"])){
} else {
    header('location: response.php');
    //terug naar inlogscherm
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg ">
    <div class="container">

        <button class="navbar-toggler" type="button"
                data-toggle="collapse" data-target="#myTogglerNav"
                aria-controls="myTogglerNav"
                aria-expanded="false" aria-label="Togglee navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <a href="#" class="navbar-brand">Marc van Dalen</a>

        <div class="collapse navbar-collapse"  id="myTogglerNav">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Home</a>
                <a class="nav-item nav-link " href="#">Mission</a>
                <a class="nav-item nav-link " href="#">Services</a>
                <a class="nav-item nav-link " href="#">Staff</a>
                <a class="nav-item nav-link " href="#">Testimonials</a>
            </div>
        </div>

    </div><!-- container -->
</nav><!-- nav -->
<form action="website.php" method="post">
    <div class="container">
        <div class="row">
            <div class="form-group">
                <p><?php echo "<h2>Je bent ingelogt als ".$_SESSION["user"]["naam"]."</h2>"; ?></p>
                <p><a href="admin.php">admingedeelte</a></p>
                <p><a href="response.php?loguit">uitloggen</a></p>
            </div>
    </div>
</form>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>