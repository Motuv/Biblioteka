<?php
require 'header.php';
require 'dbconnection.php';

$conn = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($conn)) {
    die("Connection failed: ".mysqli_error($conn));
}
    $imie = $_GET['imie'];
	$nazwisko = $_GET['nazwisko'];
	$data_ur = $_GET['data_ur'];
    $email = $_GET['email'];
	$telefon = $_GET['telefon'];
	$zweryfikowany = $_GET['zweryfikowany'];
	$rola = $_GET['rola'];
	$id_klienta = $_GET['id_klienta'];
    $sql= "INSERT INTO klienci (imie,nazwisko,data_ur,email,telefon,zweryfikowany,rola,id_klienta) VALUES(\"".$imie."\",".$nazwisko."\",".$data_ur."\",".$email."\",".$telefon."\",".$zweryfikowany."\",".$rola."\",".$id_klienta.")";
    if(mysqli_query($conn, $sql)){
        echo"</br>Dodano pomyślnie";
    };



require 'footer.php';
?>