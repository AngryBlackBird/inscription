<?php


class formController
{
    private $array;
    
    public function __construct()
    {
        include_once "MVC/class/model/connectModel.php";
    }

    public function subcribe()
    {

        if (isset($_POST["name"]) & isset($_POST["lastname"]) & isset($_POST["pseudo"]) & isset($_POST["mail"]) & isset($_POST["pass1"]) & isset($_POST["pass2"])) {

            if ($_POST["pass1"] != $_POST["pass2"]) {

                $this->array["message"] = 'mot de passe incorect';


                return $this->array;
            }
            $pseudo = $_POST["pseudo"];
            $name = $_POST["name"];
            $lastname = $_POST["lastname"];
            $mail = $_POST["mail"];
            $pass = password_hash($_POST["pass1"], PASSWORD_DEFAULT);
            $role = 1;

            $bdd  = new connectModel;



            $selectPseudo = $bdd->selectPseudo($pseudo);
            $selectMail = $bdd->selectMail($mail);


            if (($selectPseudo == false ||  $selectPseudo[0] != $pseudo) && ($selectMail == false  || $selectMail[0] != $mail)) {

                $inject = $bdd->injectUser($pseudo, $name, $lastname, $mail, $pass, $role);
                // var_dump($bdd);
                $this->array["message"] = 'Compte crée';
                return $this->array;
            } else {
                $this->array["message"] = 'Pseudo ou email déja existant';
                return $this->array;
            }
        }
    }

    public function connect()
    {
        if (isset($_POST["pseudo"]) == true & isset($_POST["pass"]) == true) {

            $pseudo = $_POST["pseudo"];
            $pass = $_POST["pass"];

            $bdd  = new connectModel;
            $pseudo = $_POST["pseudo"];


            $resultPass = $bdd->selectPassFromUser($pseudo);



            if (isset($resultPass[0]) == true) {

                if (password_verify($pass, $resultPass[0])) {

                    $_SESSION["pseudo"] = $pseudo;
                    header("Location: ?page=admin");
                } else {

                    $result["message"] = "Mot de passe incorrect";

                    return $result;
                }
            } else {
                $result["message"] = "Pseudo inexistant, veulliez vous inscrire.";

                return $result;
            }
        }
    }
}
