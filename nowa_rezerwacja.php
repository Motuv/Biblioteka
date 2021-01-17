<?php
require 'header.php';
require 'dbconnection.php';
$ile = $_SESSION['ile'];
$sql = "INSERT INTO rezerwacje VALUES($ile,$ile,'','',0,0,0,0,0,0)";
if($conn->query($sql)){
    header('Location: index.php');
}

require 'footer.php';
?>
