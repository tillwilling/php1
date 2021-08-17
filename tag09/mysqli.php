<?php

$host       = 'localhost';
$user       = 'root';
$password   = '';
$dbname     = 'world';

// @ unterdrückt eine mögliche Fehlermeldung
$link = @mysqli_connect($host,$user,$password,$dbname);
if(mysqli_connect_error()) {
    die('Fehler ('.mysqli_connect_errno().'): '.mysqli_connect_error());
}
$query = "SELECT name,population FROM city";
// Beliebige SQL-Anweisung zur Datenbank senden
$result = mysqli_query($link,$query);
// mysqli_fetch_assoc() liefert jeweils einen Datensatz in Form eines assoziativen Arrays
while($row = mysqli_fetch_assoc($result)) {
    echo '<pre>';
    print_r($row);
    echo '</pre>';
}
