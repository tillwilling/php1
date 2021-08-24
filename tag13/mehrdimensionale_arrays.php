<?php 

/*
Schulstundenplan:

Montag		Dienstag		Mittwoch 
---------------------------------------
Erdkunde	Politik			Physik
Musik		Mathe			Englisch
Deutsch		Geschichte		Biologoie
Kunst		Sport			Informatik
*/

$stdplan = [
	['Erdkunde', 'Musik', 'Deutsch', 'Kunst'],
	['Politik', 'Mathe', 'Geschichte', 'Sport'],
	['Physik', 'Englisch', 'Biologie', 'Informatik'],
];
// Physik
echo $stdplan[2][0];
echo '<br>';
// Deutsch 
echo $stdplan[0][2];
echo '<hr>';

for($x=0; $x<count($stdplan); $x++) {
	for($y=0; $y<count($stdplan[$x]); $y++) {
		echo $stdplan[$x][$y].' ';
	}
}
echo '<hr>';
foreach($stdplan as $tag_arr) {
	foreach($tag_arr as $fach) {
		echo $fach.' ';
	}
}

$stdplan2 = [
	'Montag' 	=> ['Erdkunde', 'Musik', 'Deutsch', 'Kunst'],
	'Dienstag'  => ['Politik', 'Mathe', 'Geschichte', 'Sport'],
	'Mittwoch'	=> ['Physik', 'Englisch', 'Biologie', 'Informatik'],
];
echo '<hr>';
// Sport
echo $stdplan2['Dienstag'][3];
echo '<hr>';
foreach($stdplan2 as $tag_arr) {
	foreach($tag_arr as $fach) {
		echo $fach.' ';
	}
}
echo '<hr>';
$kunde = [
	[
		'Vorname'	=> 'Max',
		'Nachname'	=> 'Schmidt',
		'Ort'		=> 'Hamburg',
	],
	[
		'Vorname'	=> 'Ute',
		'Nachname'	=> 'Meier',
		'Ort'		=> 'Berlin',
		'Hobbies'	=> ['Schwimmen', 'Musik', 'Malen'],
	],
	[
		'Vorname'	=> 'Petra',
		'Nachname'	=> 'Müller',
		'Ort'		=> 'Köln',
	],
];
// Schwimmen 
echo $kunde[1]['Hobbies'][0];





?>