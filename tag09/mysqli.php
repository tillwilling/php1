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