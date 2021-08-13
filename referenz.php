<?php 

$z1 = 3;
$z2 = &$z1;
$z1 = 8;

echo $z1;
echo '<br>';
echo $z2;



?>