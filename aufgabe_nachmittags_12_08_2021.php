<?php 
// Aufgabe 1:
// Schreiben Sie eine Funktion mit dem Namen "summeBerechnen()". Die Funktion
// soll die Summe für beliebig viele übergebende Zahlenwerte zurückliefern.
// Die existierende PHP-Funktion array_sum() soll für dieses Aufgabe nicht verwendet werden.
// Eine Prüfung, ob es wirklich nur Zahlenwerte sind, muss nicht durchgeführt werden.
 //cf
//echo summeBerechnen (10, 10, 10);
echo '<br>';
echo '<hr>';


// Aufgabe 2:
// Schreiben Sie eine Funktion mit dem Namen dividieren(). Die Funktion 
// soll zwei zu übergebende Zahlenwerte teilen und das Ergebnis zurückliefern. 
// Wird versucht durch Null zu teilen, soll die Funktion die Fehlermeldung 
// "Teilen durch Null ist nicht erlaubt!" mit echo ausgeben.
function dividieren($zahl1, $zahl2) {
	if ($zahl2 != 0) {
        return ($zahl1 / $zahl2);
	} else {
        echo "Teilen durch Null ist nicht erlaubt!";
    }
}
echo dividieren(6,3);
echo '<br>';
echo '<hr>';


// Aufgabe 3:
// Schreiben Sie eine Funktion mit dem Namen "laden()", die den Inhalt einer 
// existierenden Datei zurückliefert. Der Dateiname soll übergeben werden.
// Benutzen Sie dafür die bereits besprochenen Dateifunktionen.
function laden($datei) {
    if(file_exists($datei)) {
         $datei = file_get_contents($datei);
         return $datei;
}}
echo laden('datei.txt');
echo '<br>';
echo '<hr>';


// Aufgabe 4:
// c) Schreiben Sie eine Funktion mit dem Namen "wiederholung()". Die Funktion
// soll eine zu übergebende Zeichenkette zufällig (zwischen 10 und 100 mal) 
// oft wiederholt zurückgeben.
function stringWiederholen($str) {
    $anzahl = mt_rand(10,100);
    for($i=0; $i<=$anzahl; $i++) {
        print $str;
    }
}
echo stringWiederholen('x');

// Aufgabe 5: 
// Schreiben Sie eine Funktion mit dem Namen "gleichLang()". 
// Die Funktion soll Prüfen, ob zwei zu übergebende Zeichenketten 
// gleich lang sind. Falls ja, soll die Funktion eine 1 zurückliefern,
// ansonsten eine 0. 

// Aufgabe 6: 
// Schreiben Sie eine Funktion mit dem Namen "wochentagVonMorgen()". 
// Die Funktion soll den Wochentag von morgen in deutscher Sprache zurückliefern. 
?>