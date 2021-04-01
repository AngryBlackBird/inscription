<section>

    <div class="container-fluid">
        <div class="row mt-2 mb-2">
            <form action="?page=admin&insert" method="post" class="col-2">
                <button type="submit" class="btn btn-primary  ml-1 mr-1">Ajouter un client</button>
            </form>
            <form enctype="multipart/form-data" action="?page=admin&insertMultiple" method="post" class="col-5" style="display:flex; align-items: center;">
                <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                <input name="userfile" type="file" />
                 <button type="submit" class="btn btn-primary  ml-1 mr-1">Ajouter plusieurs clients (csv avec point virgule)</button>

            </form>
            <div class="col-2"></div>

            <form class="col-3">
                <select class="form-control">
                    <option value="" disabled selected>Filtre</option>
                    <option value="Noma-z">Nom a-z </option>
                    <option value="Nomz-a">Nom z-a </option>
                    <option value="Prénoma-z">Prénom a-z </option>
                    <option value="Prénomz-a">Prénom z-a </option>
                    <option value="Emaila-z">Email a-z </option>
                    <option value="Emailz-a">Email z-a </option>
                    <option value="Datez-a">Date z-a </option>
                    <option value="Datez-a ">Date z-a </option>
                </select>
            </form>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>

            </tr>
        </thead>
        <tbody>
            <?php


            $count = count($result);

            for ($i = 0; $i < $count; $i++) : ?>

                <tr>
                    <th scope="row"><?php echo $i + 1 ?></th>
                    <td><?php echo $result[$i]["lastname"] ?></td>
                    <td><?php echo $result[$i]["name"] ?></td>
                    <td><?php echo $result[$i]["mail"] ?></td>
                    <td><?php echo $result[$i]["time"] ?></td>

                    <td style="display:flex;">
                        <form action="?page=admin&delete=<?php echo $result[$i]["id"] ?>" method="post">

                            <button type="submit" class="btn btn-danger ml-1 mr-1">Supprimer</button>
                        </form>
                        <form action="?page=admin&update=<?php echo $result[$i]["id"] ?>" method="post">

                            <button type="submit" class="btn btn-primary  ml-1 mr-1">Modifier</button>
                        </form>
                    </td>

                </tr>

            <?php endfor
            ?>

        </tbody>
    </table>
</section>