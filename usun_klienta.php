<?php
require 'header.php';
require 'dbconnection.php';


$sql="DELETE FROM klienci WHERE klienci.id_klienta = ".$_POST['id'];
$_SESSION['id']=$_POST['id'];
if(mysqli_query($conn,$sql)){
    header('Location: usun_rezerwacje.php');
}
require 'footer.php';

?>
