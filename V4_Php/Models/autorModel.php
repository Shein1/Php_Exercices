<?php
require('./db_connexion.php');

class Auteur {
    static function connexion($login)
    {
        $db = bdd();
        $sql = "SELECT * FROM AUTEUR WHERE login='$login'";
        $result = mysqli_query($db, $sql);
        $row = $result->fetch_assoc();
        return $row;
    }
}
?>