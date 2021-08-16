<?php 

echo '<pre>';
print_r($_POST);
//var_dump($_POST);
echo '</pre>';

?>
<form action="formular.php" method="post">
<input type="text" name="vorname" placeholder="Vorname"><br>
<input type="text" name="nachname" placeholder="Nachname"><br>
<input type="number" name="alter" placeholder="Alter"><br>
<input type="submit" name="senden" value="Abschicken">
</form>
<?php 
// Wurde das Formular abgeschickt?
if(isset($_POST["senden"])) {
	echo $_POST["vorname"].' '.$_POST["nachname"];
	echo '<br>';
	echo $_POST["alter"];
}