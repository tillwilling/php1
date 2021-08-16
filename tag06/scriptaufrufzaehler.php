<?php 
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

// Pseudocode
$filename = "counter.txt";
// Ist die Datei counter.txt noch nicht vorhanden?
if(!file_exists($filename)) {
// 		Ja: 
//		Datei öffnen (Mit Modus w)
		$handle = fopen($filename,'w');
//		0 in Datei schreiben
		fwrite($handle,'0');
// 		Datei schließen
		fclose($handle);
} 
// Datei öffnen (Mit Modus r+)
$handle = fopen($filename,'r+');
// Datei auslesen und Wert in Variable $counter ablegen 
$counter = fread($handle,12);
// Variable $counter um 1 erhöhen
$counter++; 
// Dateizeiger wieder auf den Anfang setzen
rewind($handle); 
// Inhalt von $counter in Datei schreiben
fwrite($handle, $counter);
// Datei schließen 
fclose($handle);
// $counter ausgeben
echo $counter;