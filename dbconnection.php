<?php
$servername = "mysql.agh.edu.pl";
$login = "piotrmir";
$pass = "3gsp7M61TP3wYKDV";
$dbname = "piotrmir";

$conn = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($conn)) {
    die("Connection failed: ".mysqli_error($conn));
}
 ?>
