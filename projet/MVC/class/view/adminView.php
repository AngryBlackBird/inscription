<?php

class adminView
{
    public function adminAllView($result)
    {

        include_once "MVC/vues/admin.php";
    }

    public function clientUpdate($oneContent)
    {

        include_once "MVC/vues/adminUpdate.php";
?>
        <script>
            let divid = document.querySelector("#update");
            afficherVideo();

            function afficherVideo() { // on affiche la pop up trailer 
                divid.style.display = "block"
            }

            function masquerVideo() { // on cache la pop up trailer 
                divid.style.display = "none"
            }
        </script>
    <?php

    }
    public function clientInsert()
    {

        include_once "MVC/vues/adminInsert.php";
    ?>
        <script>
            let divid = document.querySelector("#insert");
            afficherVideo();

            function afficherVideo() { // on affiche la pop up trailer 
                divid.style.display = "block"
            }

            function masquerVideo() { // on cache la pop up trailer 
                divid.style.display = "none"
            }
        </script>
<?php

    }
    public function adminHeader()
    {
        include_once "MVC/vues/header-footer/header.php";
    }
    public function adminFooter()
    {
        include_once "MVC/vues/header-footer/footer.php";
    }
}
