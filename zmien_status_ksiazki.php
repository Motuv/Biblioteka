<?php
require 'header.php';
require 'dbconnection.php';
session_start();

$sql="UPDATE ksiazki SET ksiazki.status='zarezerwowana' WHERE id_ksiazki=".$_SESSION['book'];
mysqli_query($conn, $sql);
header('Location: panel_klienta.php');

require 'footer.php';
 ?>
