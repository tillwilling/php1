<?php
// Aufgabe 1: 
// -a) Legen Sie ein Array an mit 8 verschiedenen Tierarten.
// -b) Geben Sie das komplette Array einmal mit Hilfe der for-Schleife und foreach-Schleife aus

$tier_arr = ['Hund','Katze','Maus', 'Elefant', 'Tiger', 'Schlange', 'Vogel', 'Bär'];
for($i=0; $i<8; $i++) {
	echo $tier_arr[$i].' ';
}
echo '<hr>';
foreach($tier_arr as $value) {
	echo $value.' ';
}
echo '<hr>';

// Aufgabe 2:
// -Legen Sie ein assoziatives Array an mit folgenden Werten:
// Vorname: Thomas
// Nachname: Meier
// Geburtsdatum: 10.03.1968
// -Geben Sie anschließend alle Elemente des Arrays mit Hilfe der foreach-Schleife wieder aus.
$kunde_arr = [
	'Vorname'		=> 'Thomas',
	'Nachname'		=> 'Meier',
	'Geburtsdatum'	=> '10.03.1968',
];
foreach($kunde_arr as $key => $value) {
	echo $key.': '.$value.'<br>';
}
echo '<hr>';
// Aufgabe 3:
// -Legen Sie ein Array an mit 4 Städtenamen
// -Sortieren Sie das Array 
// -Fügen Sie zwei neue Städte dem Array hinzu 
// -Geben Sie alle Elemente mit Hilfe der for-Schleife aus 
$stadt_arr = ['Berlin','Hamburg','München','Dresden'];
sort($stadt_arr);
array_push($stadt_arr, 'Dortmund', 'Essen');
for($i=0; $i<count($stadt_arr); $i++) {
	echo $stadt_arr[$i].' ';
}
echo '<hr>';

// Aufgabe 4: 
// Zeichnen Sie mit den PHP-Funktionen ein Bild mit der Breite 
// und Höhe von 200 Pixeln. Auf dem Bild soll ein roter gefüllter Kreis 
// angezeigt werden.

$im = imagecreate(200,200);
imagecolorallocate($im,255,255,255);
$red = imagecolorallocate($im,255,0,0);
imagearc($im,99,99,100,100,0,0,$red);
imagefill($im,99,99,$red);
imagegif($im,'roterKreis.gif');
?>
<img src="roterKreis.gif" alt=""><hr>
<?php
// Aufgabe 5: (Schwieriger)
// Schreiben Sie einen Lottozahlen-Generator. Es sollen 6 verschiedene Lottozahlen im 
// Bereich von 1 - 49 angezeigt werden.
// Sortieren Sie die Lottozahlen der Größe nach aufsteigend.
/*
$zahlen_arr = [];
for($i=1; $i<=49; $i++) {
	$zahlen_arr[] = $i;		
}
*/
$zahlen_arr = range(1,49);
$lotto_arr = [];
shuffle($zahlen_arr);
for($i=0; $i<6; $i++) {
	//echo $zahlen_arr[$i].' ';
	$lotto_arr[] = $zahlen_arr[$i];
}
sort($lotto_arr);
foreach($lotto_arr as $value) {
	echo $value.' ';
}

?>