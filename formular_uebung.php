<?php
/*
Aufgabe: Über ein Formular soll es möglich seine eine Stadt 
und eine PLZ einzugeben. Wird das Formular abgeschickt, soll 
die Meldung "Die PLZ XXXX gehört zu YYYYY." angezeigt werden.
*/
?>
<form action="formular_uebung.php" method="post">
<input type="text" name="stadt" placeholder="Stadt"><br>
<input type="text" name="plz" placeholder="PLZ"><br>
<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$stadt = trim($_POST["stadt"]);
	$plz   = trim($_POST["plz"]);
	echo "Die PLZ $plz gehört zu $stadt.";
	//echo "Die PLZ ".$plz." gehört zu ".$stadt.".";
}

?>