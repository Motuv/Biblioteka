<?php

require('header.php');

echo '<form method="post" action="process_wyszukaj_ksiazke_tytul.php">
  <span>Wyszukiwanie po tytule</span></br>
  <input type="text" name="tytul"></br>
  <input type="submit" value="Szukaj">
</form></br>';

echo '<form method="post" action="process_wyszukaj_ksiazke_autor.php">
  <span>Wyszukiwanie po autorze</span></br>
  <input type="text" name="autor"></br>
  <input type="submit" value="Szukaj">
</form>';

require('footer.php');

?>
