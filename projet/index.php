<?php
session_start();

include "MVC/class/rooter/root.php";

$root = new root;

if (isset($_GET["page"])) {

    if ($_GET["page"] == "connect") {
        $root->connect();
    } elseif ($_GET["page"] == "accueil") {
        $root->accueil();
    } elseif ($_GET["page"] == "subscribe") {
        $root->subscribe();
    } elseif ($_GET["page"] == "admin") {
        $root->admin();
    } elseif ($_GET["page"] == "recoveryPass") {
        $root->recoveryPass();
    } elseif ($_GET["page"] == "recoveryPass2") {
        $root->recoveryPass2();
    }
} elseif (empty($_GET)) {
    $root->accueil();
}
