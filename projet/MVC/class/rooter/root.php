<?php

class root
{
    public function __construct()
    {
        include_once "MVC/class/controller/formController.php";
        include_once "MVC/class/controller/contentController.php";
        

        include_once "MVC/class/view/formView.php";
        include_once "MVC/class/view/accueilView.php";
        include_once "MVC/class/view/adminView.php";
    }

    public function connect()
    {
        $controller = new formController;
        $result = $controller->connect();


        $view = new formView();
        $view->connect($result);
    }


    public function accueil()
    {

        $view = new accueilView();
        $view->accueil();
    }


    public function subscribe()
    {
        $controller = new formController;
        $result = $controller->subcribe();


        $view = new formView();
        $view->subscribe($result);
    }



    public function admin()
    {
        if (isset($_SESSION["pseudo"])) {


            $controller = new contentController;
            $form = new formController;
            $view = new adminView();
            $view->adminHeader();

            if (isset($_GET["delete"])) {
                $delete = $controller->deleteContent($_GET["delete"]);
            }
            if (isset($_GET["update"])) {
                $update = $controller->updateOneContent();
                $oneContent = $controller->viewOneContent();
                $view->clientUpdate($oneContent);
            }
            if (isset($_GET["insertAdmin"])) {
                $insertOneContent = $form->subcribe();
                $view->adminInsert();
            }

            if (isset($_GET["insert"])) {
                $result = $controller->insertOneContent();
                $view->clientInsert($result);
            }
            if (isset($_GET["insertMultiple"])) {
                $insertMultipleContent = $controller->insertCSV();
            }



            $result = $controller->viewAllContent();
            $view->adminAllView($result);
            $view->adminFooter();
        } else {
            header("Location: ?page=connect");
        }
    }

    public function recoveryPass()
    {
        $controller = new formController;
        $result = $controller->recoveryPass();


        $view = new formView();
        $view->recoveryPass($result);
    }
    public function recoveryPass2()
    {
        $controller = new formController;
        $result = $controller->recoveryPass2();


        $view = new formView();
        $view->recoveryPass2($result);
    }
}
