<?php
/* Die im folgenden Code genutzen Salts sind nur Beispiele und sollten nicht
   in dieser Form benutzt werden. Stattdessen muss für jedes Password ein neuer,
   korrekt formatierter Salt generiert werden.
*/
echo 'Standard DES: ',
    crypt('rasmuslerdorf', 'rl'),
    "<br>";
echo 'Extended DES: ',
    crypt('rasmuslerdorf', '_J9..rasm'),
    "<br>";
echo 'MD5:          ',
    crypt('rasmuslerdorf', '$1$rasmusle$'),
    "<br>";
echo 'Blowfish:     ',
    crypt('rasmuslerdorf', '$2a$07$usesomesillystringforsalt$'),
    "<br>";
echo 'SHA-256:      ',
    crypt('rasmuslerdorf', '$5$rounds=5000$usesomesillystringforsalt$'),
    "<br>";
echo 'SHA-512:      ',
    crypt('rasmuslerdorf', '$6$rounds=5000$usesomesillystringforsalt$'),
    "<br>";
?> 