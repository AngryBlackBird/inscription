<?php       
if($_SERVER['PHP_SELF']=='/inscription/projet/MVC/vues/adminInsert.php') {
    header('Location: /inscription/projet/?page=admin&insert');
}
?>

<section id="insert">
    <span class="btnClose" onclick="masquerVideo()">&times;</span>
    <div class="container ">
        <div class="row row2">
            <div class="CardCss col-12" >
                <span class="text-warning font-weight-bolder"><?php echo $data ?></span>
                <form action="?page=admin&insert=a" method="POST">
                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" class="form-control" id="InputName" aria-describedby="NameHelp" name="name">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" id="InputLastname" aria-describedby="LastnameHelp" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="email" class="form-control" id="InputMail" aria-describedby="MailHelp" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="InputDate" aria-describedby="DateHelp" name="date">
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</section>