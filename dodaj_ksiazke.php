<?php
require 'header.php';
$servername = "mysql.agh.edu.pl";
$login = "piotrmir";
$pass = "3gsp7M61TP3wYKDV";
$dbname = "piotrmir";

$conn = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($conn)) {
    die("Connection failed: ".mysqli_error($conn));
}

$sql="SELECT * FROM autorzy";

    echo '<form action="proces_dodawania_ksiazek.php" method="get">
    <p>
        <label for="inputNazwa">Tytul</label>
        <input type="text" name="tytul" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Wydawnictwo</label>
        <input type="text" name="wydawnictwo" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Gatunek</label>
        <input type="text" name="gatunek" id="inputNazwa">
  </p>
  <label for="autor">Autor</label>
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

    echo '</select>
    </p>
    <input type="submit" value="Dodaj ksiazke">
    </form>';

    require 'footer.php';
?>
