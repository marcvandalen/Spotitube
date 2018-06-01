<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 1-6-2018
 * Time: 10:10
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
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900|Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Marc van Dalen</title>
<body>
<main>
    <section class="index-banner">
        <div class="vertical-center">
            <h2>Spotitube</h2>
            <h1>This website is created by Marc van Dalen</h1>
        </div>
    </section>
    <div class="wrapper">
        <p class="title">Playlists</p>
        <hr>
        <section class="index-links">
            <a href="#">
                <div class="index-boxlink-square box1">
                    <a href="top40.php">Top 40</a>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square box2">
                    <a href="pop.php">Pop</a>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square box3">
                    <a href="hiphop.php">Hip hop</a>
                </div>
            </a>
            <a class="index-links2" href="#">
                <div class="index-boxlink-square box4">
                    <a href="chill.php">Chill</a>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square box5">
                    <a href="house.php">House</a>
                </div>
            </a>
            <a class="index-links2" href="#">
                <div class="index-boxlink-square box6">
                    <a href="workout.php">Workout</a>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square box7">
                    <a href="rock.php">Rock</a>
                </div>
            </a>
            <a href="#">
                <div class="index-boxlink-square box8">
                    <a href="summer.php">Summer</a>
                </div>
            </a>
        </section>

    </div>
</main>
</body>
</html>
<?php
include_once 'footer.php';
?>
