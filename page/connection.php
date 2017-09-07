<?php 

if (isset($_POST)) {
	if (!empty($_POST['pseudo']) && !empty($_POST['mdp'])) {
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$password = $_POST['mdp'];

			//verif du mot de passe 
		try {

			$bdd = new PDO('mysql:host=localhost;dbname=messagerie;charset=utf8', 'root', 'admin');

		} catch (Exception $e) {
				// en cas d'erreur je l'affiche et je stoppe tout 
			die('Erreur :' .$e->getMessage());
		}

			// Recherche utilisateur
		$sql = sprintf("SELECT * FROM uti_utilisateur WHERE uti_pseudo = '%s';", $pseudo);
		$reponse = $bdd->query($sql);
		$row = $reponse->fetch();
		if (password_verify($password, $row['uti_password'])) {
			session_start();
			$_SESSION['uti_pseudo'] = $pseudo;
			$_SESSION['uti_oid'] = $row['uti_oid'];
			header('Location: ?p=inscription');
			$message = "<strong class='text-success'> Connecté</strong>";
		} else {
			$message = "<strong class='text-danger'>Identifient incorrect</strong>";
		}
	}
}

?>



<div class="container-fluid text-center text-uppercase bg-primary">
	<h1 class="page-header">connexion</h1>
</div>

<div class="container">
	<div class="col-xs-12 text-center">
		<div class="col-xs-4 col-xs-offset-4 radius margin-bot margin-top bg-primary">
			
			<form method="post">
				<div class="form-group">
					<label for="pseudo">Pseudo</label>
					<input name="pseudo" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label for="mdp">Password</label>
					<input name="mdp" type="password" class="form-control">
				</div>
				<div class="form-group">
					<input type="reset" class="btn btn-warning btn-md">
					<input name="valid" type="submit" value="connexion" class="btn btn-success btn-md">
				</div>
			</form>
			
		</div>
	</div>
</div>

<p class="text-center"><?= isset($message) ? $message: "" ?></p>