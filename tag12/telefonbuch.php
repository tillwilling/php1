<form action="telefonbuch.php" method="post">
<input type="text" name="vorname" placeholder="Vorname"><br>
<input type="text" name="nachname" placeholder="Nachname"><br>
<input type="tel" name="telefon" placeholder="Telefonnummer"><br>
<input type="submit" name="senden" value="Eintragen">
</form>

<?php
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'phpkurs'; 

$link = @mysqli_connect($host,$user,$passwd,$dbname);
	if(mysqli_connect_error()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
	}
 
if(isset($_POST["senden"])) {
    $vorname 	= trim(mysqli_real_escape_string($link,strip_tags($_POST["vorname"])));
    $nachname	= trim(mysqli_real_escape_string($link,strip_tags($_POST["nachname"])));
    $telefon 	= trim(mysqli_real_escape_string($link,strip_tags($_POST["telefon"])));
	if($nachname && $vorname && $telefon) {
		$query = "INSERT INTO telefonbuch (nachname, vorname, telefon) VALUES ('$nachname','$vorname','$telefon')";
		mysqli_query($link,$query);
		echo "Telefonbucheintrag erfolgreich hinzugefügt.";
	} else {
		echo 'Alle Felder müssen ausgefüllt werden';	
	}
}
?>