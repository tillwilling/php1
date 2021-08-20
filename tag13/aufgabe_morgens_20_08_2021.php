<?php 
//Aufgabe 1:
//a) Erstellen Sie anhand der vorgegebenen Daten ein zwei-dimensionales Array. 
//   Sie dürfen frei entscheiden, ob es ein assoziatives Array oder ein numerisches Array werden soll. 
   
//Spalte 1) Firma
//Spalte 2) Strasse/HsNr.
//Spalte 3) PLZ
//Spalte 4) Ort
   
//Zeile 1: The Phone House Telecom GmbH,      	   Münsterstr. 109,    48155, Münster-Südost
//Zeile 2: Elektro-Holtkamp GmbH,                  Dieselstr. 13-19,   33442, Herzebrock-Clarholz
//Zeile 3: DFMG Deutsche Funkturm GmbH,            Gartenstr. 217,     48147, Münster
//Zeile 4: AMS Telekom GmbH Festnetz Mobilfunk IT, Hörsterstr. 9,      48143, Münster
$firma = [
	['The Phone House Telecom GmbH', 'Münsterstr. 109', '48155', 'Münster-Südost'],
	['Elektro-Holtkamp GmbH', 'Dieselstr. 13-19', '33442', 'Herzebrock-Clarholz'],
	['DFMG Deutsche Funkturm GmbH', 'Gartenstr. 217', '48147', 'Münster'],
	['AMS Telekom GmbH Festnetz Mobilfunk IT', 'Hörsterstr. 9', '48143', 'Münster'],
];

// b) Geben Sie alle Informationen des Arrays einmal mit Hilfe von Schleifen als HTML-Tabelle aus.
echo '<table border="1">';
for($x=0; $x<count($firma); $x++) {
	echo '<tr>';
	for($y=0; $y<count($firma[$x]); $y++) {
		echo '<td>'.$firma[$x][$y].'</td>';
	}
	echo '</tr>';
}
echo '</table>';
$firma2 = [
	[	
		'Firma' 	=> 'The Phone House Telecom GmbH', 
		'Strasse' 	=> 'Münsterstr. 109', 
		'PLZ' 		=> '48155', 
		'Ort' 		=> 'Münster-Südost'
	],
	[
		'Firma' 	=> 'Elektro-Holtkamp GmbH', 
		'Strasse' 	=> 'Dieselstr. 13-19', 
		'PLZ' 		=> '33442', 
		'Ort' 		=> 'Herzebrock-Clarholz'
	],
	[	
		'Firma' 	=> 'DFMG Deutsche Funkturm GmbH', 
		'Strasse'   => 'Gartenstr. 217', 
		'PLZ' 		=> '48147', 
		'Ort' 		=> 'Münster'
		],
	[
		'Firma' 	=> 'AMS Telekom GmbH Festnetz Mobilfunk IT', 
		'Strasse'   => 'Hörsterstr. 9', 
		'PLZ' 		=> '48143', 
		'Ort' 		=> 'Münster'
	],
];
echo '<hr>';
echo '<table border="1">';
foreach($firma2 as $row) {
	echo '<tr>';
	foreach($row as $value) {
		echo '<td>'.$value.'</td>';
	}
	echo '</tr>';
}
echo '</table>';

echo '<hr>';
echo '<table border="1">';
echo '<tr>';
foreach($firma2[0] as $key => $value) {
	echo '<th>'.$key.'</th>';
}	
echo '</tr>';
foreach($firma2 as $row) {
	echo '<tr>';
	foreach($row as $value) {
		echo '<td>'.$value.'</td>';
	}
	echo '</tr>';
}
echo '</table>';


// Aufgabe 2:
// Schreiben Sie eine Funktion mit dem Namen "htmltabelle()". Die Funktion 
// soll die Elemente eines beliebigen zu übergebenden zwei-dimensionalen 
// Arrays als HTML-Tabelle ausgeben.

function htmlTabelle(array $data, $border=0) {
	echo '<table border="'.$border.'">';
	foreach($data as $row) {
		echo '<tr>';
		foreach($row as $value) {
			echo '<td>'.$value.'</td>';
		}
		echo '</tr>';
	}
	echo '</table>';
}
echo '<hr>';
htmlTabelle($firma2,10);

?>