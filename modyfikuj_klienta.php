<?php
require 'header.php';
require 'dbconnection.php';

$sql = "SELECT * FROM klienci WHERE id_klienta=".$_POST['id'];
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        echo "<form method='post' action='proces_modyfikowania_klienta.php'>";
		echo "</br></br><span>Id klienta </span><input type='text' name='id' value='".$row['id_klienta']."'>";
        echo "</br></br><span>Imie </span><input type='text' name='imie' value='".$row['imie']."'>";
		echo "</br></br><span>Nazwisko </span><input type='text' name='nazwisko' value='".$row['nazwisko']."'>";
		echo "</br></br><span>Email</span><input type='text' name='email' value='".$row['email']."'>";
		echo "</br></br><span>Telefon </span><input type='text' name='telefon' value='".$row['telefon']."'>";
		echo "</br></br><span>Zweryfikowany </span><input type='text' name='zweryfikowany' value='".$row['zweryfikowany']."'>";
        echo "</br></br><span>Wysokosc kary </span><input type='text' name='wysokosc_kary' value='".$row['wysokosc_kary']."'>";
        echo "</br></br><input type='submit' value='Zmodyfikuj'>";
        echo "</form>";
		$_SESSION['id']=$row['id_klienta'];
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
