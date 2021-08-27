<?php 

function verzeichnis($verz) {
	$dh   = opendir($verz);
	readdir($dh); // . 
	readdir($dh); // ..
	while(($file = readdir($dh)) !== false) {
		if(is_dir($verz.'/'.$file)) {
			verzeichnis($verz.'/'.$file);
		} else {	
			echo $verz.'/'.$file;echo'<br>';
		}	
	}
	closedir($dh);
}

$verz = 'c:/xampp/php';
verzeichnis($verz);