<?php 

echo '<pre>';
print_r($_GET);
echo '</pre>';

// get.php?vorname=Max&nachname=Mustermann&senden=Anzeigen
// https://www.google.de/search?q=freitag
?>
<form action="get.php" method="get">
	<input type="text" name="vorname" placeholder="Vorname"><br>
	<input type="text" name="nachname" placeholder="Nachname"><br>
	<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
if(isset($_GET["senden"])) {
	echo $_GET["vorname"];
	echo $_GET["nachname"];
}
/*
Unterschiede zwischen POST und GET 
POST:
	-Die Daten werden für den Besucher unsichtbar übertragen
	-Unbegrenzte Datenmenge 
	-Binärdaten können übertragen werden 
	-Zwingend ein Formular notwendig 
GET:
	-Die Daten werden für den Besucher sichtbar in der URL übertragen
	-URL darf max. 2 KB groß sein
	-Keine Binärdaten möglich 
	-Ein Formular ist NICHT zwingend notwendig notwendig 
	-Einsatzzweck:
		-> Mit Formular: 	Suchformulare 
		-> Ohne Formular:   Navigation auf der Webseite

*/
?>