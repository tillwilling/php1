<?php 

$handle = fopen("testdatei.txt",'r');
while($zeile = fgets($handle)) {
	echo $zeile.'<br>';
}
fclose($handle);

