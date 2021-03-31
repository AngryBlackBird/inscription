    <section>
        <div class="container ">
            <div class="row row2 ">
                <form action="?page=subscribe" method="POST" class="col-12 ">
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" placeholder="Dubois" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="">Prénom</label>
                        <input class="form-control" type="text" placeholder="Pierre" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Pseudo</label>
                        <input class="form-control" type="text" placeholder="Azerlto" name="pseudo" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Addresse email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com" name="mail" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="pass2" required>
                        <small id="emailHelp" class="form-text text-muted">Verifiez votre mot de passe</small>
                    </div>
                    <button type="submit" class="btn btn-primary">S'inscrire</button>
                    <?php
                    if (isset($result["message"]) == true)
                        echo "<p>" . $result["message"] . "</p>";
                    ?>
                </form>

            </div>
        </div>

    </section>