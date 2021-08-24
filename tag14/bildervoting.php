<?php 

/*
Tabelle: bildervoting (in DB phpkurs)
-------------------------------------
id INT PRIMARY KEY auto_increment 
dateiname VARCHAR(255) UNIQUE
anzahl_bew INT
summe_bew INT
durchschnitt FLOAT
md5 VARCHAR(32) UNIQUE

Aufgabe:
- Über ein Formular soll es möglich sein Bilder vom Typ JPEG oder PNG hochzuladen.
- Die Bilder dürfen max. 1 MB groß sein.
- Die Bilder sollen in ein Verzeichnis mit dem Namen "images" gespeichert werden.

- Der Dateiname soll in einer Datenbanktabelle gespeichert werden
	INSERT INTO bildervoting VALUES (null,'$filename',0,0,0,'$md5');

Nützliche Funktion: md5_file()

Aufgabe 2:
Zeigen Sie ein zufälliges Bild aus der Datenbank an 
*/
session_start();
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bildervoting</title>
</head>
<body>
<h2>Bild hochladen</h2>
<form action="bildervoting.php" method="post" enctype="multipart/form-data">
	<input type="file" name="datei">
	<input type="submit" name="senden" value="Hochladen">
</form>
<?php 
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'phpkurs'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}
if(isset($_FILES['datei']['error']) && $_FILES['datei']['error'] == 0) {
	$name 		= $_FILES['datei']['name'];
	$tmp_name 	= $_FILES['datei']['tmp_name'];
	$type      	= mime_content_type($tmp_name);
	$size 		= $_FILES['datei']['size'];
	
	if($type != "image/jpeg" && $type != "image/png") {
		echo "Nur Bilder vom Typ PNG und JPEG sind zugelassen!<br>";		
	} elseif($size > 1024*1024) {
		echo "Das Bild darf max. 1 MB groß sein<br>";
	} else {
		$filename = uniqid().'_'.$name;
		$md5      = md5_file($tmp_name);
		$query = "INSERT INTO bildervoting VALUES (null,'$filename',0,0,0,'$md5')";
		mysqli_query($link,$query);
		if(mysqli_errno($link) == 1062) {
			echo "Bild ist bereits in der Datenbank vorhanden<br>";	
		} else {
			move_uploaded_file($tmp_name,'images/'.$filename);
			echo "Bild erfolgreich hochgeladen";
		}
		
	}
}
if(isset($_POST["vote"])) {
	$vote = (int)$_POST["vote"];
	$id   = $_SESSION['id'];
	if($vote >= 1 && $vote <= 10) {
		$query = "UPDATE bildervoting SET anzahl_bew=anzahl_bew+1, summe_bew=summe_bew+$vote, durchschnitt=summe_bew/anzahl_bew WHERE id=$id";
		mysqli_query($link,$query);
	}
}

$query  = "SELECT * FROM bildervoting ORDER BY rand() LIMIT 1";
$result = mysqli_query($link, $query);
$row    = mysqli_fetch_assoc($result);
$_SESSION['id'] = $row['id'];
// echo '<img src="images/'.$row['dateiname'].'" width="400">';
?>
<img src="images/<?= $row['dateiname'] ?>" width="400">

<form action="bildervoting.php" method="post">
<input type="submit" name="vote" value="1">
<input type="submit" name="vote" value="2">
<input type="submit" name="vote" value="3">
<input type="submit" name="vote" value="4">
<input type="submit" name="vote" value="5">
<input type="submit" name="vote" value="6">
<input type="submit" name="vote" value="7">
<input type="submit" name="vote" value="8">
<input type="submit" name="vote" value="9">
<input type="submit" name="vote" value="10">
<form>
<?php 
// Aufgabe: Erzeugen Sie eine TOP5- und eine FLOP5-Liste. 
// Zeigen Sie dazu einmal das Bild und die jeweilige Durchschnittsbewertung (round) an
$query   = "SELECT * FROM bildervoting WHERE anzahl_bew>3 ORDER BY durchschnitt DESC LIMIT 5";
$result1 = mysqli_query($link,$query);
$query   = "SELECT * FROM bildervoting WHERE anzahl_bew>3 ORDER BY durchschnitt LIMIT 5";
$result2 = mysqli_query($link,$query);
echo '<table border="0">';
$pos = 1;
echo '<tr>';
echo '<th>Pos</th>';
echo '<th>TOP 5</th>';
echo '<th>Bewertung</th>';
echo '<th>&nbsp</th>';
echo '<th>Pos</th>';
echo '<th>FLOP 5</th>';
echo '<th>Bewertung</th>';
echo '</tr>';
while(($row1 = mysqli_fetch_assoc($result1)) && ($row2 = mysqli_fetch_assoc($result2))) {
	echo '<tr>';
	echo '<td>'.$pos.'</td>';
	echo '<td><img src="images/'.$row1['dateiname'].'" height="50"></td>';
	echo '<td>'.round($row1['durchschnitt'],1).'</td>';
	echo '<td style="width:50px">&nbsp;</td>';
	echo '<td>'.$pos.'</td>';
	echo '<td><img src="images/'.$row2['dateiname'].'" height="50"></td>';
	echo '<td>'.round($row2['durchschnitt'],1).'</td>';
	echo '</tr>';
	$pos++;
}
echo '</table>';
?>


</body>
</html>