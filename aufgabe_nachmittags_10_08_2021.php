<?php 
// Aufgabe 1:
// Wie viele Minuten dauert es noch bis heute 22:00 Uhr?
$sekunden = mktime(22,0,0,8,11,2021) - time();
echo $minuten  = ceil($sekunden/60);
echo '<hr>';

// Aufgabe 2:
// Über ein Formular soll es möglich sein ein Geburtsdatum einzugeben. 
// Nach dem Abschicken des Formulars soll angezeigt werden, wie viele Tage 
// die Person bereits auf der Welt ist.
?>
<form action="aufgabe_nachmittags_10_08_2021.php" method="post">
    <p>Geben Sie Ihr Geburtsdatum an</p>
<input type="number" name="tag" placeholder="Tag"><br>
<input type="number" name="monat" placeholder="Monat"><br>
<input type="number" name="jahr" placeholder="Jahr"><br>
<input type="submit" name="senden" value="Lebenszeit in Minuten berechnen">
</form>
<?php
if(isset($_POST["senden"])) {
	echo $datum = $_POST["monat"].'.',$_POST["tag"].'.',$_POST["jahr"];
	echo '<br>';
    echo '<hr>';

$zeit = mktime (0,0,0,$_POST['monat'],$_POST['tag'],$_POST['jahr']) - time();
echo round($zeit/60/60/24);
}
// Aufgabe 3: 
// Erzeugen Sie mit Hilfe von date() (NICHT strftime()!)folgenden Satz (mit aktuellen Daten):
// Heute ist Dienstag, der 10. August 2021 und es ist 14:30 Uhr

// Aufgabe 4:
// Geben Sie den Wochentag von gestern in deutscher Sprache aus. 
// Das Skript soll jeden Tag funktionieren.

// Aufgabe 5:
// Zeigen Sie mit Hilfe der Funktion checkdate() alle Schaltjahre von 1600 bis 2100 an

// Optionale Aufgabe 6 (Aufwendig und schwerer!)
// Programmieren Sie einen Jahreskalender (Mit PHP + HTML + CSS)
// Der Jahreskalender soll ähnlich aussehen wie dieser hier: 
// https://www.kalenderpedia.de/download/kalender-2021-querformat-in-farbe.pdf
// - Zeigen Sie die Wochentage abgekürzt an
// - Markieren Sie die Sonntage
// Mögliche Erweiterung:
// - Zeigen Sie alle bundeseinheitlichen Feiertage an 
?>