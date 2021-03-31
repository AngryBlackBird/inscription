<section>
    <div class="container ">
        <div class="row row2">
            <div>
                <h1>Demander une réinitialisation de mot de passe</h1>
                <?php echo $result; ?>
                <form action="?page=recoveryPass" method="POST" class="col-12 ">
                    <div class="form-group">
                        <label for="InputMail">Votre adresse courriel : </label>
                        <input type="email" class="form-control" id="InputMail" aria-describedby="MailHelp" name="mail" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Recuper son compte</button>
                </form>
            </div>
        </div>
    </div>

</section>