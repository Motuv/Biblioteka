<?php
require 'header.php';
require 'dbconnection.php';

$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];

$id=$_SESSION['id'];
$sql = "UPDATE autorzy SET imie = '$imie', nazwisko = '$nazwisko'WHERE id_autora=$id";
if(mysqli_query($conn, $sql)){
    echo "<h3>Zmodyfikowano</h3>";
}

require 'footer.php';
?>
