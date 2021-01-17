<?php
require 'header.php';
require 'dbconnection.php';

$sql="DELETE FROM ksiazki WHERE ksiazki.id_ksiazki = ".$_POST['id'];
$_SESSION['id']=$_POST['id'];
if(mysqli_query($conn,$sql)){
    echo "<h3>Usunięto</h3>";
}
require 'footer.php';

?>
