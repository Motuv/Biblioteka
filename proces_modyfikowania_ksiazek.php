<?php
require 'header.php';
require 'dbconnection.php';

$gatunek=$_POST['gatunek'];
$wydawnictwo=$_POST['wydawnictwo'];
$tytul=$_POST['tytul'];
$autor=$_POST['autor'];


$id=$_SESSION['id'];
$sql = "UPDATE ksiazki SET tytul = '$tytul', gatunek = '$gatunek', wydawnictwo= '$wydawnictwo',id_autora=$autor WHERE id_ksiazki=$id";
if(mysqli_query($conn, $sql)){
    echo "<h3>Zmodyfikowano</h3>";
}

require 'footer.php';
?>
