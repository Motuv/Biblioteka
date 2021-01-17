<?php
require 'header.php';
require 'dbconnection.php';

$sql = "UPDATE rezerwacje SET data_wypozyczenia='0000-00-00', data_zwrotu='0000-00-00', id_ksiazki1=0,id_ksiazki2=0,id_ksiazki3=0,id_ksiazki4=0,id_ksiazki5=0,id_ksiazki6=0 WHERE id_rezerwacji=".$_POST['id'];

if(mysqli_query($conn,$sql)){
echo '<h3>Oddano</h3>';
}

require 'footer.php';
?>
