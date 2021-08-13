<?php 
// Arrays -> Reihe von Elementen

// Numerisches Array
$vorname_arr = ['Ute','Tim','Marion','Stefan','Melanie'];
echo $vorname_arr[4];

// Debug-Ausgabe
echo '<pre>';
print_r($vorname_arr);
echo '</pre>';

for($i=0; $i<5; $i++) {
	echo $vorname_arr[$i].'<br>';
}
echo '<hr>';
// Assoziatives Array
$haupstadt_arr = [
//  Schlüssel       => Wert
	'Deutschland'	=> 'Berlin',
	'Schweiz'		=> 'Bern',
	'Italien'		=> 'Rom',
];
// Rom
echo $haupstadt_arr['Italien'];
echo '<hr>';

foreach($haupstadt_arr as $key => $value) {
	echo "Die Hauptstadt von $key lautet $value.<br>";
}
echo '<hr>';
foreach($haupstadt_arr as $value) {
	echo $value.'<br>';
}
echo '<hr>';
foreach($vorname_arr as $value) {
    echo $value.'<br>';
}