<?php 

// while-Schleife / Solange-Schleife

$zufall = mt_rand(1,1000);
$counter = 0;
while($zufall != 500) {
	$zufall = mt_rand(1,1000);
	$counter++;
}
echo $counter;
echo '<hr>';

// --------------------------------------------
$counter = 0;
do {
	$zufall = mt_rand(1,1000);
	$counter++;
} while($zufall != 500);
echo $counter;

?>