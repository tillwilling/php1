<?php 
// Aufgabe 1:
// Schreiben Sie ein einfaches dateibasiertes Gästebuch: 
// Über ein Formular soll es möglich sein, einen Name, eine 
// EMail-Adresse und einen Kommentar einzugeben.
// Wird das Formular abgeschickt, sollen die Einträge aus 
// dem Formular in eine Datei mit dem Namen "gaestebuch.txt"
// abgespeichert werden (Anhängen!).
// Bei jedem Aufruf des Skripts sollen die bisherigen 
// Gästebucheinträge angezeigt werden. 
?>
<form action="gaestebuch.php" method="post">
	<input type="text" name="name" placeholder="Name"><br>
	<input type="text" name="email" placeholder="EMail-Adresse"><br>
	<textarea cols="20" rows="5" name="kommentar" placeholder="Kommentar"></textarea><br>
	<input type="submit" name="senden" value="Eintragen">
</form>
<?php 
$filename = "gaestebuch.txt";
if(isset($_POST["senden"])) {
	// strip_tags() entfernt HTML-Tags 
	// htmlentities() ersetzt bestimmte Zeichen durch HTML-Codes (z.B. die spitzen Klammern)
	$name  		= trim(strip_tags($_POST["name"]));
	$email 		= trim(strip_tags($_POST["email"]));
	$kommentar 	= trim(htmlentities($_POST["kommentar"]));
	
	if($name && $email && $kommentar) {
		$str = "$name ($email) schrieb: $kommentar<hr>\n";
		$handle = fopen($filename, 'a');
		fwrite($handle,$str);
		fclose($handle);
	} else {
		echo "Alle Felder müssen ausgefüllt werden!";	
	}
}
if(file_exists("gaestebuch.txt")) {
	$handle = fopen($filename, 'r');
	$inhalt = fread($handle,filesize($filename));
	fclose($handle);
	echo $inhalt;
}


?>



