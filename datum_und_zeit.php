<?php 

// Aktuelles Datum
echo date('d.m.Y');
echo '<hr>';

// Aktuelle Uhrzeit
echo date('H:i');
echo '<hr>';

// Aktueller Zeitstempel - Die Sekunden seit dem 01.01.1970
echo time();
echo '<hr>';

// Wie viele Stunden dauert es noch bis Heiligabend 18:00 Uhr im Jahr 2021?
$sekunden = mktime(18,0,0,12,24,2021) - time();
echo $stunden  = ceil($sekunden/60/60);
echo '<hr>';

// Wie viele Tage alt ist bereits der Erfinder von PHP? 
// Rasmus Lerdorf *22.11.1968
$sekunden = time() - mktime(0,0,0,11,22,1968);
echo $tage = floor($sekunden/60/60/24);
echo '<hr>';

// In wie vielen Minuten startet die Klausur?
// 01.09.2021 um 09:00 Uhr

$sekunden = mktime(9,0,0,9,1,2021) - time();
echo $minuten  = ceil($sekunden/60);
echo '<hr>';

// Aktueller Wochentag  in deutsch
$wtag = ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'];
echo $wtag[date('w')];
echo '<hr>';

// Aktueller Monatsname in deutsch
$monat = ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'];
echo $monat[date ('n')-1];
echo '<hr>';

setlocale (LC_TIME, 'de_DE@euro', 'de_DE', 'de', 'ge', 'deu_deu');
echo strftime('%A');
echo '<hr>';


// Aufgabe: Erzeugen Sie mit Hilfe von strftime() folgenden Satz (mit aktuellen Daten):
// Heute ist Dienstag, der 10. August 2021 und es ist 12:46 Uhr
echo strftime('Heute ist %A, der %d. %B %Y und es ist %R Uhr');

