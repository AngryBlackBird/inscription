<?php       
if($_SERVER['PHP_SELF']=='/inscription/projet/MVC/vues/connect.php') {
    header('Location: /inscription/projet/?page=connect');
}
?>

<section>
	<div class="container ">
		<div class="row row2">
			<div class="col-12 ">
				<form action="?page=connect" method="POST">
					<div class="form-group">
						<label for="InputPseudo">Pseudo</label>
						<input type="text" class="form-control" id="InputPseudo" aria-describedby="PseudoHelp" name="pseudo" required>
					</div>
					<div class="form-group">
						<label for="InputPass">Mot de passe</label>
						<input type="password" class="form-control" id="InputPass" name="pass" required>
					</div>


					<button type="submit" class="btn btn-primary">Se connecter</button>

					<?php

					if (isset($result["message"]) == true)

						echo "<p>" . $result["message"] . "</p>";
					?>
				</form>

				<p>Mot de passe oublier ? <a style="color:red!important" href="?page=recoveryPass">Réinitialiser mot de passe. </a></p>
			</div>
		</div>
	</div>
</section>