<!DOCTYPE html>
<html>
    <body>
        <h1>Bases de données MySQL</h1>  
        <?php
            $servername = 'eden.imt-nord-europe.fr/';
            $username = 'lea.grumiaux';
            $password = 'LeaGrmx59**';
            
            //On établit la connexion
            $conn = mysqli_connect($servername, $username, $password);
            
            //On vérifie la connexion
            if(!$conn){
                die('Erreur : ' .mysqli_connect_error());
            }
            echo 'Connexion réussie';
        ?>
    </body>
</html>