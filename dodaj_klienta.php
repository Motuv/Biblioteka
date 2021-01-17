<?php
require 'header.php';
require 'dbconnection.php';

$sql="SELECT * FROM klienci";

    echo '<form action="proces_dodawania_klienta.php" method="get">
	<p>
        <label for="inputNazwa">Id</label>
        <input type="text" name="id_klienta" id="inputNazwa">
    </p>
    <p>
        <label for="inputNazwa">Imie</label>
        <input type="text" name="imie" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Nazwisko</label>
        <input type="text" name="nazwisko" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Data urodzenia</label>
        <input type="date" name="data_ur" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Email</label>
        <input type="text" name="email" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Telefon</label>
        <input type="number" name="telefon" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Zweryfikowany</label>
        <input type="number" name="zweryfikowany" id="inputNazwa">
    </p>
	<p>
        <label for="inputNazwa">Rola</label>
        <input type="text" name="rola" id="inputNazwa">
    </p>';

 echo '  <input type="submit" value="Dodaj klienta">
    </form>';

    require 'footer.php';
?>
