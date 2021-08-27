<form action="dateisuchmaschine.php" method="get">
<input type="text" name="s" placeholder="Suche...">
<input type="submit" value="Suchen">
</form>
<?php 
function verzeichnis($verz) {
	$dh   = opendir($verz);
	readdir($dh); // . 
	readdir($dh); // ..
	while(($file = readdir($dh)) !== false) {
		if(is_dir($verz.'/'.$file)) {
			verzeichnis($verz.'/'.$file);
		} else {	
			$handle = fopen($verz.'/'.$file,'r');
			$inhalt = fread($handle,10000);
			fclose($handle);
			if((stripos($inhalt,$_GET['s'])) !== FALSE) {
				echo $verz.'/'.$file.'<br>';
			}
		}	
	}
	closedir($dh);
}
if(isset($_GET['s'])) {
	verzeichnis('c:/xampp/htdocs');
}

?>