<?php 

// Aufgabe 1a: 
// Legen Sie ein Array an mit sieben Obstsorten. Mischen Sie das Array zufällig durch. 
// Geben Sie alle sieben Obstsorten untereinander aus.  
// Nutzen Sie dafür die foreach-Schleife.
$obst_arr = ['Apfel','Birne','Orange','Zitrone','Melone','Erdbeere','Weintraube'];
shuffle($obst_arr);
foreach($obst_arr as $value) {
	echo $value.'<br>';
}
echo '<br>';
// Aufgabe 1b:
// Prüfen Sie, ob in dem Array eine "Birne" enthalten ist und geben eine passende Meldung aus.
$treffer = false;
foreach($obst_arr as $value) {
	if($value == 'Birne'){
		$treffer = true;
		break;
	} 
}
if($treffer) {
	echo 'Birne ist enthalten';
} else {
	echo 'Birne ist nicht enthalten';
}
echo '<br>';
// ------------------------------------------------
if(array_search("Birne", $obst_arr) !== false){
    echo "Birnen sind im Angebot.";
}else{
    echo "Schade";
}
// ------------------------------------------------
echo '<br>';
if(in_array('Birne',$obst_arr)){
    echo "Birnen sind im Angebot.";
}else{
    echo "Schade";
}
echo '<hr>';
// Aufgabe 2:
// Über ein Formular soll es möglich sein eine Zeichenkette einzugeben. 
// Nach dem Absenden des Formulars soll 
// a) -die Zeichenkette umgedreht angezeigt werden 
// b) -die Originalzeichenkette 10 mal untereinander angezeigt werden 
// c) -die Anzahl der Zeichen der Zeichenkette ausgegeben werden 
?>
<form action="aufgabe_nachmittags_06_08_2021.php" method="post">
<input type="text" name="eingabe">
<input type="submit" name="senden" value="Abschicken">
</form>
<?php
if(isset($_POST["senden"])) {
	$eingabe = $_POST["eingabe"];
	// a) 
	echo strrev($eingabe);
	echo '<br>';
	// b) 
	for($i=0; $i<10; $i++) {
		echo $eingabe.'<br>';
	}
	echo '<br>';
	// c) 
	echo strlen($eingabe);
}
echo '<hr>';
// Aufgabe 3: 
// Schreiben Sie ein Formular um eine beliebige Zeichenkette und
// einen Zahlenwert einzugeben. Abhängig vom eingegebenen Zahlenwert soll die 
// Zeichenkette so häufig untereinander wiederholt werden.
?>
<form action="aufgabe_nachmittags_06_08_2021.php" method="post">
<textarea cols="20" rows="5" name="text"></textarea><br>
<input type="text" name="anzahl" placeholder="Wiederholungen">
<input type="submit" name="senden2" value="Abschicken">
</form>
<?php 
if(isset($_POST["senden2"])) {
	$text   = $_POST["text"];
	$anzahl = $_POST["anzahl"];
	for($i=0; $i<$anzahl; $i++) {
		echo $text.'<br>';	
	}
}
// Aufgabe 4:
// Über ein Formular soll es möglich sein ein Passwort einzugeben.
// Lautet das eingebene Passwort "geheim", soll die Meldung "Passwort richtig",
// ansonsten die Meldung "Passwort richtig"" angezeigt werden.
?>
<form action="aufgabe_nachmittags_06_08_2021.php" method="post">
<input type="password" name="passwort" placeholder="Passwort">
<input type="submit" name="senden3" value="Login">
</form>
<?php 
if(isset($_POST["senden3"])) {
	$passwort = $_POST["passwort"];
	if($passwort == 'geheim') {
		echo "Passwort richtig";
	} else {
		echo "Passwort falsch";
	}
}