<?php
    require_once("database.php");


    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $cours = $_POST['cours'];
        $remarques = $_POST['remarques'];

        $query = "DELETE FROM UTILISATEUR WHERE (Nom='$nom' AND Prénom='$prenom' AND Date_de_naissance='$date')";
        $result = mysqli_query($mysqli, $query);
         
        $res['req'] = $query;
        $res['status'] = 'Erreur requête';
        if($result)
            $res['status'] = 'req OK';    
       
        //print_r($res);
        echo json_encode($res);
    }
?>