<?php
require 'header.php';
require 'dbconnection.php';


$sql2="DELETE FROM rezerwacje WHERE rezerwacje.id_klienta = ".$_SESSION['id'];

if(mysqli_query($conn,$sql2)){
    header('Location: panel_bibliotekarza.php');
}
require 'footer.php';

?>
