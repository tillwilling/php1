<a href="navigation.php?page=startseite">Startseite</a><br>
<a href="navigation.php?page=kontakt">Kontakt</a><br>
<a href="navigation.php?page=impressum">Impressum</a><br>
<?php 
if(isset($_GET['page'])) {
	switch($_GET['page']) {
		case 'kontakt':
			echo '<h2>Kontakt</h2>';
			break;
		case 'impressum':
			echo '<h2>Impressum</h2>';
			break;
		default:
			echo '<h2>Startseite</h2>';
			break;
	}
}
?>