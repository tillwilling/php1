<?php 
// Aufgabe 1:
// Schreiben Sie eine Funktion mit dem Namen "summeBerechnen()". Die Funktion
// soll die Summe für beliebig viele übergebende Zahlenwerte zurückliefern.
// Die existierende PHP-Funktion array_sum() soll für dieses Aufgabe nicht verwendet werden.
// Eine Prüfung, ob es wirklich nur Zahlenwerte sind, muss nicht durchgeführt werden.

function summeBerechnen(){
    $summe = 0;
    foreach (func_get_args() as $value){
        $summe += $value;
    }
    return $summe;
}
function summeBerechnen2($zahlen = []) {
    $ergebnis = 0;
    for ($i = 0; $i < count($zahlen); $i++) {
        $ergebnis += $zahlen[$i];
    }
    return $ergebnis;
}
function summeBerechnen3($arr) {
    $summe = 0;
    foreach ($arr as $value) {
        $summe += $value;
    }
    return $summe;
}

// Aufgabe 2:
// Schreiben Sie eine Funktion mit dem Namen dividieren(). Die Funktion 
// soll zwei zu übergebende Zahlenwerte teilen und das Ergebnis zurückliefern. 
// Wird versucht durch Null zu teilen, soll die Funktion die Fehlermeldung 
// "Teilen durch Null ist nicht erlaubt!" mit echo ausgeben.
function dividieren($zahl1, $zahl2) {
	if($zahl2 != 0) {
		return $zahl1 / $zahl2;
	}
	echo "Teilen durch Null ist nicht erlaubt!";
}
//echo dividieren(8,2);
// Aufgabe 3:
// Schreiben Sie eine Funktion mit dem Namen "laden()", die den Inhalt einer 
// existierenden Datei zurückliefert. Der Dateiname soll übergeben werden.
// Benutzen Sie dafür die bereits besprochenen Dateifunktionen. 
function laden($datei) {
	$handle = fopen($datei,'r');
	$content = fread($handle,filesize($datei));
	fclose($handle);
	return $content;
}
//echo laden('test.txt')
// Aufgabe 4:
// c) Schreiben Sie eine Funktion mit dem Namen "wiederholung()". Die Funktion
// soll eine zu übergebende Zeichenkette zufällig (zwischen 10 und 100 mal) 
// oft wiederholt zurückgeben.

function wiederholung($str, $min=10, $max=100) {
	$zufall = mt_rand($min,$max);
	$sammeln = '';
	for($i=0; $i<$zufall; $i++) {
		$sammeln .= $str;
	}
	return $sammeln;
}
//$str = wiederholung('X');
// Aufgabe 5: 
// Schreiben Sie eine Funktion mit dem Namen "gleichLang()". 
// Die Funktion soll Prüfen, ob zwei zu übergebende Zeichenketten 
// gleich lang sind. Falls ja, soll die Funktion eine 1 zurückliefern,
// ansonsten eine 0. 
function gleichLang($str1, $str2) {
	if(strlen($str1) == strlen($str2)) {
		return 1;
	}
	return 0;
}
//echo gleichLang('abc','defg');
// Aufgabe 6: 
// Schreiben Sie eine Funktion mit dem Namen "wochentagVonMorgen()". 
// Die Funktion soll den Wochentag von morgen in deutscher Sprache zurückliefern. 
function wochentagVonMorgen() {
	setlocale (LC_TIME, 'de_DE@euro', 'de_DE', 'de', 'ge', 'deu_deu');
	return strftime('%A',time()+(60*60*24));	
}
echo wochentagVonMorgen();
function wochentagVonMorgen2() {
	$wtag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
	return $wtag[date('w',time()+(60*60*24))];	
}
echo wochentagVonMorgen2();

?>