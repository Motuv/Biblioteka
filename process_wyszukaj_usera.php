<?php
require 'header.php';
require 'dbconnection.php';

$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];

$sql="SELECT * FROM klienci WHERE imie='".$imie."'AND nazwisko='".$nazwisko."'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>imie</th>";
                echo "<th>nazwisko</th>";
                echo "<th>e-mail</th>";
                echo "<th>rezerwacje</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row["imie"] . "</td>";
                echo "<td>" . $row["nazwisko"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>";
                  echo "<form action='pokaz_rezerwacje_bibliotekarz.php' method='post'><input name='id' type='number' value='".$row["id_klienta"]."'></br><input type='submit' value='Pokaż rezerwację'></form>";
                echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
  }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }


    mysqli_close($conn);

require 'footer.php';
 ?>
