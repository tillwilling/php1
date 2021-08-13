<?php

// Aufgabe 3: 
// Schreiben Sie ein Formular um eine beliebige Zeichenkette und
// einen Zahlenwert einzugeben. Abhängig vom eingegebenen Zahlenwert soll die 
// Zeichenkette so häufig untereinander wiederholt werden.
?>
<form action="formular_aufgabe_3.php" method="post">
<input type="text" name="wort" placeholder="Wort"><br>
<input type="number" name="zahl" placeholder="Zahl"><br>
<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
$counter = trim($_POST["zahl"]);
$wort = trim($_POST["wort"]);
for($y=0; $y<$counter; $y++) {
	echo "$wort<br>";
	}
	echo '<hr>';

?>