<?php
    session_start();


    if(isset($_SESSION['user']))
    {
        echo 'Bonjour !' . $_SESSION['user'];
    }else
    {
        if(isset($_POST['submit'])){
            $mail = $_POST['email'];
            $password = $_POST['pwd'];

            $user = 'root';
            $pass = '';
            $your_db = 'db_Article';

            try {
                $db = new PDO('mysql:host=localhost;dbname=' . $your_db . ';charset=UTF8', $user, $pass);
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            } catch (PDOException $e) {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
            }


            $statement=$db->prepare("SELECT surname , name FROM auteur  where  email ='".$mail."' AND password='".$password."' ");
            $statement->execute();
            $results=$statement->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['user']= $results[0]['surname'] . ' ' . $results[0]['name'];
            var_dump($_SESSION['user']);

            header('Location: /dashboard/V2/lister.traitement.php');

        }
        include('./se-connecter.php');
    }