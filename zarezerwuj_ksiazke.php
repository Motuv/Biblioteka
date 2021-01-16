<?php
require 'header.php';
require 'dbconnection.php';

$sql="UPDATE rezerwacje SET rezerwacje.id_ksiazki".$_SESSION['free']."=".$_SESSION['book']." WHERE rezerwacje.id_klienta=".$_SESSION['id_klienta'];
mysqli_query($conn, $sql);
echo "Zarezerwowano";
header('Location: zmien_status_ksiazki.php');

require 'footer.php';
 ?>
