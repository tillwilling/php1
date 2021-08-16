<?php 
// Aufgabe: 5 zufällige verschiedene Großbuchstaben anzeigen
session_start();

$abc_arr = range('A','Z');
shuffle($abc_arr);
$captcha = '';
for($i=0; $i<5; $i++) {
	$captcha .= $abc_arr[$i]; // $captcha = $captcha . $abc_arr[$i]
}

$im = imagecreate(200,50);
imagecolorallocate($im,220,220,220);

$font_arr = ['verdanab.ttf', 'tahomabd.ttf', 'comicbd.ttf', 'BRITANIC.TTF', 'arialbd.ttf'];
shuffle($font_arr);
for($i=0, $x=10; $i<5; $i++, $x+=35) {
	$size  = mt_rand(15,30);
	$angle = mt_rand(-30,30); 
	$color = imagecolorallocate($im,mt_rand(0,200),mt_rand(0,200),mt_rand(0,200));
	imagettftext($im,$size,$angle,$x,35, $color, 'fonts/'.$font_arr[$i],$abc_arr[$i]);
	// 5 Ellipsen setzen 
	imagearc($im,mt_rand(0,199),mt_rand(0,49),mt_rand(50,200),mt_rand(50,200),0,0,$color);
	// 5 Linien setzen 
	imageline($im, 0, mt_rand(0,49), 199, mt_rand(0,49), $color);
}
// 1. Aufgabe Alle 5 Buchstaben einzeln anzeigen
// 2. Größe der einzelnen Buchstaben zufällig setzen mit mt_rand(10,30)
// 3. Jeder Buchstabe soll eine zufällige Farbe erhalten
// 4. Jeder Buchstabe soll eine eigene zufällige Fontart (.TTF) erhalten
imagegif($im,'captcha.gif');
?>
<img src="captcha.gif"><br>
<form action="captcha.php" method="post">
<input type="text" name="captcha" size="5" maxlength="5">
<input type="submit" name="senden" value="Check">
</form>
<?php 
if(isset($_POST["senden"])) {
	//echo $_POST["captcha"];
	//echo '<br>';
	//echo $_SESSION["captcha"];
	if(strtoupper($_POST["captcha"]) == $_SESSION["captcha"]) {
		echo "Captcha-Eingabe korrekt";
	} else {
		echo "Captcha-Eingabe falsch";
	}
}
$_SESSION['captcha'] = $captcha;



?>
















