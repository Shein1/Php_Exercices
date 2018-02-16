<?php
    session_start();


    if(isset($_SESSION['user']))
    {
        echo '<h1>Bonjour ! ' . $_SESSION['user'];
    }else
    {
        include('./se-connecter.bdd.php');
        connect();
        include('./se-connecter.php');
    }