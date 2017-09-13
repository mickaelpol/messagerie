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
			header('refresh:5;url=index.php?p=chat');
			$message = "<div class='container-fluid text-center'" . "<p><span class='text-success text-uppercase'> Connection </span></p>" . "<br>" . "<div class='loader center-block margin-bot'></div>" . "</div>";
		} else {
			$message = "<strong class='text-danger'>Identifient incorrect</strong>";
		}
	}
}

?>



		<p class="text-center"><?= isset($message) ? $message: "" ?><?= isset($loader) ? $loader: "" ?></p>
			
			<div id="login">

				<!-- formulaire de connection -->
				<form id="loginform" name="loginform" action="" method="post">

					<p> <!-- pseudo -->
						<label for="pseudo">Pseudo<br>
							<input id="user_login" type="text" class="input" value="" size="20" tabindex="10"/></label>
						</p>

						<p> <!-- mot de passe -->
							<label for="password">Mot de passe<br>
								<input id="user_pass" type="password" class="input" value="" size="20" tabindex="20"/></label>
							</p>

							<p><!-- bouton de validation -->
								<input type="submit" value="se connecter" class="button-primary"/>
							</p>

						</form>



					</div>