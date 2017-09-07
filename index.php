<?php 

if (isset($_GET['p'])) {
	$p = $_GET['p'];
}
else {
	$p = 'home';
}

ob_start();

if ($p === 'home') {
	include('page/accueil.php');
}

if ($p === 'connexion') {
	include('page/connection.php');
}

if ($p === 'chat') {
	include('page/chat.php');
}

if ($p === 'inscription') {
	include('page/inscription.php');
}

if ($p === 'deconnecter') {
	include('page/deco.php');
}

$content = ob_get_clean();
include('page/templates/default.php');

?>