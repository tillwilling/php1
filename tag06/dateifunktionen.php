<?php 
$filename = 'datei.txt';
// Datei öffnen 
$handle = fopen($filename,'w+');
// Datei schreiben / Datei lesen 
fwrite($handle, 'Hallo Welt');
echo fread($handle,filesize($filename));
// Datei schließen
fclose($handle);




?>