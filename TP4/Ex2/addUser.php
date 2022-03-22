<?php
    header("Content-type: application/json");
    $personnes = 
    array(
            array
            (
            "name" => "Jack",
            "title" => "Magager",
            "salary" => "$60,000",
            ),
 
            array
            (
            "name" => "Joe",
            "title" => "Developer",
            "salary" => "$50,000",
            ),
 
            array
            (
            "name" => "Susan",
            "title" => "Marketer",
            "salary" => "$50,000",
            )
        );
 
    echo json_encode($personnes);
?>

   
<?php
    // on simule une base de données
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    
    //On établit la connexion
    $mysqli = mysqli_connect($servername, $username, $password, 'IDAW');
    
    //On vérifie la connexion
    if(!$mysqli){
        die('Erreur : ' .mysqli_connect_error());
    }

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['birth']) && isset($_POST['cours']) && isset($_POST['remarques'])){
        $nom = $connection->real_escape_string($_POST['nom']);
        $prenom = $connection->real_escape_string($_POST['prenom']);
        $birth = $connection->real_escape_string($_POST['birth']);
        $cours = $connection->real_escape_string($_POST['cours']);
        $remarques = $connection->real_escape_string($_POST['remarques']);

        $query = "INSERT INTO UTILISATEUR (Nom, Prénom, Date_de_naissance, Aime_le_cours, Remarques) VALUES ('$nom', '$prenom', '$birth', $cours, '$remarques')";
        $result = $connection->query($query);

        if($result)
            echo $connection->insert_id;
    }
?>