<?php 
/*
Aktualisierungsparameter:
$i++	Der Inhalt der Variablen $i wird um 1 erhöht (Inkrementieren)
$i--	Der Inhalt der Variablen $i wird um 1 erniedrigt (Dekrementieren)
$i+=3   Der Inhalt der Variablen $i wird um 3 erhöht
$i-=7   Der Inhalt der Variablen $i wird um 7 erniedrigt
$i*=2	Der Inhalt der Variablen $i wird verdoppelt
$i/=2   Der Inhalt der Variablen $i wird halbiert 
*/
// Initialisierung ; Bedingung ; Aktualisierung
for($i=1 ; $i<=3 ; $i++) {
	echo 'Hallo Welt<br>';
}
echo '<hr>';
// 3,4,5,6,7,8,9,10,11,12,13,14
for($i=3 ; $i<=14 ; $i++) {
	echo $i.' ';
}
echo '<hr>';
// 60, 55, 50, 45, 40, 35, 30, 25, 20, 15
for($i=60 ; $i>=15 ; $i-=5) {
	echo $i.' ';
}
echo '<hr>';
// 2, 4, 8, 16, 32, 64, 128, 256, 512, 1024, 2048, 4096
for($i=2 ; $i<=4096 ; $i*=2) {
	echo $i.' ';
}
echo '<hr>';
// 5,4,3,2,1,5,4,3,2,1,5,4,3,2,1,5,4,3,2,1
for($y=0; $y<4; $y++) {
	for($x=5; $x>=1; $x--) {
		echo $x.' ';
	}
}
echo '<hr>';
// Aufgabe: Geben Sie die Zeichenkette "Ich mag PHP" genau 7 mal untereinander aus
for($i=0; $i<7; $i++) {
	echo "Ich mag PHP<br>";
}


?>