<?php 
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'phpkurs'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

if(isset($_POST["editieren"])) {
	$vorname  = trim(mysqli_real_escape_string($link,$_POST["vorname"]));
	$nachname = trim(mysqli_real_escape_string($link,$_POST["nachname"]));
	$telefon  = trim(mysqli_real_escape_string($link,$_POST["telefon"]));
	$id       = (int)$_POST["id"];
	if($id > 0) {
		$query = "UPDATE telefonbuch SET vorname='$vorname',nachname='$nachname',telefon='$telefon' WHERE id=$id";
		mysqli_query($link,$query);
	}
}

$query = "SELECT * FROM telefonbuch ORDER BY nachname,vorname";
$result = mysqli_query($link,$query);
echo '<table border="1">';
while($row = mysqli_fetch_assoc($result)) {
	echo '<tr>';
	echo '<td>'.$row['nachname'].'</td>';
	echo '<td>'.$row['vorname'].'</td>';
	echo '<td>'.$row['telefon'].'</td>';
	echo '<td><a href="telefonbuchadmin.php?edit='.$row['id'].'">Editieren</a></td>';
	echo '</tr>';
}
echo '</table><br><br>';

if(isset($_GET['edit'])) {
	$id = (int)$_GET['edit'];
	if($id > 0) {
		$query = "SELECT * FROM telefonbuch WHERE id=$id";
		$result = mysqli_query($link,$query);
		if($row = mysqli_fetch_assoc($result)) {
			echo'<form action="telefonbuchadmin.php" method="post">
			<input type="text" name="vorname" placeholder="Vorname" value="'.$row['vorname'].'"><br>
			<input type="text" name="nachname" placeholder="Nachname" value="'.$row['nachname'].'"><br>
			<input type="text" name="telefon" placeholder="Telefonnummer" value="'.$row['telefon'].'"><br>
			<input type="hidden" name="id" value="'.$row['id'].'">
			<input type="submit" name="editieren" value="Speichern">
			</form>';
		}
	}
}

/*
Aufgabe:
Erweitern Sie das Skript um die Möglichkeit einen Datensatz zu löschen. 
Dazu soll hinter jedem Telefonbucheintrag ein "Löschen"-Link angezeigt werden 
Wird der Löschen-Link angeklickt, soll folgende Meldung angezeigt werden:
Soll der Datensatz Max Mustermann mit der Telefonnummer 123456 wirklich gelöscht werden?
Unter der Frage soll ein Formular mit einem JA und NEIN-Button angezeigt werden. 
Wird der Ja-Button angeklickt, soll der Datensatz in der Datenbank gelöscht werden.
*/
?>