<?php 

// Modulo - Restwert nach einer Division

echo 9%3;	// Rest: 0
echo '<br>';
echo 8%3;	// Rest: 2
echo '<br>';
echo 14%5;	// Rest: 4
echo '<br>';
echo 3%17;	// Rest: 3
echo '<hr>';

$obst = ['Apfel', 'Birne', 'Orange'];
for($i=0; $i<20; $i++) {
	echo $obst[$i%3];
	echo ' ';
}
echo '<hr>';

$zahl = 34;
echo $endziffer = $zahl%10;





?>