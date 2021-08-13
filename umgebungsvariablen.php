<?php 

// Browserinformation
echo $_SERVER["HTTP_USER_AGENT"];
echo '<hr>';

echo $_SERVER["REMOTE_ADDR"];
echo '<hr>';

echo '<pre>';
print_r($_SERVER);
echo '</pre>';
