<?
 session_start();
 if(isset($_SESSION['user']))
 {
 	echo 'Bonjour ! ' . $_SESSION['user'];
?>
 <h1>Liste des articles</h1>
 <p>Bienvenue sur la liste des articles . Bonne recherche!</p>

<?php
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
?>

<?
    $sql =  'SELECT ar.titre, ar.description, ar.corps , au.surname , au.name FROM articles ar LEFT JOIN auteur au on au.id = ar.id_auteur';
    
    echo "<table >
		<tr>
		    <th>Titre</th>
		    <th>Description</th> 
		    <th>corps</th>
		    <th>Nom auteur</th>
		    <th>Prénom auteur</th>
		</tr>";
  		
  	foreach  ($db->query($sql) as $row) { 
		echo "<tr>";

	        echo "<td>".$row['titre']."</td>" ;
	        echo  "<td>".$row['description']."</td>"  ;
	        echo  "<td>".$row['corps']."</td>"  ;
	        echo  "<td>".$row['surname']."</td>"  ;
	         echo  "<td>".$row['name']."</td>"  ;

        echo "</tr>";

         } 
        echo "</table>";


		echo " <a href='/dashboard/V1/se-deconnecter.php'>Se deconnecter</a>";
        echo " <a href='/dashboard/V1/ajouter.php'>Ajouter un article</a>";
    
	     }else{
	     	echo "Veuillez vous connecter!";
	     	echo " <a href='/dashboard/V1/se-connecter.php'>Se connecter</a>";
	     }
	

 
