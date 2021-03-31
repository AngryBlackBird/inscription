<main>

    <form> <select class="form-control">
            <option>Default select</option>
        </select>
    </form>

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
                    <th scope="row"><?php echo $i+1 ?></th>
                    <td><?php echo $result[$i]["lastname"] ?></td>
                    <td><?php echo $result[$i]["name"] ?></td>
                    <td><?php echo $result[$i]["mail"] ?></td>
                    <td><?php echo $result[$i]["time"] ?></td>
                    <td><input class="btn btn-primary" type="button" value="Input"></td>
                </tr>

            <?php endfor ?>

        </tbody>
    </table>
</main>