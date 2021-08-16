<?php 

/*
Verknüpfungsoperatoren:

UND-Verknüpfung (&& oder AND)
Beide Teilbedingungen wahr -> Insgesamt wahr	

ODER-Verknüpfung (|| oder OR)
Mindestens eine Teilbedingung wahr -> Insgesamt wahr
*/
$ampel1 = 'rot';
$ampel2 = 'rot';

if($ampel1 == 'rot' || $ampel2 == 'rot') {
	echo 'wahr';	
} else {
	echo 'unwahr';
}