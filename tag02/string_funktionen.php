<?php 

// Dreht eine Zeichenkette um
$str = 'Hallo Welt';
echo strrev($str);
echo '<hr>';

// Wandelt Kleinbuchstaben in Großbuchstaben um
echo strtoupper('Hallo Welt');
echo '<hr>';

echo 'Test '.strtoupper('abc').' Test';
echo '<hr>';

//  Sucht die Position des ersten Vorkommens des Suchstrings in einem String 
echo strpos('Hallo Welt', 'Welt');
echo '<hr>';
// Aufgabe:
// Wandeln Sie die Zeichenkette "Hallo Welt" in Kleinbuchstaben um 
// -> "hallo welt"
echo strtolower("Hallo Welt");
echo '<hr>';

$str = ' Leerzeichen entfernen ';
echo '#'.trim($str).'#';
echo '<hr>';

// Aufgabe:
// Wandeln Sie die Zeichenkette "hallo welt" in "Hallo Welt" um
echo ucwords("hallo welt");
echo '<hr>';

// Entfernt HTML- und PHP-Tags aus einem String
echo strip_tags('<b>Kein Fettdruck</b>');
echo '<hr>';

// Ermitteln der String-Länge
echo strlen('Hallo Welt');
echo '<hr>';


?>