<?php 

$im = imagecreate(800,600);
// 1. Aufruf der Funktion setzt die Hintergrundfarbe
imagecolorallocate($im,255,255,255);
// Farbpalette
$black = imagecolorallocate($im,0,0,0);
$yellow   = imagecolorallocate($im,255,255,0);
$red = imagecolorallocate($im,255,0,0);
// Linienbreite festlegen
imagesetthickness($im,4);
//Haare
imageline($im,400,50,400,100,$black);
imageline($im,350,50,380,100,$black);
imageline($im,450,50,420,100,$black);
//Nase
imageline($im,400,250,400,305,$black);
// Kopf
imagearc($im,400,300,400,400,0,0,$black);
// Augen
imagearc($im,330,215,50,50,0,0,$black);
imagearc($im,470,215,50,50,0,0,$black);
imagearc($im,335,220,20,20,0,0,$black);
imagearc($im,465,220,20,20,0,0,$black);
//Mund
imagearc($im, 400, 330, 150, 150, 25, 155, $red);
// Fläche füllen
imagefill($im,410,300,$yellow);
imagefill($im,335,215,$black);
imagefill($im,465,215,$black);
// Bild als PNG-Datei speichern
imagepng($im,'smiley.png');
?>
<img src="smiley.png">