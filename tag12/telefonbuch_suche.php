<?php
// Aufgabe 2:
// Über ein weiteres Formular soll es möglich sein, nach einem Namen zu suchen 
// um die Telefonnummer zu erfahren.
?>

<form action="telefonbuch_suche.php" method="GET">
<input type="text" name="name" placeholder="Name"><br>
<input type="submit" name="senden" value="Suchen">
</form>

<?php
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'phpkurs'; 

$link = @mysqli_connect($host,$user,$passwd,$dbname);
	if(mysqli_connect_error()) {
		die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
	}
 
if(isset($_GET["senden"])) {
    $name = trim(mysqli_real_escape_string($link,strip_tags($_GET["name"])));
	if($name) {
		$query  = "SELECT * FROM telefonbuch WHERE vorname='$name' OR nachname='$name'";
		mysqli_query($link,$query);
        $result = mysqli_query($link,$query);
        while($row = mysqli_fetch_assoc($result)) {
			echo $row['vorname']. ' ' . $row['nachname'] . ' ' . 'Telefon:' . $row['telefon'].'<br>';
		}
	} else {
		echo 'Kein gültiger Eintrag';
	}
}
?>