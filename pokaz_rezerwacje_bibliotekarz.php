<?php
  require 'header.php';
  require 'dbconnection.php';
  include 'pokaz_tytul.php';
  include 'wypozycz.php';

  $sql="SELECT * FROM rezerwacje INNER JOIN  klienci ON klienci.id_klienta=rezerwacje.id_klienta INNER JOIN konta ON konta.id_konta=klienci.id_klienta WHERE klienci.id_klienta=".$_POST['id'];

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
                  echo "<form action='ustaw_terminy.php' method='post'><input name='id' type='number' value='".$row["id_rezerwacji"]."'></br><input type='submit' value='Wypożycz'></form>";
                echo "</td>";
                if($row['id_ksiazki1']!=0){
                  wypozycz($row['id_ksiazki1']);
                }
                if($row['id_ksiazki2']!=0){
                  wypozycz($row['id_ksiazki2']);
                }
                if($row['id_ksiazki3']!=0){
                  wypozycz($row['id_ksiazki3']);
                }
                if($row['id_ksiazki4']!=0){
                  wypozycz($row['id_ksiazki4']);
                }
                if($row['id_ksiazki5']!=0){
                  wypozycz($row['id_ksiazki5']);
                }
                if($row['id_ksiazki6']!=0){
                  wypozycz($row['id_ksiazki6']);
                }
        }
        echo "</table>";
    }

  require 'footer.php';
?>
