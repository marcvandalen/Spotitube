<?php
/**
 * Created by PhpStorm.
 * User: Marc
 * Date: 15-5-2018
 * Time: 10:09
 */

$user = "schooluser";
$pass = "Marc3Dalen!";

try {
    $dbh = new PDO('mysql:host=localhost;dbname=loginsystem;port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from users') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>