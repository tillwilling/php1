<?php 
$vorname_arr = ['Ute','Tim','Marion','Stefan','Melanie'];

// Arraywerte durchmischen
shuffle($vorname_arr);

// Aufsteigende Sortierung der Werte
sort($vorname_arr);
// Fügt ein oder mehr Elemente an das Ende eines Arrays an
array_push($vorname_arr,'Markus','Tanja');
$vorname_arr[] = 'Bernd';
// Liefert und entfernt das letzte Element eines Arrays
echo array_pop($vorname_arr);
echo '<hr>';
// Liefert die Anzahl der Array-Elemente
echo count($vorname_arr);

echo '<pre>';
print_r($vorname_arr);
echo '</pre>';

//  Erstellt ein Array mit einem Bereich von Elementen
$abc_arr = range('A','L');
echo '<pre>';
print_r($abc_arr);
echo '</pre>';


?>