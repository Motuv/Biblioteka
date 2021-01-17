<?php
	if (isset($_POST['email']))
	{
		$wszystko_OK=true;
		$imie = $_POST['imie'];
		$nazwisko=$_POST['nazwisko'];
		
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		$haslo1 = $_POST['haslo1'];
		$haslo2 = $_POST['haslo2'];
		
		if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}
		
		if ($haslo1!=$haslo2)
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
		}						

		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo1'] = $haslo1;
		$_SESSION['fr_haslo2'] = $haslo2;
		
		require_once "dbconnection.php";
		mysqli_report(MYSQLI_REPORT_STRICT);

		$rezultat = $conn->query("SELECT id_konta FROM konta");
		$ile = $rezultat->num_rows + 1;
			
		if ($wszystko_OK==true)
		{
			if ($conn->query("INSERT INTO konta VALUES ($ile, '$imie', '$haslo1', 'klient')")&&
			$conn->query("INSERT INTO klienci VALUES ($ile, '$imie', '$nazwisko', '', '$email', '', 0, 0, 'klient')"))
			{
				$_SESSION['udanarejestracja']=true;
				header('Location: index.php');
			}
			else
			{
				throw new Exception($conn->error);
			}
		}
		
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="logowanie.css" type="text/css" />

	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>

</head>

<body>

	<div id="container">
		<form method="post">
			<input type="text" name="imie" placeholder="Imię">

			<?php
				if (isset($_SESSION['e_nick']))
				{
					echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
					unset($_SESSION['e_nick']);
				}
			?>

			<input type="text" name="nazwisko" placeholder="Nazwisko">
			
			<input type="text" name="email" placeholder="E-mail">
			
			<?php
				if (isset($_SESSION['e_email']))
				{
					echo '<div class="error">'.$_SESSION['e_email'].'</div>';
					unset($_SESSION['e_email']);
				}
			?>

			<input type="password" name ="haslo1" placeholder="Hasło">

			<?php
				if (isset($_SESSION['e_haslo']))
				{
					echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
					unset($_SESSION['e_haslo']);
				}
			?>

			<input type="password" name="haslo2" placeholder="Powtórz hasło">

			<input type="submit" value="Zarejestruj się">
		</form>
	</div>
	
</body>
</html>