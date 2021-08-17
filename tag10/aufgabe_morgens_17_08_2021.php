<?php 

session_start();

//Aufgabe 1:
//Vor 12:00 Uhr soll "Guten Morgen" ausgegeben werden.
//Ab 12:00 Uhr soll "Guten Tag" angezeigt werden.
//Ab 18:00 Uhr soll "Guten Abend" angezeigt werden
$uhrzeit = date("G");
//Vor 12:00 Uhr soll "Guten Morgen" ausgegeben werden.
if($uhrzeit < 12){
    echo "Guten Morgen";
} else {   
	//Ab 12:00 Uhr soll "Guten Tag" angezeigt werden.
	if($uhrzeit < 18){
		echo "Guten Tag";
	} else {
	//Ab 18:00 Uhr soll "Guten Abend" angezeigt werden
		echo "Guten Abend";
	}
}

$stunde = date('G');
if($stunde < 12){echo 'Guten Morgen';}
elseif($stunde < 18){echo 'Guten Tag';}
else{echo 'Guten Abend';}

$aktuelleZeit = (int)date("G");
if ($aktuelleZeit < 12) {
    echo "Guten Morgen";
} elseif ( $aktuelleZeit < 18) {
    echo "Guten Tag!";
} else  {
    echo "Guten Abend!";
}

//Aufgabe 2:
//Programmierung eines kleinen Zahlenratespiels:
//Über ein Formular soll es möglich sein, eine Zahl im Bereich von 1 - 10 
//einzugeben. Zusätzlich soll eine Zufallszahl im Bereich von 1 - 10 gezogen 
//werden. Anschließend soll angezeigt werden, ob die Zufallszahl kleiner, größer oder 
//gleich der eingegebenen Zahl ist. 
//
//Optionale Erweiterung des Spiel: Die Zufallszahl soll sich erst ändern, wenn sie erraten wurde. 
?>
<form action="aufgabe_morgens_17_08_2021.php" method="post">
	<input type="text" name="zahl" size="4" placeholder="Zahl">
	<input type="submit" name="senden" value="Raten">
</form>
<?php 
if(isset($_POST["senden"])) {
	if(!isset($_SESSION['zufall'])) {
		$_SESSION['zufall'] = mt_rand(1,10);
	}
	$zahl = (int)$_POST["zahl"];
	if($zahl >= 1 && $zahl <= 10) {
		//$zufall = mt_rand(1,10);
		if($_SESSION['zufall'] > $zahl) {
			echo 'Der gesuchte Wert ist größer';
		} elseif($_SESSION['zufall'] < $zahl) {
			echo 'Der gesuchte Wert ist kleiner';
		} else {
			echo 'Treffer';	
			$_SESSION['zufall'] = mt_rand(1,10);
		}
	} else {
		echo "Nur Zahlen im Bereich von 1 bis 10 sind erlaubt.";	
	}
}

?>