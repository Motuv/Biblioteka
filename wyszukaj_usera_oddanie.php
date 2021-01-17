<?php

require('header.php');

echo '<form method="post" action="process_wyszukaj_usera_oddanie.php">
  <span>Wyszukaj użytkownika</span></br>
  <span>Imię</span><input type="text" name="imie"></br>
  <span>Nazwisko</span><input type="text" name="nazwisko"></br>
  <input type="submit" value="Szukaj">
</form>';

require('footer.php');

?>
