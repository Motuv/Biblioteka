<?php
require 'header.php';
require 'dbconnection.php';

$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$email=$_POST['email'];
$telefon=$_POST['telefon'];
$zweryfikowany=$_POST['zweryfikowany'];
$wysokosc_kary=$_POST['wysokosc_kary'];

$id=$_SESSION['id'];
$sql = "UPDATE klienci SET imie = '$imie', nazwisko = '$nazwisko', email= '$email', telefon = $telefon, zweryfikowany = $zweryfikowany, wysokosc_kary = $wysokosc_kary WHERE id_klienta=$id";
if(mysqli_query($conn, $sql)){
    echo "Zmodyfikowano";
}

require 'footer.php';
?>
