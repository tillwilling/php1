<?php 

// Browserinformation
echo $_SERVER["HTTP_USER_AGENT"];
echo '<hr>';

// Ip-Adresse des Besuchers
echo $_SERVER["REMOTE_ADDR"];
echo '<hr>';

// Woher kommt der Besucher?
echo $_SERVER["HTTP_REFERER"];
echo '<hr>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';