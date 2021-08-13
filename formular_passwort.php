<?php
// Aufgabe 4:
// Über ein Formular soll es möglich sein ein Passwort einzugeben.
// Lautet das eingebene Passwort "geheim", soll die Meldung "Passwort richtig",
// ansonsten die Meldung "Passwort falsch" angezeigt werden.
?>
<form action="formular_passwort.php" method="post">
<input type="text" name="passwort" placeholder="Passwort"><br>
<input type="submit" name="senden" value="Anzeigen">
</form>
<?php 
$passwort = trim($_POST["passwort"]);

if(isset($_POST["senden"])) {
	if($passwort == 'geheim') {
        echo "Passwort richtig";
}
	    else {
            echo "Passwort falsch";
        }
    }
?>