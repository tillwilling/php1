<?php 
//b) 
//Ein ein weiteres Formular soll es möglich sein sich einzuloggen. Dazu muss der Benutzername 
//und das Passwort abgefragt werden. Wird das Formular abgeschickt, soll geprüft werden, 
//ob der Login erfolgreich war. Geben Sie eine passende Meldung aus. 
?>
<h2>Login</h2>
<form action="login_crypt.php" method="post">
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
	$benutzer = trim(mysqli_real_escape_string($link,$_POST["benutzer"]));
	$passwort = $_POST["passwort"];
	if(!$benutzer || !$passwort) {
		echo 'Alle Felder müssen ausgefüllt werden<br>';
	} else {
		$query  = "SELECT passwort FROM login WHERE benutzer='$benutzer'";	
		$result = mysqli_query($link,$query);
		if($row = mysqli_fetch_assoc($result)) {
			if(password_verify($passwort, $row['passwort'])) {
				echo 'Login erfolgreich<br>';	
			} else {
				echo 'Passwort falsch eingegeben<br>';
			}
		} else {
			echo 'Benutzername nicht vorhanden<br>';
		}
	}
}
?>