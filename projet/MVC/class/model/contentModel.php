<?php

class contentModel
{

    private $bdd;

    public function __construct()
    {
        include 'secure/log.php';

        try {
            $this->bdd = new PDO('mysql:host=' . $servername . ';dbname=' . $dbname . ';charset=utf8', $username, $password);
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }

    public function viewAllContentByOrder($order)
    {
        $alldata  =  $this->bdd->prepare("SELECT name, lastname, mail, time FROM client ORDER BY :A");
        $alldata->bindParam(":A", $order);

        $alldata->execute();
        $reponse = $alldata->fetchAll();
       

        return $reponse;
    }
}
