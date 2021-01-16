<?php

$servername = "mysql.agh.edu.pl";
$login = "piotrmir";
$pass = "3gsp7M61TP3wYKDV";
$dbname = "piotrmir";

$polaczenie = new mysqli($servername, $login, $pass, $dbname);

if (mysqli_error($polaczenie)) {
    die("Connection failed: ".mysqli_error($polaczenie));
}
else
{
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    $sql = "SELECT * FROM konta WHERE login='$login' AND haslo='$haslo'";

    if ($rezultat = $polaczenie->query($sql));
    {
        $ile_rekordow = $rezultat->num_rows;
        if($ile_rekordow==1)
        {
            $wiersz = $rezultat->fetch_assoc();
            $user = $wiersz['login'];

            $rezultat->free_result();

            if($wiersz['typ'] == "bibliotekarz") {
                session_start();
                $_SESSION['user']=$login;
                header('Location: panel_bibliotekarza.php');
              }
            else{
                session_start();
                $_SESSION['user']=$login;
                header('Location: panel_klienta.php');
              }

        }
        else header('Location: ponowne_logowanie.php');
    }
}

mysqli_close($polaczenie);
?>
