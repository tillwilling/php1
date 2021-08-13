<?php 
// Aufgabe 1:
// Schreiben Sie eine Funktion mit dem Namen "multiplizieren".
// Die Funktion soll zwei zu übergebende Zahlenwerte multiplizieren und 
// das Ergebnis zurückliefern.
function multiplizieren($zahl1, $zahl2) {
	return $zahl1 * $zahl2;
}
//echo multiplizieren(3,4);

// Aufgabe 2:
// Schreiben Sie eine Funktion mit dem Namen "groessterWert".
// Die Funktion soll von zwei zu übergebenden Zahlenwerten den größeren
// Wert zurückliefern.
function groessterWert($zahl1, $zahl2) {
	if($zahl1 > $zahl2) {
		return $zahl1;
	}
	return $zahl2;
}
//echo groessterWert(5,4);
// Aufgabe 3:
// Schreiben Sie eine Funktion mit dem Namen "gleicherWert".
// Die Funktion soll bei zwei zu übergebenden Zahlenwerten prüfen,
// ob die Zahlenwerte gleich sind. Falls ja, soll eine 1 zurückgeliefert
// werden, ansonsten 0.
function gleicherWert($zahl1, $zahl2) {
	if($zahl1 == $zahl2) {
		return 1;
	}
	return 0;
}

//echo gleicherWert(4,3);

// Aufgabe 4:
// Schreiben Sie eine Funktion mit dem Namen "stringWiederholen".
// Die Funktion soll eine zu übergebende Zeichenkette so oft wiederholen
// und ausgeben, wie es ein zweiter Parameterwert vorgibt.
function stringWiederholen($str, $anzahl) {
	for($i=0; $i<$anzahl; $i++) {
		echo $str;
	}
}
//stringWiederholen('X',3);
// Alternative mit Rückgabewert
function stringWiederholen2($str, $anzahl) {
	$sammeln = '';
	for($i=0; $i<$anzahl; $i++) {
		$sammeln .= $str;
	}
	return $sammeln;
}
//echo stringWiederholen2('X',3);

// Aufgabe 5:
// Schreiben Sie eine Funktion mit dem Namen "dieErstenFuenfZeichen()". Die Funktion 
// soll von einer zu übergebenden Zeichenkette die ersten 5 Zeichen zurückliefern.
function dieErstenFuenfZeichen($str) {
	return substr($str,0,5);
}
//echo dieErstenFuenfZeichen('123456789');

// Aufgabe 6:
// Schreiben Sie eine Funktion mit dem Namen "htmlListe". Die Funktion
// soll die Werte eines zu übergebenen Arrays als HTML-Liste ausgeben.

function htmlListe(array $data, $id = '') {
	echo '<ul id="'.$id.'">';
	foreach($data as $value) {
		echo '<li>'.$value.'</li>';
	}
	echo '</ul>';
}
htmlListe(['Apfel','Birne','Orange'],'test')










?>