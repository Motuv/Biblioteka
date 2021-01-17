<?php
require 'header.php';
if(isset($_SESSION['user'])){

echo '</br>
<h2>Witaj '.$_SESSION['user'].'</h2>
<a href="przeglad_ksiazek.php">Przeglądaj książki</a></br>
<a href="wyszukaj_ksiazke.php">Wyszukaj książkę</a></br>
<a href="pokaz_rezerwacje.php">Wyświetl rezerwację</a></br>
<a href="zarzadzaj_kontem.php">Zarządzaj kontem</a></br>
<a href="wyloguj.php">Wyloguj</a>
';
}
else{
  echo '<h1>Brak dostępu do strony</h1>';
}
require 'footer.php' ;

?>
