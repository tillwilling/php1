<form action="login.php" method="post">
<input type="text" name="benutzer" placeholder="Benutzername"><br>
<input type="password" name="passwort" placeholder="Passwort"><br>
<input type="submit" name="senden" value="Login">
</form>
<?php 

if(isset($_POST["senden"])) {
	$host 	= 'localhost';
	$user 	= 'root';
	$passwd = '';
	$dbname = 'phpkurs'; 

	$link = @mysqli_connect($host,$user,$passwd, $dbname);
	if(mysqli_connect_error()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
	}	
	// Verhindert SQL-Injections
	$benutzer = mysqli_real_escape_string($link,$_POST["benutzer"]);
	$passwort = mysqli_real_escape_string($link,$_POST["passwort"]);
	
	$query = "SELECT * FROM login WHERE benutzer='$benutzer' AND passwort='$passwort'";
	// SELECT * FROM login WHERE 1
	// SQL-Injection: ' OR 1 OR '
	$result = mysqli_query($link,$query);
	if(mysqli_fetch_assoc($result)) {
		echo 'Login erfolgreich';
	} else {
		echo 'Benutzername und/oder Passwort falsch';
	}
}


?>