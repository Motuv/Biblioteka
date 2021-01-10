<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Logowanie</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="logowanie.css" type="text/css" />
</head>

<body>

	<div id="container">
		<form action="zaloguj.php" method="post">
			<input type="text" name="login" placeholder="login">
			
			<input type="password" name="haslo" placeholder="hasło">
			
			<input type="submit" value="Zaloguj się">
			<h1>Niepoprawne dane logowania. Spróbuj ponownie</h1>
		</form>
	</div>
	
</body>
</html>