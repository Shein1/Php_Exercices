<?php
require('./db_connexion.php');
class Article {
    private $titre;
    private $description;
    private $id_auteur;
    private $today;
    function __construct($titre,$description,$id_auteur) {
        $this->titre = $titre;
        $this->description = $description;
        $this->id_auteur = $id_auteur;
        $this->today = date("Ymd");
    }
    function ajouter()
    {
        $db = bdd();
        $sql = "INSERT INTO ARTICLE (titre, description, dateArticle, id_auteur)
        VALUES ( '$this->titre','$this->description','$this->today','$this->id_auteur')";
        return $db->query($sql);
    }
    static function getList()
    {
        $db = bdd();
        $sql = "SELECT titre,description,dateArticle,name,surname,AUTEUR.id_auteur FROM ARTICLE,AUTEUR WHERE ARTICLE.id_auteur=AUTEUR.id_auteur ORDER BY dateArticle DESC";
        $result = mysqli_query($db, $sql);
        return $result;
    }
}

