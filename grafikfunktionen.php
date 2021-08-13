<?php 

$im = imagecreate(800,600);
// 1. Aufruf der Funktion setzt die Hintergrundfarbe
imagecolorallocate($im,220,220,220);
// Farbpalette
$black = imagecolorallocate($im,0,0,0);
$red   = imagecolorallocate($im,255,0,0);
// Linienbreite festlegen
imagesetthickness($im,3);
// Linie zeichnen
imageline($im,0,0,800,600,$black);
// Kreis/Ellipse/Bogen zeichnen
imagearc($im,400,300,200,200,0,0,$black);
// Fläche füllen
imagefill($im,410,300,$red);
// Bild als PNG-Datei speichern
imagepng($im,'bild.png');
?>
<img src="bild.png">