<?php
require 'header.php';
require 'dbconnection.php';

    $sql = "INSERT INTO autorzy VALUES (,$_POST['imie'],$_POST['nazwisko'])";
    if($conn->query($sql)){
        echo "<h3>Pomyślnie dodano autora</h3>";
    }
    require 'footer.php';
?>
