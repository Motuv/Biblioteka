<?php
require 'header.php';
require 'dbconnection.php';

$sql="SELECT * FROM kategorie";

    echo '<form action="process_adding_artist.php" method="get">
    <p>
        <label for="inputNazwa">Wykonawca</label>
        <input type="text" name="nazwa" id="inputNazwa">
    </p>
    <p>
        <label for="selectKategoria">Kategoria</label>
        <select id="selectKategoria" name="kategoria">';

        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
                echo '<option value="'.$row['id_kategorii'].'">'.$row['nazwa'].'</option>';
                }
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }

    echo '</select>
    </p>
    <input type="submit" value="Dodaj wykonawcę">
    </form>';

    require 'footer.php';
?>
