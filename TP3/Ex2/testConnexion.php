<!DOCTYPE html>
<html>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'localhost';
            $username = 'root';
            $password = 'root';
            
            //On établit la connexion
            $mysqli = mysqli_connect($servername, $username, $password, 'IDAW');
            
            //On vérifie la connexion
            if(!$mysqli){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie <br>';
            
            $result = mysqli_query($mysqli, "SELECT DATABASE()");
            $row = mysqli_fetch_row($result);
            printf("Default database is %s.\n", $row[0]);

            $requete = mysqli_query($mysqli, "SELECT * FROM User");
            echo '<br>';
            print_r($requete);
            echo'<br><br>';
            echo "<table>
                    <th>ID</th>
                    <th>LOGIN</th>
                    <th>PASSWORD</th>
                    <th>PSEUDO</th>";
            while ($row = $requete->fetch_assoc()) {
                echo "<tr><td>".$row['ID']."</td>
                        <td>".$row['LOGIN']."</td>
                        <td>".$row['PASSWORD']."</td>
                        <td>".$row['PSEUDO']."</td></tr>";
            }
            echo "</table>";
            
        ?>
    </body>
</html>