<?php
    require 'dbconnection.php';
    require 'header.php';
    $login = $_SESSION['user'];

    $sql = "SELECT * FROM klienci INNER JOIN konta WHERE konta.login='$login'";

    if ($rezultat = $conn->query($sql));
    {

        $wiersz = $rezultat->fetch_assoc();
        $imie = $wiersz['imie'];
        $nazwisko = $wiersz['nazwisko'];
        $data_ur = $wiersz['data_ur'];
        $email = $wiersz['email'];
        $telefon = $wiersz['telefon'];
        $zweryfikowany = $wiersz['zweryfikowany'];
        $wysokosc_kary = $wiersz['wysokosc_kary'];

        echo '</br>
        <h2>Konto: '.$_SESSION['user'].'</h2>
        Imię:'.$imie.'<br/>
        Nazwisko:'.$nazwisko.'<br/>
        E-mail:'.$email.'<br/>
        Kara do zapłaty:'.$wysokosc_kary.'<br/>
        ';
        if($data_ur == 0) echo 'Data urodzenia: Nie podano <br/>';
        else echo 'Data urodzenia:'.$data_ur.'<br/>';

        if($telefon == 0) echo 'Telefon: Nie podano <br/>';
        else echo 'Telefon:'.$telefon.'<br/>';

        if($zweryfikowany) echo '<div style="color: green;">Konto zweryfikowane</div>';
        else echo '<div style="color: red;">Konto niezweryfikowane. Aby dokonać weryfikacji podaj swój numer telefonu</div>';

        echo '<form method="post">
            <br/>
            Zmień adres e-mail:<br/>
            <input type="text" name="nowy_email" placeholder="nowa_email"><input type="submit" value="Aktualizuj">
            </form>

            <form method="post">
            <br/>
            Zmień numer telefonu:<br/>
            <input type="text" name="nowy_numer" placeholder="nowy_numer"><input type="submit" value="Aktualizuj">
            </form>

            <form method="post">
            <br/>
			Zmień date urodzenia:<br/>
			<input type="text" name="nowa_data" placeholder="rrrr-mm-dd"><input type="submit" value="Aktualizuj">
			<br/>
		    </form>';

        if(isset($_POST['nowy_email']))
        {
            $sql='UPDATE klienci SET email="'.$_POST['nowy_email'].'" WHERE imie="'.$_SESSION['user'].'"';
            $conn->query($sql);
            echo "Udało się zmienić E-mail!<br/>";
        }
        if(isset($_POST['nowy_numer']))
        {
            $sql='UPDATE klienci SET telefon="'.$_POST['nowy_numer'].'" WHERE imie="'.$_SESSION['user'].'"';
            $conn->query($sql);
            $sql='UPDATE klienci SET zweryfikowany=1 WHERE imie="'.$_SESSION['user'].'"';
            $conn->query($sql);
            echo "Udało się zmienić numer telefonu!<br/>";
        }
        if(isset($_POST['nowa_data']))
        {
            $sql='UPDATE klienci SET data_ur="'.$_POST['nowa_data'].'" WHERE imie="'.$_SESSION['user'].'"';
            $conn->query($sql);
            echo "Udało się zmienić datę urodzenia!<br/>";
        }

        $rezultat->free_result();
    }
?>
