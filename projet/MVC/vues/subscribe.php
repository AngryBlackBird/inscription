<main>
    <section>
        <form action="?page=subscribe" method="POST">

            <div class="form-group">
                <label for="">Nom</label>
                <input class="form-control" type="text" placeholder="Dubois" name="lastname">
            </div>
            <div class="form-group">
                <label for="">Prénom</label>
                <input class="form-control" type="text" placeholder="Pierre" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Pseudo</label>
                <input class="form-control" type="text" placeholder="Azerlto" name="pseudo">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Addresse email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email@email.com" name="mail">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="pass2">
                <small id="emailHelp" class="form-text text-muted">Verifiez votre mot de passe</small>
            </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Validez</label>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
        <?php
        if (isset($result["message"]) == true)
            echo "<p>" . $result["message"] . "</p>";
        ?>

    </section>
</main>