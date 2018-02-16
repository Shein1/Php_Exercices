 <h1>Liste des articles</h1>
 <p>Bienvenue sur la liste des articles. Bonne recherche!</p>

<?php
    echo 'Bonjour ! ' . $_SESSION['user'];
    echo "<table >
		<tr>
		    <th>Titre</th>
		    <th>Description</th> 
		    <th>Corps</th>
		    <th>Nom auteur</th>
		    <th>Prénom auteur</th>
		</tr>";

    foreach ($data as $row) {
        echo "<tr>";

        echo "<td>" . $row['titre'] . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['corps'] . "</td>";
        echo "<td>" . $row['surname'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";

        echo "</tr>";

    }
    echo "</table>";


    echo " <a href='/dashboard/V3/se-deconnecter.traitement.php'>Se deconnecter</a>";
    echo " <a href='/dashboard/V3/ajouter.traitement.php'>Ajouter un article</a>";

	

 
