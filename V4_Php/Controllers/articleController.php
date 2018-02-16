<?php
require('./Models/articleModel.php');
if (empty($_SESSION['id'])) {
    header("Location: index.php");
    die();
}
function ()
{
    if (isset($_POST['submit']) && !empty($_POST['titre']) && !empty($_POST['contenu'])) {
        $article = new Article($_POST['titre'],$_POST['contenu'],$_SESSION['id']);
        $bool = $article->ajouter();
    }
    include('./Views/add_display.php');
}
function lister()
{
    $result = Article::getList();
    include('./Views/lister_display.php');
}
function listerJson()
{
    $result = Article::getList();
    while ($row = $result->fetch_assoc()) {
        $Array[] = $row;
    }
    include('./Views/lister-json_display.php');
}
