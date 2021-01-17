<?php
require 'header.php';
require 'dbconnection.php';

    echo '<form action="process_adding_autor.php" method="post">
    <p>
        <label for="inputNazwa">Imie</label>
        <input type="text" name="imie" id="inputNazwa">
    </p>
    <p>
        <label for="inputNazwa">Nazwisko</label>
        <input type="text" name="nazwisko" id="inputNazwa">
    </p>
    <input type="submit" value="Dodaj autora">
    </form>';

    require 'footer.php';
?>
