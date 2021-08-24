<?php 
// Optionale Aufgabe 6 (Aufwendig und schwerer!)
// Programmieren Sie einen Jahreskalender (Mit PHP + HTML + CSS)
// Der Jahreskalender soll ähnlich aussehen wie dieser hier: 
// https://www.kalenderpedia.de/download/kalender-2021-querformat-in-farbe.pdf
// - Zeigen Sie die Wochentage abgekürzt an
// - Markieren Sie die Sonntage
// Mögliche Erweiterung:
// - Zeigen Sie alle bundeseinheitlichen Feiertage an (Funktion: easter_date())
setlocale (LC_TIME, 'de_DE@euro', 'de_DE', 'de', 'ge', 'deu_deu');
$jahr = date('Y');

echo '<table border="1">';
echo '<tr>';
for($monat=1; $monat<=12; $monat++) {
	echo '<th>'.strftime('%B',mktime(0,0,0,$monat,1,$jahr)).'</td>';
}
echo '</tr>';
for($tag=1; $tag<=31; $tag++) {
	echo '<tr>';
	for($monat=1; $monat<=12; $monat++) {	
		if(checkdate($monat,$tag, $jahr)) {
			$wtag = strftime('%a',mktime(0,0,0,$monat,$tag,$jahr));
			if($wtag == 'So') {
				echo '<td style="background-color: red; color: #FFF">';	
			} else {
				echo '<td>';
			}
			echo $tag.' '.$wtag.'</td>';
		} else {
			echo '<td>&nbsp;</td>';	
		}
	}
	echo '</tr>';
}
echo '</table>';