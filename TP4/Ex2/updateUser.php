<?php
    require_once('database.php');
    
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $date = $_POST['date'];
        $cours = $_POST['cours'];
        $remarques = $_POST['remarques'];

        $query = "UPDATE UTILISATEUR SET Nom='$nom',Prénom='$prenom',Date_de_naissance'$date',Aime_le_cours_web'$cours',Remarques'$remarques'";
        $result = mysqli_query($mysqli, $query);
?>