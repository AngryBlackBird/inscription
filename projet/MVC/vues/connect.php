<main>
	<section>
		<form action="?page=connect" method="POST">
			<div class="form-group">
				<label for="InputPseudo">Pseudo</label>
				<input type="text" class="form-control" id="InputPseudo" aria-describedby="PseudoHelp" name="pseudo">
			</div>
			<div class="form-group">
				<label for="InputPass">Mot de passe</label>
				<input type="password" class="form-control" id="InputPass" name="pass">
			</div>

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<?php
		
		if (isset($result["message"]) == true)

			echo "<p>" . $result["message"] . "</p>";
		?>
	</section>
</main>