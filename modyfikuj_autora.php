<?php
require 'header.php';
require 'dbconnection.php';

$sql = "SELECT * FROM autorzy WHERE id_autora=".$_POST['id'];
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo "<form method='post' action='proces_modyfikowania_autora.php'>";
		    echo "</br></br><span>Id autora </span><input type='text' name='id' value='".$row['id_autora']."'>";
        echo "</br></br><span>Imie </span><input type='text' name='imie' value='".$row['imie']."'>";
		    echo "</br></br><span>Nazwisko </span><input type='text' name='nazwisko' value='".$row['nazwisko']."'>";
		    echo "</br></br><input type='submit' value='Zmodyfikuj'>";
        echo "</form>";
		$_SESSION['id']=$row['id_autora'];
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
