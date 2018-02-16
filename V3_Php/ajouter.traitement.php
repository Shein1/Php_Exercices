<?php
include('./ajouter.bdd.php');

$data = addArticle();

if (isset($_POST['submit'])) {
    $statement = $db->prepare("INSERT INTO articles (`titre`, `description`, `corps`, `id_auteur`) VALUES ('" . $_POST['title'] . "','" . $_POST['describe'] . "','" . $_POST['body'] . "','" . $_POST['author'] . "')");
    $statement->execute();
}

include('./ajouter.php');
