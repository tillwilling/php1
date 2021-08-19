<?php 
/*
Aufgabe:
 
a) Erstellen Sie mit Hilfe von phpMyAdmin folgende Tabelle:
   
Tabelle: zitat (in der DB phpkurs)
--------------
id int PRIMARY KEY auto_increment,
zitat varchar(1000),
verfasser varchar(100) 
 
b) Über ein Formular soll es möglich sein ein Zitat und den Verfasser in eine Datenbanktabelle einzutragen. 
Tragen Sie mindestens 5 Zitate ein. (Beispiel-Zitate finden Sie auf der Webseite zitate.net.)
*/
?>

<form action="aufgabe_nachmittags_18_08_2021.php" method="post">
<textarea cols="20" rows="5" name="zitat" placeholder="Zitat"></textarea><br>
<input type="text" name="verfasser" placeholder="Verfasser"><br>
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
    $zitat	 	= trim(mysqli_real_escape_string($link,strip_tags($_POST["zitat"])));
    $verfasser 	= trim(mysqli_real_escape_string($link,strip_tags($_POST["verfasser"])));
	if($zitat && $verfasser) {
		$query = "INSERT INTO zitat VALUES (NULL,'$zitat','$verfasser')";
		mysqli_query($link,$query);
		echo "Zitat erfolgreich hinzugefügt.";
	} else {
		echo 'Alle Felder müssen ausgefüllt werden';	
	}
}
	// c) Bei jedem Aufruf des Skripts soll ein zufälliges Zitat angezeigt werden
	$query  = "SELECT * FROM zitat ORDER BY rand() LIMIT 1";
	$result = mysqli_query($link,$query);
	$row    = mysqli_fetch_assoc($result);
	echo $row['zitat'].' <i>'.$row['verfasser'].'</i>';
	
?>