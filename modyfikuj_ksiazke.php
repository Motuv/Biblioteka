<?php
require 'header.php';
require 'dbconnection.php';
include 'spis_autorow.php';

$sql = "SELECT * FROM ksiazki WHERE id_ksiazki=".$_POST['id'];
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo "<form method='post' action='proces_modyfikowania_ksiazek.php'>";
		    echo "</br></br><span>Tytuł</span><input type='text' name='tytul' value='".$row['tytul']."'>";
        echo "</br></br><span>Gatunek </span><input type='text' name='gatunek' value='".$row['gatunek']."'>";
		    echo "</br></br><span>Wydawnictwo </span><input type='text' name='wydawnictwo' value='".$row['wydawnictwo']."'>";
		    echo "</br></br>";
        autorzy();
		    echo "</br></br><input type='submit' value='Zmodyfikuj'>";
        echo "</form>";
		$_SESSION['id']=$row['id_ksiazki'];
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

mysqli_close($conn);



require 'footer.php';

?>
