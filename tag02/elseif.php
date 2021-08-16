<?php 

$vorname = 'Maria';
if($vorname == 'Maria') {
	echo 'Hallo Maria';
} elseif($vorname == 'Stefan') {
	echo 'Hey Stefan';
} elseif($vorname == 'Melanie') {
	echo 'Guten Tag Melanie';
} elseif($vorname == 'Markus') {
	echo 'Willkommen Markus';
} else {
	echo 'Hallo Unbekannte/r';	
}
echo '<hr>';
// Alternative mit switch:
switch($vorname) {
	case 'Maria':
		echo 'Hallo Maria';
		break;
	case 'Stefan':
		echo 'Hey Stefan';
		break;
	case 'Melanie':
		echo 'Guten Tag Melanie';
		break;
	case 'Markus':
		echo 'Willkommen Markus';
		break;
	default: 
		echo 'Hallo Unbekannte/r';
}






?>