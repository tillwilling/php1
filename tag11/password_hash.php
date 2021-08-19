<?php 

$passwort = 'qwertz';
echo $hashdb = password_hash($passwort,PASSWORD_BCRYPT);
echo '<br>';


$passwort2 = 'qwertz2';
if(password_verify($passwort2, $hashdb)) {
	echo 'Passwort richtig';	
} else {
	echo 'Passwort falsch';
}