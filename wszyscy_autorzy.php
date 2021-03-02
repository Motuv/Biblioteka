<?php
require 'header.php';
require 'dbconnection.php';

echo "<form action='dodaj_autora.php'><input type='submit' value='Dodaj autora'></form>";

$sql = "SELECT * FROM autorzy";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>Id autora</th>";
                echo "<th>Imie</th>";
                echo "<th>Nazwisko</th>";
                echo "<th>Usuwanie</th>";
                echo "<th>Modyfikacja</th>";

            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id_autora'] . "</td>";
                echo "<td>" . $row['imie'] . "</td>";
                echo "<td>" . $row['nazwisko'] . "</td>";
                echo "<td><form method='post' action='usun_autora.php'><input type='number' name='id' value=".$row['id_autora']." style='visibility: hidden'></br><input type='submit' name='number' value='Usuń'></form></td>";
                echo "<td><form method='post' action='modyfikuj_autora.php'><input type='number' name='id' value=".$row['id_autora']." style='visibility: hidden'></br><input type='submit' name='number' value='Zmodyfikuj'></form></td>";
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
