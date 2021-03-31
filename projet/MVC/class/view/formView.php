<?php

class formView
{
    public function connect($result)
    {
        include_once "MVC/vues/header-footer/header.php";
        include_once "MVC/vues/connect.php";
        include_once "MVC/vues/header-footer/footer.php";
    }

    public function subscribe($result)
    {
        include_once "MVC/vues/header-footer/header.php";
        include_once "MVC/vues/subscribe.php";
        include_once "MVC/vues/header-footer/footer.php";
    }
}
