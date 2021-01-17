<?php
require 'header.php';
require 'dbconnection.php';

echo "<form action='dodaj_klienta.php'><input type='submit' value='Dodaj klienta'></form>";

$sql = "SELECT * FROM klienci";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table border=1>";
            echo "<tr>";
                echo "<th>id klienta</th>";
                echo "<th>imie</th>";
                echo "<th>nazwisko</th>";
                echo "<th>data urodzenia</th>";
                echo "<th>email</th>";
                echo "<th>telefon</th>";
                echo "<th>zweryfikowany</th>";
                echo "<th>wysokosc kary</th>";
                echo "<th>rola</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id_klienta'] . "</td>";
                echo "<td>" . $row['imie'] . "</td>";
                echo "<td>" . $row['nazwisko'] . "</td>";
                echo "<td>" . $row['data_ur'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['telefon'] . "</td>";
                echo "<td>" . $row['zweryfikowany'] . "</td>";
                echo "<td>" . $row['wysokosc_kary'] . "</td>";
                echo "<td>" . $row['rola'] . "</td>";

                echo "<td><form method='post' action='usun_klienta.php'><input type='number' name='id' value=".$row['id_klienta']." style='visibility: hidden'><input type='submit' name='number' value='Usuń'></form></td>";
                echo "<td><form method='post' action='modyfikuj_klienta.php'><input type='number' name='id' value=".$row['id_klienta']." style='visibility: hidden'><input type='submit' name='number' value='Zmodyfikuj'></form></td>";
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
