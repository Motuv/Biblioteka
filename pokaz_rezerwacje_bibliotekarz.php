<?php
  require 'header.php';
  require 'dbconnection.php';
  include 'pokaz_tytul.php';

  $sql="SELECT * FROM rezerwacje INNER JOIN  klienci ON klienci.id_klienta=rezerwacje.id_klienta INNER JOIN konta ON konta.id_klienta=klienci.id_klienta WHERE klienci.id_klienta='".$_POST['id']."'";
  if($result = mysqli_query($conn, $sql)){
      while($row = mysqli_fetch_array($result)){
        echo "<table border='1'>";
            echo "<tr>";
                echo "<th>id rezerwacji</th>";
                echo "<th>data wypożyczenia</th>";
                echo "<th>data zwrotu</th>";
                echo "<th>id_ksiazki1</th>";
                echo "<th>id_ksiazki2</th>";
                echo "<th>id_ksiazki3</th>";
                echo "<th>id_ksiazki4</th>";
                echo "<th>id_ksiazki5</th>";
                echo "<th>id_ksiazki6</th>";
                echo "<th>Wypożycz</th>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>" . $row['id_rezerwacji'] . "</td>";
                echo "<td>";
                if($row['data_wypozyczenia']==0000-00-00) echo "Nie wypożyczono";
                else echo $row['data_wypozyczenia'];
                echo "</td>";
                echo "<td>";
                if($row['data_zwrotu']==0000-00-00)echo "Nie wypożyczono";
                else echo $row['data_zwrotu'];
                echo "</td>";
                echo "<td>" . showtitle($row['id_ksiazki1']) . "</td>";
                echo "<td>" . showtitle($row['id_ksiazki2']). "</td>";
                echo "<td>" . showtitle($row['id_ksiazki3']) . "</td>";
                echo "<td>" . showtitle($row['id_ksiazki4']) . "</td>";
                echo "<td>" . showtitle($row['id_ksiazki5']) . "</td>";
                echo "<td>" . showtitle($row['id_ksiazki6']) . "</td>";
                echo "<td>";
                  echo "<form action='' method='post'><input name='id' type='number' value='".$row["id_klienta"]."'></br><input type='submit' value='Pokaż rezerwację'></form>";
                echo "</td>";
        }
        echo "</table>";
    }



  require 'footer.php';
?>