<?php
require 'header.php';
if(isset($_SESSION['USER'])){
session_start();
echo '</br>
<h2>Witaj '.$_SESSION['user'].'</h2>
<a href="przeglad ksiazek.php">Przeglądaj książki</a></br>
<a href="wyszukaj_ksiazke.php">Wyszukaj książkę</a></br>
<a href="wyloguj.php">Wyloguj</a>
';
}
else {
	echo '<h1>Brak dostępu do strony</h1>';
}
require 'footer.php' ;

?>
