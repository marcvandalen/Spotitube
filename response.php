<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 14-5-2018
 * Time: 13:53
 */
// get values passe from in formulier.html file
session_start();

$users = array(
    "Marc van Dalen" => array("password" => "1234","rol" => "administrator"),
    "Maarten" => array("password" => "4321","rol" => "gebruiker"),
    "Bassie" => array("password" => "adriaan","rol" => "gebruiker")
);

if(isset($_GET["loguit"])) {
    $_SESSION = array();
    session_destroy();
}

if(isset($_POST['knop'])
    && isset($users[$_POST["username"]])
    && $users[$_POST["username"]]["password"] == $_POST['password']) {
    $_SESSION["user"] = array("naam" => $_POST["username"],
        "password" => $users[$_POST["username"]]['password'],
        "rol" => $users[$_POST["username"]]['rol']);
    $message = "welkom! ".$_SESSION["user"]["naam"]." met de rol "
        .$_SESSION["user"]["rol"];
    header('location: website.php');
} else {
    $message = "";
}
include_once 'navbar.php';
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
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <form action="response.php" method="post">
        <div class="container ">
            <div class="row">
                <section class="col-sm-2 col-md-3"><h1><?php echo $message; ?></h1></section>
                <section class="col-sm-8 col-md-6">
                    <div style="margin-top: 75px;">
                        <div class="jumbotron jumbotron-inlog" >
                            <div class="form-group text-center container" style="margin-top: -35px" >
                                <h1>Log in</h1>
                                <?php
                                if (isset($_SESSION['u_id'])) {
                                    echo "you are logged in!";
                                }
                                ?>
                            </div>
                            <hr>
                            <form class="form-horizontal" action="includes/login.inc.php" method="post">
                                <div class="form-group">
                                    <label class="col-form-label" for="uid">Username</label>
                                    <input class="form-control" type="text" id="uid" name="uid" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password</label>
                                    <input class="form-control" type="Password" id="pwd" name="pwd" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input class="" type="checkbox">
                                        Remember me
                                    </label>
                                    <a class="text-info float-right " href="#">Forgot your Password?</a>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-primary" type="submit" name="submit" style="width: 100%">Log in</button>
                                </div>
                                <div class="form-group text-center">
                                    <a>Not a member,</a>
                                    <a class="text-info" href="signup.php">Sign-up now!</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <section class="col-sm-2 col-md-3"></section>
            </div>
        </div>
    </form>
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </body>
    </html>
<?php
include_once 'footer.php';
?>