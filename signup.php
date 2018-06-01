<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 22-5-2018
 * Time: 09:37
 */
include_once 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sign-up</title>
</head>
<body>
<div class="container">
    <div class="row">
        <section class="col-sm-2 col-md-3"></section>
        <section class="col-sm-8 col-md-6">
            <div style="margin-top: 75px;">
                <div class="jumbotron" >
                    <div class="form-group text-center container" style="margin-top: -30px" >
                        <h2>Sign-up</h2>
                    </div>
                    <hr>
                    <form class="form-horizontal" action="includes/signup.inc.php" method="post">
                        <div class="form-group">
                            <label for="Firstname">Name</label>
                            <div class="form-group form-row">
                                <div class="form-group col">
                                    <input class="form-control" type="text" id="first" name="first" placeholder="Firstname">
                                </div>
                                <div class="form-group col">
                                    <input class="form-control" type="text" id="last" name="last" placeholder="Lastname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="E-mail">E-mail</label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" id="uid" name="uid" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="Password">Password</label>
                                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password">
                            </div>
                        </div>
                        <!--<div class="form-group">
                            <label class="d-block">Select gender:</label>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="man" value="male"> Male
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" name="female" value="female"> Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label" for="Birthday">Birthday</label>
                            <div class="form-group form-row">
                                <div class="form-group col">
                                    <select class="form-control" id="Birthday" name="Birthday">
                                        <option>Day</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <select class="form-control" id="Birthday2" name="Birthday2">
                                        <option>Month</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div class="form-group col">
                                    <select class="form-control" id="Birthday3" name="Birthday3">
                                        <option>Year</option>
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group text-center">
                            <button class="btn btn-success" style="width: 100%" type="submit" name="submit">Sign up!</button>
                        </div>
                        <div class="form-group text-center">
                            <a>Already a member,</a>
                            <a class="text-info" href="response.php">Log in</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="col-sm-2 col-md-3"></section>
    </div>
</div>
<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
<?php
include_once 'navbar.php';
?>
