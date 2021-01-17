<?php
require 'header.php';
require 'dbconnection.php';


$sql="DELETE FROM autorzy WHERE autorzy.id_autora = ".$_POST['id'];
$_SESSION['id']=$_POST['id'];
if(mysqli_query($conn,$sql)){
    echo "<h3>Usunięto</h3>";
}
require 'footer.php';

?>
