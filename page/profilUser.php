<?php 
session_start();
if (!isset($_SESSION['uti_pseudo'])) {
	header("Location: index.php?p=connexion");
}

?>

