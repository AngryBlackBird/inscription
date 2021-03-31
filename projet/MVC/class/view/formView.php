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

    public function recoveryPass($result)
    {
        include_once "MVC/vues/header-footer/header.php";
        include_once "MVC/vues/passRecuperates1.php";
        include_once "MVC/vues/header-footer/footer.php";
    }
    public function recoveryPass2($result)
    {
        include_once "MVC/vues/header-footer/header.php";
        include_once "MVC/vues/passRecuperates2.php";
        include_once "MVC/vues/header-footer/footer.php";
    }
}
