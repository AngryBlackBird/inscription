<section>
    <div class="container ">
        <div class="row row2">
            <div>
                <h1>Réinitialisation de mot de passe</h1>
                <?php echo $result; ?>
                <form action="?page=recoveryPass2&token=<?php echo $_GET['token']  ?>" method="POST" class="col-12 ">
                    <div class="form-group">
                        <label for="InputPass">Mot de passe </label>
                        <input type="password" class="form-control" id="InputPass" aria-describedby="PassHelp" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="InputPass">Verifier votre mot de passe </label>
                        <input type="password" class="form-control" id="InputPass" aria-describedby="PassHelp" name="password_confirm" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Réinitialiser le mot de passe</button>
                </form>
            </div>
        </div>
    </div>

</section>