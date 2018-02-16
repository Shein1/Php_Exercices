<form action="" method="post">
     <p>Le titre : <input type="text" name="title" /></p>
     <p>la description : <input type="text" name="describe" /></p>
     <p>résume : <input type="text" name="body" /></p>

     <select name="author">
        <?php
        foreach  ($db->query($sql) as $row) {
                echo "<option value='".$row['id']."'>".$row['surname']."</option>";
         }
        ?>
    </select>

    <p><input type="submit" value="OK" name="submit"></p>
    <a href='/dashboard/V2/lister.traitement.php'>Retourner à la liste</a>
</form>

   

