<?php
session_start();
function db()
{
    $user = 'root';
    $pass = '';
    $your_db = 'db_Article';

    try {
        $db = new PDO('mysql:host=localhost;dbname='.$your_db.';charset=UTF8', $user, $pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch( PDOException $e) {
        // PHP Fatal Error. Second Argument Has To Be An Integer, But PDOException::getCode Returns A
        // String.
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }
    return $db;
}
