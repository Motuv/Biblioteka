<?php
  require 'header.php';
  require 'dbconnection.php';
  
  $sql = "UPDATE rezerwacje SET data_zwrotu=DATE_ADD(data_zwrotu,INTERVAL 4 WEEK) WHERE id_rezerwacji=".$_POST['id'];

  if(mysqli_query($conn,$sql)){
  echo '<h3>Przedłużono</h3>';
  }

  require 'footer.php';

  ?>
