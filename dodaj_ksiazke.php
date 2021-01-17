<?php
require 'header.php';
require 'dbconnection.php';

$conn = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($conn)) {
    die("Connection failed: ".mysqli_error($conn));
}

$sql="SELECT * FROM ksiazki";

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
        <input type="text" name="gatunek" id="inputNazwa">';



       

    echo '</select>
    </p>
    <input type="submit" value="Dodaj ksiazke">
    </form>';

    require 'footer.php';
?>