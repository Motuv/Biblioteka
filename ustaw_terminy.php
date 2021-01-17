<?php
require 'header.php';
require 'dbconnection.php';

$data=date('Y-m-d');
$data2 = date('Y-m-d', strtotime("+4 weeks", strtotime('now')));
$sql = "UPDATE rezerwacje SET data_wypozyczenia='$data', data_zwrotu='$data2' WHERE id_rezerwacji=".$_POST['id'];

if(mysqli_query($conn,$sql)){
echo '<h3>Wypożyczono</h3>';
}

require 'footer.php';
?>
