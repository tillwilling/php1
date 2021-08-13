<?php 
// Aufgabe 1  
// a) Legen Sie drei Variablen an mit den Wörtern "Wochenende", "ist" und "Bald".
//    Geben Sie mit den Variablen den Satz "Bald ist Wochenende." aus.
$wort1 = "Wochenende";
$wort2 = "ist";
$wort3 = "Bald";
echo "$wort3 $wort2 $wort1<br>";
echo '<hr>';

// b) Erstellen Sie eine Zeichenkette mit folgendem HTML-Code und geben Sie sie aus: 
//    <h1 id="test">Hallo</h1>
echo strip_tags ('<h1 id="test">Hallo</h1>');
echo '<hr>';

// c) Welche der nachfolgendenen Variablennamen sind gültig?
//   $test, $Test, $1, $test1, $1test, mein_test, $mein_test
echo '$test, $Test, $test1, $mein_test<br>';
echo '<hr>';

// Aufgabe 2   
// Erzeugen Sie mit Hilfe der for-Schleife folgende Zahlenreihen:
// a) 100,90,80,70,60,50,40,30,20,10
// b) 3,6,9,12,15,18,21,24,27,30,33
// c) 10,100,1000,10000,100000,1000000
// d) 8,4,2,1,8,4,2,1,8,4,2,1,8,4,2,1,8,4,2,1
for ($i=100 ; $i>=10 ; $i-=10) {
    echo $i.' ';
}
echo '<hr>';
for ($i=3 ; $i<=33 ; $i+=3) {
    echo $i.' ';
}
echo '<hr>';
for ($i=10 ; $i<=1000000 ; $i*=10) {
    echo $i.' ';
}
echo '<hr>';
for ($x=0 ; $x<=4 ; $x++) {
    for ($i=8 ; $i>=1 ; $i/=2) {
        echo $i.' ';
    }
}
echo '<hr>';


// Aufgabe 3:
// Legen Sie eine Variable mit dem Namen $zahl an und weisen dort einen
// beliebigen positiven Integerwert (=Ganzzahl) zu.
// Befindet sich in der Variablen ein Wert unter 50 soll die Ausgabe erscheinen:
// "Zahlenwert X ist unter Fünfzig"
// Ansonsten die Meldung:
// "Zahlenwert X ist zu groß"
// X soll bei der Ausgabe durch den Zahlenwert von $zahl ersetzt werden 
$zahl = 52;
if($zahl <=50) {
    echo 'Zahlenwert $zahl ist unter Fünfzig';
} else {
    echo "Zahlenwert $zahl ist zu groß";
}

// Aufgabe 4:
// Suchen Sie im PHP-Handbuch nach einer passenden String-Funktionen:
// Zeigen Sie aus der Zeichenkette "Ich bin eine Zeichenkette" nur das Wort "eine" an
$str = "Ich bin eine Zeichenkette";
echo substr($str, 8, 4);

?>