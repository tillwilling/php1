<?php
// Aufgabe:
// a) 
// Über ein Formular soll es möglich sein einen Benutzernamen und ein Passwort einzugeben.
// Das Passwort soll mit Blowfish verschlüsselt werden. Die Daten werden in der Datenbank
// dann gespeichert.
?>
<form action="register_crypt.php" method="post">
<input type="text" name="benutzer" placeholder="Benutzername"><br>
<input type="password" name="passwort" placeholder="Passwort"><br>
<input type="password" name="passwort2" placeholder="Passwort wiederholen"><br>
<input type="submit" name="senden" value="Registrieren">
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
	$benutzer 	= trim(mysqli_real_escape_string($link,$_POST["benutzer"]));
	$passwort 	= $_POST["passwort"];
	$passwort2 	= $_POST["passwort2"];
	if($passwort != $passwort2) {
		echo "Passwörter sind nicht identisch<br>";
	} elseif(!$benutzer || !$passwort ) {
		echo "Alle Felder müssen ausgefüllt werden<br>";
	} else {
		$passwort = password_hash($passwort,PASSWORD_BCRYPT);
		$query = "INSERT INTO login (benutzer,passwort) VALUES('$benutzer','$passwort')";
		if(mysqli_query($link,$query)) {
			echo "Registrierung erfolgreich<br>";	
		}
	}
}	
?>