<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 1-6-2018
 * Time: 10:29
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
    <title>Top 40</title>
<body>
<main>
    <div class="wrapper">
        <p class="title">Top 40</p>
        <hr>
        <?php
        for ($teller = 1; $teller <= 40; $teller++) {
            for ($i = 0; $i <= 0; $i++) {
                echo "<a class='nummers' href='nummer".$teller.".php'>nummer ". $teller. "</a>";
                echo "<br>";
        }}
        ?>
    </div>
</main>
</body>
</html>
<?php
include_once 'footer.php';
?>