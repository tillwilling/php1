<?php 
// Aufgabe 1:
// Über ein Formular soll es möglich sein einen Zahlenwert im Bereich von 1 - 100 einzugeben.
// Prüfen Sie, ob die Eingabe gültig war und geben Sie eine passende Meldung aus.
?>
<form method="post">
<input type="text" name="zahl" placeholder="Zahl 1-100">
<input type="submit" name="senden" value="Check">
</form>
<?php 
if(isset($_POST["senden"])) {
	$zahl = $_POST["zahl"];
	if($zahl >= 1 && $zahl <= 100) {
		echo 'Richtig';
	} else {
		echo 'Falsch';	
	}
}
// Aufgabe 2:
// Über ein Formular soll es möglich sein eine beliebige Zeichenkette einzugeben.
// Wird das Formular abgeschickt, soll die Anzahl der eingegebenen Zeichen angezeigt werden.
// Die bereits eingegebenen Zeichen sollen im Formular erhalten bleiben.
?>
<hr>
<form method="post">
<textarea cols="20" rows="5" name="text"><?php if(isset($_POST['text'])){echo $_POST["text"];} ?></textarea><br>
<input type="submit" name="senden2" value="Zeichen anzeigen">
</form>
<?php
if(isset($_POST["senden2"])) {
	$text   = trim($_POST["text"]);
	$anzahl = strlen($text);
	echo "Der Text besteht aus genau $anzahl Zeichen";
}
echo '<hr>';
// Aufgabe 3:
// Zeigen Sie in dem PHP-Skript alle Länder an aus der Datenbank world, die eine
// Bevölkerungszahl von über 50 Mio. Einwohnern haben. Nutzen Sie dafür die 
// MySQLi-Funktionen.
// Erweiterung: Die Mindestanzahl der Einwohner des Landes soll über ein Formular 
// vorgegeben werden können.
?>
<form method="post">
<input type="text" name="zahl" placeholder="Anzahl">
<input type="submit" name="senden3" value="Anzeigen">
</form>
<?php 
if(isset($_POST["senden3"])) {
	$zahl = (int)$_POST["zahl"];
	if($zahl > 0) {
		$host 	= 'localhost';
		$user 	= 'root';
		$passwd = '';
		$dbname = 'world'; 

		$link = @mysqli_connect($host,$user,$passwd, $dbname);
		if(mysqli_connect_error()) {
			die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
		}
		$query  = "SELECT name FROM country WHERE population > $zahl";
		$result = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['name'].' ';
		}
	}
}

?>