<?php
    session_start();

    if(isset($_SESSION['user'])) {
        include('./lister.bdd.php');
        $data = listerArticles();
        include('./lister.php');
    } else{
        echo "<h1>Veuillez vous connecter</h1>";
        echo "<a href='/dashboard/Blog/se-connecter.traitement.php'>Se connecter</a>";
    }