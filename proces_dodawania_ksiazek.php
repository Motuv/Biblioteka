<?php
require 'header.php';
require 'dbconnection.php';

    $tytul = $_GET['tytul'];
    $gatunek = $_GET['gatunek'];
    $wydawnictwo = $_GET['wydawnictwo'];
    $autor = $_GET['autor'];
    $sql= "INSERT INTO ksiazki (tytul, gatunek, wydawnictwo,id_autora,l_wypozyczen,status) VALUES('$tytul','$gatunek','$wydawnictwo',$autor,0,'dostepna')";
    if(mysqli_query($conn, $sql)){
        echo"</br><h3>Dodano pomyślnie</h3>";
    };



require 'footer.php';
?>
