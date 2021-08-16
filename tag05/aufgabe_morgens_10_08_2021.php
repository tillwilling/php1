<?php 
/*
Aufgabe:
  
Programmieren Sie einen BMI-Rechner. Über ein Formular sollen die notwendigen Daten
eingegeben werden können. Anschließend wird der BMI-Wert angezeigt.
  
Der BMI (Body-Maß-Index) ist ein Maß für das Gewicht in Relation zur Körpergröße, 
er wird wie folgt berechnet:
  
BMI = (Gewicht / (Groesse * Groesse))* 10000
Gewicht in kg und Körpergröße in cm.
*/
 
/* 
  
BMI-Index                Frauen / Männer
-----------------------------------------
Untergewicht                <19 / <20
Normalgewicht          19 - <25 / 20 - <26
Übergewicht             25 - 30 / 26 - 30
Starkes Übergewicht        > 30 / >30
 
Als Ausgabe soll folgender Text erscheinen:
Sie haben einen BMI-Wert von XXX und haben damit XXX.
Z.B.: Sie haben einen BMI-Wert von 24 und haben damit Normalgewicht.
*/
?>
<form action="aufgabe_morgens_10_08_2021.php" method="post">
<select name="geschlecht">
	<option value="w">Frau</option>
	<option value="m">Mann</option>
</select><br>
<input type="text" name="groesse" placeholder="Körpergrösse in cm"><br>
<input type="text" name="gewicht" placeholder="Gewicht in kg"><br>
<input type="submit" name="senden" value="BMI berechnen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$geschlecht = $_POST["geschlecht"];
	// Cast-Operator (int) - wandelt den Wert in einen Integer-Wert um
	$groesse    = (int)$_POST["groesse"];
	$gewicht    = (int)$_POST["gewicht"];
	if($groesse >= 120 && $groesse <= 210 && $gewicht >= 30 && $gewicht <= 250) {
		$bmi = ($gewicht / ($groesse * $groesse))* 10000;
		if($bmi < 19 || ($geschlecht == 'm'&& $bmi < 20)) {
			$erg = 'Untergewicht'; 
		} elseif($bmi < 25 || ($geschlecht == 'm'&& $bmi < 26)) {
			$erg = 'Normalgewicht';
		} elseif($bmi <= 30) {
			$erg = 'Übergewicht';
		} else {
			$erg = 'starkes Übergewicht';	
		}
		//$bmi = round($bmi,1);
		//echo "Sie haben einen BMI-Wert von $bmi und haben damit $erg.";
		echo "Sie haben einen BMI-Wert von ".round($bmi,1)." und haben damit $erg.";
	} else {
		echo "Fehler: Ungültige Werte!";	
	}
	
}
/*
?>
<form action="aufgabe_morgens_10_08_2021.php" method="post">
<select name="geschlecht">
	<option value="w">Frau</option>
	<option value="m">Mann</option>
</select><br>
<input type="text" name="groesse" placeholder="Körpergrösse in cm"><br>
<input type="text" name="gewicht" placeholder="Gewicht in kg"><br>
<input type="submit" name="senden" value="BMI berechnen">
</form>
<?php 
if(isset($_POST["senden"])) {
	$geschlecht = $_POST["geschlecht"];
	// Cast-Operator (int) - wandelt den Wert in einen Integer-Wert um
	$groesse    = (int)$_POST["groesse"];
	$gewicht    = (int)$_POST["gewicht"];
	if($groesse >= 120 && $groesse <= 210 && $gewicht >= 30 && $gewicht <= 250) {
		$bmi = ($gewicht / ($groesse * $groesse))* 10000;
		/*
		if($bmi < 19 || ($geschlecht == 'm'&& $bmi < 20)) {
			$erg = 'Untergewicht'; 
		} elseif($bmi < 25 || ($geschlecht == 'm'&& $bmi < 26)) {
			$erg = 'Normalgewicht';
		} elseif($bmi <= 30) {
			$erg = 'Übergewicht';
		} else {
			$erg = 'starkes Übergewicht';	
		}
		
		switch(true) {
			case $bmi < 19 || ($geschlecht == 'm'&& $bmi < 20):
				$erg = 'Untergewicht'; 
				break;
			case $bmi < 25 || ($geschlecht == 'm'&& $bmi < 26):
				$erg = 'Normalgewicht';
				break;
			case $bmi <= 30:
				$erg = 'Übergewicht';
				break;
			default: 
				$erg = 'starkes Übergewicht';
		}
		//$bmi = round($bmi,1);
		//echo "Sie haben einen BMI-Wert von $bmi und haben damit $erg.";
		echo "Sie haben einen BMI-Wert von ".round($bmi,1)." und haben damit $erg.";
	} else {
		echo "Fehler: Ungültige Werte!";	
	}
	
}





?>
*/





?>