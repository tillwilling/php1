<?php 
// Optionale Aufgabe 6 (Aufwendig und schwerer!)
// Programmieren Sie einen Jahreskalender (Mit PHP + HTML + CSS)
// Der Jahreskalender soll ähnlich aussehen wie dieser hier: 
// https://www.kalenderpedia.de/download/kalender-2021-querformat-in-farbe.pdf
// - Zeigen Sie die Wochentage abgekürzt an
// - Markieren Sie die Sonntage
// Mögliche Erweiterung:
// - Zeigen Sie alle bundeseinheitlichen Feiertage an (Funktion: easter_date())

/*
01.01. 	Neujahr
		Karfreitag  (-2 Tage) 	
		Ostermontag (+1 Tag)
01.05.  Mai 
		Christi Himmelfahrt (+39 Tage)
		Pfingstmontag		(+50 Tage) 
03.10.  Tag der deutschen Einheit 
25.12.	1. Weihnachtstag
26.12.  2. Weihnachtstag		
*/
setlocale (LC_TIME, 'de_DE@euro', 'de_DE', 'de', 'ge', 'deu_deu');
$jahr = date('Y');

$ostersonntag = easter_date($jahr);
$karfreitag   = $ostersonntag - (2*24*60*60);
$ostermontag  = $ostersonntag + (24*60*60);
$himmelfahrt  = $ostersonntag + (39*24*60*60);
$pfingstmontag= $ostersonntag + (50*24*60*60);

$feiertag = [
	mktime(0,0,0,1,1,$jahr)		=> 'Neujahr',
	$karfreitag					=> 'Karfreitag',
	$ostermontag				=> 'Ostermontag',
	mktime(0,0,0,5,1,$jahr)		=> '1. Mai',
	$himmelfahrt				=> 'Christi Himmelfahrt',
	$pfingstmontag				=> 'Pfingstmontag',
	mktime(0,0,0,10,3,$jahr)	=> 'Tag der dt. Einheit',
	mktime(0,0,0,12,25,$jahr)	=> '1. Weihnachtstag',
	mktime(0,0,0,12,26,$jahr)	=> '2. Weihnachtstag',
];
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jahreskalender <?= $jahr ?></title>
	<style>
		td {
			width: 100px;	
		}
		.sonntag {
			background-color: red;
			color: white;
		}
	</style>
  </head>
  <body>
<?php
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
				echo '<td class="sonntag">';	
			} else {
				echo '<td>';
			}
			echo $tag.' '.$wtag;
			if(isset($feiertag[mktime(0,0,0,$monat,$tag,$jahr)])) {
				echo ' '.$feiertag[mktime(0,0,0,$monat,$tag,$jahr)];
			}
			echo '</td>';
		} else {
			echo '<td>&nbsp;</td>';	
		}
	}
	echo '</tr>';
}
echo '</table>';
?>
</body>
</html>