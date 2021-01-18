<?php

function wypozycz($id){
  $servername = "mysql.agh.edu.pl";
  $login = "piotrmir";
  $pass = "3gsp7M61TP3wYKDV";
  $dbname = "piotrmir";

  $conn = new mysqli($servername, $login, $pass, $dbname);

  if (mysqli_error($conn)) {
      die("Connection failed: ".mysqli_error($conn));
  }

  $sql="UPDATE ksiazki SET status='wypozyczona',l_wypozyczen=l_wypozyczen+1 WHERE id_ksiazki=$id";

  if(mysqli_query($conn,$sql)){
    return true;
  }
}

function oddaj($id){
  $servername = "mysql.agh.edu.pl";
  $login = "piotrmir";
  $pass = "3gsp7M61TP3wYKDV";
  $dbname = "piotrmir";

  $conn = new mysqli($servername, $login, $pass, $dbname);

  if (mysqli_error($conn)) {
      die("Connection failed: ".mysqli_error($conn));
  }

  $sql="UPDATE ksiazki SET status='dostepna' WHERE id_ksiazki=$id";

  if(mysqli_query($conn,$sql)){
    return true;
  }
}

?>
