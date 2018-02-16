<?php
$action=$_GET["action"];
switch ($action) {
    case "":
        require('./Controllers/autorController.php');
        connexionAuteur();
        break;
    case "liste":
        require('./Controllers/articleController.php');
        lister();
        break;
    case "ajouter":
        require('./Controllers/articleController.php');
        add();
        break;
    case "deconnecter":
        require('./Controllers/autorController.php');
        deconnexion();
        break;
    case "json":
        require('./Controllers/articleController.php');
        listerJson();
        break;
}