<?php
require 'header.php';
require 'dbconnection.php';

$sql="UPDATE ksiazki SET ksiazki.status='zarezerwowana' WHERE id_ksiazki=".$_SESSION['book'];
mysqli_query($conn, $sql);
header('Location: panel_klienta.php');
unset($_SESSION['book']);
unset($_SESSION['free']);
unset($_SESSION['id_klienta']);

require 'footer.php';
 ?>
