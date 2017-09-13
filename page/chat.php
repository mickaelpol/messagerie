<?php 

session_start();
if (!isset($_SESSION['uti_pseudo'])) {
	header("Location: index.php?p=connexion");
}

try {
	
	$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'admin');

} catch (Exception $e) {
	
	die('Erreur : ' . $e->getMessage());

}

$sql = sprintf("SELECT * FROM uti_utilisateur");

$reponse = $bdd->query($sql);

$donnees = $reponse->fetch();

$_SESSION['uti_email'] = $donnees['uti_email'];


?>


<div class="container-fluid bg-primary text-center text-uppercase">
	<h1 class="page-header">messagerie</h1>
</div>
<div class="container margin-top margin-bot">
	<div class="col-xs-4 col-xs-offset-4 bg-info radius">
		<form action="" method="post">

			<!-- expediteur -->
			<div class="form-group text-center">
				<label for="expediteur">Expediteur</label>
				<input name="expediteur" class="form-control" value="<?= $donnees['uti_email'] ?>" type="text" id="expediteur">
			</div>
			
			<!-- destinataire -->
			<div class="form-group text-center">
				<label for="destinataire">Destinataire</label>
				<input name="destinataire" class="form-control" type="" id="destinataire">	
			</div>

			<!-- objet -->
			<div class="form-group text-center">
				<label for="objet">Objet</label>
				<input name="objet" class="form-control" type="text" id="objet">	
			</div>

			<!-- texte -->
			<div class="form-group text-center">
				<label for="sujet">Sujet</label>
				<textarea name="sujet" class="form-control" rows="5" type="text" id="sujet"></textarea>
			</div>
			
			<div class="form-group pull-right">
				<input type="reset" class="btn btn-md btn-warning">
				<input name="valid" type="submit" class="btn btn-md btn-success">
			</div>

		</form>
	</div>
</div>