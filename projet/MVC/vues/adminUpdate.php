<section id="update">
    <span class="btnClose" onclick="masquerVideo()">&times;</span>
    <div class="container ">
        <div class="row row2">
            <div class="CardCss col-12" >
                <form action="?page=admin&update=<?php echo $oneContent["id"] ?>" method="POST">

                    <div class="form-group">
                        <label for="name">Prénom</label>
                        <input type="text" class="form-control" id="InputName" aria-describedby="NameHelp" name="name" value="<?php echo $oneContent["name"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Nom</label>
                        <input type="text" class="form-control" id="InputLastname" aria-describedby="LastnameHelp" name="lastname" value="<?php echo $oneContent["lastname"]  ?>">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="text" class="form-control" id="InputMail" aria-describedby="MailHelp" name="mail" value="<?php echo $oneContent["mail"]  ?>">
                    </div>
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="InputDate" aria-describedby="DateHelp" name="date" value="<?php echo $oneContent["time"]  ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>

                </form>
                <form class="deleteBtnCard" action="?page=admin&delete=<?php echo $oneContent["id"] ?>" method="post">
                    <button type="submit" class="btn btn-danger ml-1 mr-1">Supprimer</button>
                </form>
            </div>
        </div>
    </div>
</section>