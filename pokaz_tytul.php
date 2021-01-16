<?php

function showtitle($id){
  $servername = "mysql.agh.edu.pl";
  $login = "piotrmir";
  $pass = "3gsp7M61TP3wYKDV";
  $dbname = "piotrmir";

  $conn = new mysqli($servername, $login, $pass, $dbname);

  if (mysqli_error($conn)) {
      die("Connection failed: ".mysqli_error($conn));
  }
  if($id!=0){
    $sql="SELECT tytul FROM ksiazki WHERE id_ksiazki=".$id;
    if($result = mysqli_query($conn, $sql)){
      while($row = mysqli_fetch_array($result)){
        return $row['tytul'];
      }
  }
  else {
    return 0;
  }
}
}; ?>
