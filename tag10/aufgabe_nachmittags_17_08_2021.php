<?php 
// Schreiben Sie für jede Aufgabe ein eigenes PHP-Skript. 
// Lösen Sie die nachfolgenden Aufgaben mit Hilfe der MySQLi-Funktionen die wir
// heute kennengelernt haben.

// Aufgabe 1: Geben Sie alle Städte aus der Datenbank world aus, die eine Einwohnerzahl 
// von über 2 Mio. haben 
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'world'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

$query  = "SELECT city.name, population FROM city WHERE population >2000000 ORDER BY name";
$result = mysqli_query($link,$query);
	
while($row = mysqli_fetch_assoc($result)) {	
	echo $row['name'].' '.$row['population'].'<br>';
}		
echo '<hr>';

// Aufgabe 2: Geben Sie ein zufälliges Land aus der Datenbank world aus.
$query  = "SELECT country.name FROM country ORDER BY rand() LIMIT 1";
$result = mysqli_query($link,$query);
	
while($row = mysqli_fetch_assoc($result)) {	
	echo $row['name'].'<br>';
}		
echo '<hr>';

// Aufgabe 3: (Ist die Aufgabe 2 von heute!)
// Über ein Formular soll es möglich sein eine Filmkategorie auszuwählen. 
// Nach dem Absenden des Formulars sollen alle Filme dieser Filmkategorie angezeigt werden.
$host 	= 'localhost';
$user 	= 'root';
$passwd = '';
$dbname = 'sakila'; 

$link = @mysqli_connect($host,$user,$passwd, $dbname);
if(mysqli_connect_error()) {
	die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}

$query  = "SELECT category_id, name FROM category ORDER BY name";
$result = mysqli_query($link,$query);
?>
<form action="aufgabe_nachmittags_17_08_2021.php" method="post">
	<select name="category_id">
<?php		
while($row = mysqli_fetch_assoc($result)) {	
	echo '<option value="'.$row['category_id'].'">'.$row['name'].'</option>';
}		
?>		
</select>
<input type="submit" name="senden" value="Filme anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$category_id = (int)$_POST["category_id"];
	if($category_id > 0) {
		$query =   "SELECT film.title
                    FROM film_category
                    JOIN film
                    ON film_category.film_id = film.film_id
                    WHERE film_category.category_id = $category_id";
		$result = mysqli_query($link,$query);
		while($row = mysqli_fetch_assoc($result)) {
			echo ucwords(strtolower($row['title'])).'<br>';
		}
	}
}

?>
