<?php

class contentController
{
    private $array;

    public function __construct()
    {
        include_once "MVC/class/model/contentModel.php";
    }

    public function viewAllContent()
    {
        $content = new contentModel;
        $data = $content->viewAllContentByOrder("name");
        return $data;
    }

    public function deleteContent($id)
    {
        $content = new contentModel;
        $delete = $content->deleteContentByMail($id);
        return $delete;
    }

    public function viewOneContent()
    {

        if (isset($_GET["update"])) {
            $id = $_GET["update"];
            $content = new contentModel;
            $data = $content->viewOneContentById($id);
            return $data;
        }
    }

    public function updateOneContent()
    {
        if (isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["mail"]) && isset($_POST["date"])) {

            $id = $_GET["update"];
            $name = $_POST["name"];
            $lastname = $_POST["lastname"];
            $mail = $_POST["mail"];
            $date = $_POST["date"];

            $update = new contentModel;
            $data = $update->updateOneContent($name, $lastname, $mail, $date, $id);
            return $data;
        }
    }

    public function insertOneContent()
    {
        if (!empty($_POST)) {
            if ((isset($_POST["name"]) && isset($_POST["lastname"]) && isset($_POST["mail"]) && isset($_POST["date"]))
                &
                (!empty($_POST["name"]) && !empty($_POST["lastname"]) && !empty($_POST["mail"]) && !empty($_POST["date"]))) {
                $name = $_POST["name"];
                $lastname = $_POST["lastname"];
                $mail = $_POST["mail"];
                $date = $_POST["date"];
                $update = new contentModel;

                $result = $update->viewOneContentByEmail($mail);
                if ($result == NULL) {
                    $update->insertOneContent($name, $lastname, $mail, $date);
                } else {
                    return "Email existant !";
                }
                return "Ajout bien pris en compte";
            } else {
                return "Erreur dans le formulaire";
            }
        }
    }

    public function insertCSV()
    {

        $brut = fopen($_FILES["userfile"]["tmp_name"], 'r');

        $insert = new contentModel;

        while ($data = fgetcsv($brut, 255, ";")) {

            $insert->insertOneContent($data[0], $data[1], $data[2], $data[3]);
        }


        $msg = "<p> Fichier bien ajouter<p>";
        return $msg;
    }
}
