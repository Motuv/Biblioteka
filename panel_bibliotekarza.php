<?php
require 'header.php';
if(isset($_SESSION['user'])){

echo '</br>
<h2>Witaj '.$_SESSION['user'].'</h2>
<a href="przeglad_ksiazek_bibliotekarz.php">Przeglądaj książki</a></br>
<a href="wyszukaj_ksiazke.php">Wyszukaj książkę</a></br>
<a href="wyszukaj_usera.php">Wypożycz książkę</a></br>
<a href="wyszukaj_usera_oddanie.php">Oddaj książkę</a></br>
<a href="zarzadzaj_kontem.php">Zarządzaj kontem</a></br>
<a href="wszyscy_klienci.php">Wszyscy klienci</a></br>
<a href="wszyscy_autorzy.php">Wszyscy autorzy</a></br>
<a href="wyloguj.php">Wyloguj</a>
';
}
else {
	echo '<h1>Brak dostępu do strony</h1>';
}
require 'footer.php' ;

?>
