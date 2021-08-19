<?php 
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'world'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

$query  = "SELECT name FROM country WHERE continent = 'EUROPE'";
$result = mysqli_query($link,$query);

$anzahl = mysqli_num_rows($result);
echo "Es gibt $anzahl Datensätze<hr>";
while($row = mysqli_fetch_assoc($result)) {
	echo $row['name'].'<br>';
}

?>