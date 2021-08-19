<?php 


$passwort = 'qwertz';
$salt     = '$2y$10$ABCDEFGHIJKLMNOPQRSTUV';

echo $hashdb = crypt($passwort,$salt); // $2y$10$ABCDEFGHIJKLMNOPQRSTUOPmE9e7xdrYuVqq0LU1NLqqVLP9gSorO
echo '<hr>';

$passwort2 = 'qwertz';
echo crypt($passwort2,$hashdb);