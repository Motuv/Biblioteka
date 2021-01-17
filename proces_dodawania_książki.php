<?php
require 'header.php';
require 'dbconnection.php';

$conn = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($conn)) {
    die("Connection failed: ".mysqli_error($conn));
}

    $tytul = $_GET['tytul'];
    $gatunek = $_GET['gatunek'];
    $wydawnictwo = $_GET['wydawnictwo'];
    $sql= "INSERT INTO ksiazki (tytul,id_ksiazki, gatunek, wydawnictwo) VALUES(\"".$nazwa."\",".$id_ksiazki.",".$gatunek.",".$wydawnictwo.")";
    if(mysqli_query($conn, $sql)){
        echo"</br>Dodano pomyślnie";
    };



require 'footer.php';
?>