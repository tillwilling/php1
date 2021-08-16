<?php 
/*
Aufgabe 1:
Über ein Formular soll es möglich sein eine beliebige Zeichenkette
einzugeben. Wird das Formular abgeschickt, soll die eingebene Zeichenkette
in eine Datei gespeichert werden. Die Datei soll den Namen "daten.txt" erhalten.
Alle Informationen die gespeichert werden, sollen immer angehängt werden. 
*/
?>

<form action="aufgabe_morgens_11_08_2021.php" method="post">
<input type="text" name="string" placeholder="Zeichenkette"><br>
<input type="submit" name="senden" value="Abschicken">
</form>

<?php 
if(isset($_POST["senden"])) {
	$string = trim($_POST["string"]);

$filename = 'daten.txt';
// Datei öffnen 
$handle = fopen($filename,'a+');
// Datei schreiben / Datei lesen 
fwrite($handle, $string);
// Dateizeiger wieder auf den Anfang setzen 
rewind($handle);
echo fread($handle,filesize($filename));
// Datei schließen
fclose($handle);
}



/*
Aufgabe 2:
Schreiben Sie ein PHP-Skript, welches jeden Skriptaufruf zählt. 
Der Zählerstand soll in einer Datei mit dem Namen "counter.txt"
gespeichert werden. Der aktuelle Zählerstand soll auf der Webseite
angezeigt werden.
Die Datei counter.txt soll über das PHP-Skript automatisch angelegt werden und 
zum Start den Inhalt 0 erhalten.

Hinweis: Sie brauchen für die Aufgabe die Funktion file_exists(). Diese Funktion 
prüft, ob eine Datei bereits existiert oder nicht.
*/