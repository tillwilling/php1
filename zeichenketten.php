<?php 

// Zeichenketten / Strings

$str1 = "Dies ist eine Zeichenkette";
$str2 = 'Dies ist eine Zeichenkette';

$str3 = 'Dies ist " eine Zeichenkette';
$str4 = "Dies ist ' eine Zeichenkette";

$str5 = '<a href="http://www.google.de">Suchmaschine</a>';

// Der Backslash maskiert das nachfolgende Zeichen

$str6 = "Dies ist ' \" eine Zeichenkette";

//Heute ist Mittwoch

$wort1 = 'ist';
$wort2 = 'Heute';
$wort3 = 'Mittwoch';
echo $wort2 . ' ' . $wort1 . ' ' . $wort3 . ' ' . '<br>';
echo "$wort2 $wort1 $wort3<br>";

$vorname = 'Maria';
echo "Vorname: $vorname<br>";
echo 'Vorname: $vorname<br>';

?>