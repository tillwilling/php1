<?php 

echo '<pre>';
print_r($_FILES);
echo '</pre>';

?>
<form action="dateiupload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="datei">
	<input type="submit" name="senden" value="Hochladen">
</form>

<?php
// Datei erfolgreich hochgeladen?
if(isset($_FILES['datei']['error']) && $_FILES['datei']['error'] == 0) {
	$name 		= $_FILES['datei']['name'];
	$tmp_name 	= $_FILES['datei']['tmp_name'];
	
	// Die hochgeladene Datei soll nur in den Ordner upload verschoben 
	// werden, wenn es sich um eine JPEG-Datei oder eine PNG-Datei handelt.
	// Das Bild darf eine Maximalgröße von 800 KB (800*1024) besitzen.
	// Geben Sie passende (Fehler)meldungen aus.
	move_uploaded_file($tmp_name,'upload/'.uniqid().'_'.$name);
	
}


?>