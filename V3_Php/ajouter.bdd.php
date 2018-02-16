<?php

function addArticle()
{
    $user = 'root';
    $pass = '';
    $your_db = 'db_Article';

    try {
        $db = new PDO('mysql:host=localhost;dbname=' . $your_db . ';charset=UTF8', $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

    $sql = "SELECT CONCAT(name, ' ' ,surname) as surname, id FROM auteur";
    $data = $db->query($sql);

    return $data;
}