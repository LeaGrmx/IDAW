<?php
    require_once("database.php");


    if(isset($_POST['nom'])){
        $personne = $_POST['personne'];
        $nom = personne[0];
        $prenom = personne[1];
        $date = personne[2];
        $cours = personne[3];
        $remarques = personne[4];

        $query = "DELETE FROM UTILISATEUR WHERE (Nom='$nom' AND Prénom='$prenom' AND Date_de_naissance='$date' AND Aime_le_cours_web ='$cours' AND Remarques='$remarques')";
        $result = mysqli_query($mysqli, $query);

        if($result)
            echo json_encode($result);
        
        else{
            echo 'Erreur requête';
        }
    }
?>