<?php
    session_start();

    $user = 'root';
    $pass = '';
    $your_db = 'db_Article';

    try {
        $db = new PDO('mysql:host=localhost;dbname=' . $your_db . ';charset=UTF8', $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

    $sql =  'SELECT ar.titre, ar.description, ar.corps , au.surname , au.name FROM articles ar LEFT JOIN auteur au on au.id = ar.id_auteur';


    if(isset($_SESSION['user'])) {
        include('./lister.php');

    }else{
        echo "Veuillez vous connecter!";
        echo " <a href='/dashboard/V2/se-connecter.traitement.php'>Se connecter</a>";
    }
    ?>