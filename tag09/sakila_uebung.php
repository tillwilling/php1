<?php 
// Aufgabe: Zeigen Sie alle Schauspielernamen aus der Sakila-Datenbank an. Sortiert nach dem Nachnamen aufsteigend.
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'sakila'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

$query  = "SELECT first_name, last_name FROM actor ORDER BY last_name, first_name";
$result = mysqli_query($link,$query);
while($row = mysqli_fetch_assoc($result)) {
	echo $row['last_name'].' '.$row['first_name'].'<br>';
}