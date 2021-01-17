<?php
require 'header.php';
require 'dbconnection.php';
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
    $sql = "INSERT INTO autorzy (imie, nazwisko) VALUES('$imie', '$nazwisko')";
    if($conn->query($sql)){
        echo "<h3>Pomyślnie dodano autora</h3>";
    }
    require 'footer.php';
?>
