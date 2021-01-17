<?php

function autorzy(){
  $servername = "mysql.agh.edu.pl";
  $login = "piotrmir";
  $pass = "3gsp7M61TP3wYKDV";
  $dbname = "piotrmir";

  $conn = new mysqli($servername, $login, $pass, $dbname);

  if (mysqli_error($conn)) {
      die("Connection failed: ".mysqli_error($conn));
  }

  $sql="SELECT * FROM autorzy";
  echo '<label for="autor">Autor</label>
  <select id="autor" name="autor">';

  if($result = mysqli_query($conn, $sql)){
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_array($result)){
          echo '<option value="'.$row['id_autora'].'">'.$row['imie']." ".$row['nazwisko'].'</option>';
          }
          mysqli_free_result($result);
      } else{
          echo "No records matching your query were found.";
      }
  } else{
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
  }
  $result->free_result();
  echo '</select>';
}

?>
