<?php 
// Aufgabe 1:
// Über ein Formular soll es möglich sein einen Schauspielernamen (Vornamen, Nachnamen) auszuwählen.
// Nach dem Absenden des Formulars sollen alle Filme in denen der Schauspieler mitgespielt hat 
// angezeigt werden.

$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'sakila'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

$query  = "SELECT actor_id, first_name, last_name FROM actor ORDER BY last_name, first_name";
$result = mysqli_query($link,$query);
?>
<form action="aufgabe_morgens_teil2_17_08_2021.php" method="post">
	<select name="actor_id">
<?php		
while($row = mysqli_fetch_assoc($result)) {	
	echo '<option value="'.$row['actor_id'].'">'.$row['last_name'].' '.$row['first_name'].'</option>';
}		
?>		
	</select>
	<input type="submit" name="senden" value="Filme anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$actor_id = (int)$_POST["actor_id"];
	if($actor_id > 0) {
		$query = "SELECT film.title FROM film_actor JOIN film ON film_actor.film_id = film.film_id WHERE film_actor.actor_id = $actor_id";
		$result = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($result)) {
			echo $row['title'].'<br>';
		}
	}
}

?>

<?php


// Aufgabe 2:
// Über ein Formular soll es möglich sein eine Filmkategorie auszuwählen. 
// Nach dem Absenden des Formulars sollen alle Filme dieser Filmkategorie angezeigt werden.