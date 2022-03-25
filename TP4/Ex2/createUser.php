<?php
    
    require_once("database.php");
    
    console.log($_POST['nom']);
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $cours = $_POST['cours'];
        $remarques = $_POST['remarques'];

        $query = "INSERT INTO UTILISATEUR (Nom,Prénom,Date_de_naissance,Aime_le_cours_web,Remarques) VALUES ('$nom', '$prenom', '$date', '$cours', '$remarques')";
        $result = mysqli_query($mysqli, $query);

        if($result)
            echo json_encode($result);
        
        else{
            echo 'Erreur requête';
        }
    }
?>