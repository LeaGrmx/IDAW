<?php
    require_once("database.php");


    if(isset($_POST['nom'])){
        $personne = $_POST['personne'];
        $nom = $personne['nom'];
        $prenom = $personne['prenom'];
        $date = $personne['date'];
        $cours = $personne['cours'];
        $remarques = $personne['remarques'];

        $query = "DELETE FROM UTILISATEUR WHERE (Nom='$nom' AND Prénom='$prenom' AND Date_de_naissance='$date')";
        $result = mysqli_query($mysqli, $query);

        if($result)
            echo json_encode($result);
        
        else{
            echo 'Erreur requête';
        }
    }
?>