<?php
require('./Models/auteurModel.php');
function connexionAuteur()
{
    if (isset($_POST['submit'])) {
        $login = $_POST["login"];
        $mdp = $_POST["paswword"];
        $row = Auteur::connexion($login);

        $name = $row["name"];
        $surname = $row["surname"];
        $password = $row["mdp"];
        if ($mdp == $password) {
            $_SESSION['login'] = $row["login"];
            $_SESSION['id'] = $row["id_auteur"];
        }
    }
    include('./Views/connexion_display.php');
}
function deconnexion()
{
    session_start();
    session_destroy();
    include('./Views/deconnexion_display.php');
}
?>