<?php
require 'header.php';
require 'dbconnection.php';

$tytul = $_POST['tytul'];

$sql="SELECT * FROM ksiazki WHERE tytul LIKE '%".$tytul."%'";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>tytul</th>";
                echo "<th>id_autora</th>";
                echo "<th>gatunek</th>";
                echo "<th>wydawnictwo</th>";
                echo "<th>liczba wypozyczen</th>";
                echo "<th>status</th>";
                echo "<th>Zarezerwuj</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id_ksiazki'] . "</td>";
                echo "<td>" . $row['tytul'] . "</td>";
                echo "<td>" . $row['id_autora'] . "</td>";
                echo "<td>" . $row['gatunek'] . "</td>";
                echo "<td>" . $row['wydawnictwo'] . "</td>";
                echo "<td>" . $row['l_wypozyczen'] . "</td>";
                echo "<td>" . $row['status'] . "</td>";
                echo "<td>";
                if($row["status"]=='dostepna'){
                  echo "<form action='sprawdz_wolne.php' method='post'><input name='id' type='number' value='".$row["id_ksiazki"]."'></br><input type='submit' value='Zarezerwuj'></form>";
                }
                echo "</td>";
              echo "</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);

require 'footer.php';
 ?>
