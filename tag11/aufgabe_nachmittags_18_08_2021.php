<?php 
/*
Aufgabe:
 
a) Erstellen Sie mit Hilfe von phpMyAdmin folgende Tabelle:
   
Tabelle: zitat (in der DB phpkurs)
--------------
id int PRIMARY KEY auto_increment,
zitat varchar(1000),
verfasser varchar(100) 
 
b) Über ein Formular soll es möglich sein ein Zitat und den Verfasser in eine Datenbanktabelle einzutragen. 
Tragen Sie mindestens 5 Zitate ein. (Beispiel-Zitate finden Sie auf der Webseite zitate.net.)
*/
?>
<form action="aufgabe_nachmittags_18_08_2021.php" method="post">
<textarea cols="20" rows="5" name="zitat" placeholder="Zitat"></textarea><br>
<input type="text" name="verfasser" placeholder="Verfasser"><br>
<input type="submit" name="senden" value="Hinzufügen">
</form>
<?php 
if(isset($_POST["senden"])) {
    echo $_POST["zitat"];
    echo $_POST["verfasser"];
    
	$host 	= 'localhost';
	$user 	= 'root';
	$passwd = '';
	$dbname = 'phpkurs'; 

	$link = @mysqli_connect($host,$user,$passwd,$dbname);
	if(mysqli_connect_error()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
	}
	$zitat 	= mysqli_real_escape_string($link,$_POST["zitat"]);
	$verfasser 	= trim(mysqli_real_escape_string($link,$_POST["verfasser"]));
	$query = "INSERT INTO zitat (zitat,verfasser) VALUES('$zitat','$verfasser')";
}	
   
// c) Bei jedem Aufruf des Skripts soll ein zufälliges Zitat angezeigt werden

?>