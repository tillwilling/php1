<?php 
$perso = '2406055684D<<6810203<0705109<<<<<<<6';

//Zugriff auf das 2. Zeichen der Zeichenkette
//echo $perso[1];
//echo $endziffer = 34%10;

// Aufgabe: Berechnen Sie unter PHP die ersten 3 Prüfziffern.
/*
echo $pz1 = ((($perso [0]*7)%10)+(($perso[1]*3)%10)+(($perso [2]*1)%10)+(($perso [3]*7)%10)+(($perso [4]*3)%10)+(($perso [5]*1)%10)+(($perso [6]*7)%10)+(($perso[7]*3)%10)+(($perso [8]*1)%10))%10;echo '<br>';
echo $pf2 = ((($perso [13]*7)%10)+(($perso[14]*3)%10)+(($perso [15]*1)%10)+(($perso [16]*7)%10)+(($perso [17]*3)%10)+(($perso [18]*1)%10))%10;echo '<br>';
echo $pf3 = ((($perso [21]*7)%10)+(($perso[22]*3)%10)+(($perso [23]*1)%10)+(($perso [24]*7)%10)+(($perso [25]*3)%10)+(($perso [26]*1)%10))%10;echo '<br>';
*/
/*
$summe = 0;
$summe += ($perso[0] * 7)%10;
$summe += ($perso[1] * 3)%10;
$summe += ($perso[2] * 1)%10;
$summe += ($perso[3] * 7)%10;
$summe += ($perso[4] * 3)%10;
$summe += ($perso[5] * 1)%10;
$summe += ($perso[6] * 7)%10;
$summe += ($perso[7] * 3)%10;
$summe += ($perso[8] * 1)%10;
echo $pz = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1,7,3,1,7,3,1];
$summe += ($perso[0] * $gew[0])%10;
$summe += ($perso[1] * $gew[1])%10;
$summe += ($perso[2] * $gew[2])%10;
$summe += ($perso[3] * $gew[3])%10;
$summe += ($perso[4] * $gew[4])%10;
$summe += ($perso[5] * $gew[5])%10;
$summe += ($perso[6] * $gew[6])%10;
$summe += ($perso[7] * $gew[7])%10;
$summe += ($perso[8] * $gew[8])%10;
echo $pz = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1,7,3,1,7,3,1];
for($i=0; $i<9; $i++) {
	$summe += ($perso[$i] * $gew[$i])%10;
}
echo $pz = $summe%10;
*/
/*
$summe = 0;
$gew = [7,3,1];
for($i=0; $i<9; $i++) {
	$summe += $perso[$i] * $gew[$i%3];
}
echo $pz = $summe%10;

$summe = 0;
$gew = [7,3,1];
for($i=13; $i<19; $i++) {
	$summe += $perso[$i] * $gew[($i-1)%3];
}
echo $pz = $summe%10;

$summe = 0;
$gew = [7,3,1];
for($i=21; $i<27; $i++) {
	$summe += $perso[$i] * $gew[$i%3];
}
echo $pz = $summe%10;
*/
$perso = '2406055684D<<6810203<0705109<<<<<<<6';
/*
function pruefziffer(string $nr) {
	$summe = 0;
	$gew = [7,3,1];
	for($i=0; $i<strlen($nr); $i++) {
		$summe += $nr[$i] * $gew[$i%3];
	}
	return $pz = $summe%10;
}

$sn = substr($perso,0,9);
$gd = substr($perso,13,6);
$ad = substr($perso,21,6);
echo $psn = pruefziffer($sn);
echo $pgd = pruefziffer($gd);
echo $pad = pruefziffer($ad);

$ges = $sn.$psn.$gd.$pgd.$ad.$pad;
echo $pges = pruefziffer($ges);
*/

/*
Aufgabe: 
Über ein Formular soll es möglich sein eine Ausweisnummer einzugeben.
Wird das Formular abgeschickt, soll eine Überprüfung der Prüfziffern erfolgen.
Eine passende Meldung soll anschließend ausgegeben werden.
*/
?>

<form action="perso.php" method="post">
	<input type="number" name="pz1" placeholder="Prüfziffer1"><br>
	<input type="number" name="pz2" placeholder="Prüfziffer2"><br>
    <input type="number" name="pz3" placeholder="Prüfziffer3"><br>
    <input type="number" name="pz4" placeholder="Prüfziffer4"><br>
	<input type="submit" name="senden" value="Absenden">
</form>
<?php


if(isset($_POST["senden"])) {
    $sn = substr($_POST["pz1"], 0, -1);
    $gd = substr($_POST["pz2"], 0, -1);
    $ad = substr($_POST["pz3"], 0, -1);
    $ez = substr($_POST["pz4"], 0, -1);

    $lsn = substr($_POST["pz1"], -1);
    $lgd = substr($_POST["pz2"], -1);
    $lad = substr($_POST["pz3"], -1);
    $lez = substr($_POST["pz4"], -1);

    function pruefziffer(string $nr) {
        $summe = 0;
        $gew = [7,3,1];
        for($i=0; $i<strlen($nr); $i++) {
            $summe += $nr[$i] * $gew[$i%3];
        }
        return $pz = $summe%10;
    }
    $psn = pruefziffer($sn);
    $pgd = pruefziffer($gd);
    $pad = pruefziffer($ad);

    $ges = $sn.$psn.$gd.$pgd.$ad.$pad;
    $pges = pruefziffer($ges);

    $pin = $psn.$pgd.$pad.$pges;
    
    if($lsn.$lgd.$lad.$lez == $pin) {
        echo "Eingabe gültig";
    } else {
        echo "Bitte prüfen Sie Ihre Eingabe";
    }
    

}
$perso = '2406055684D<<6810203<0705109<<<<<<<6';