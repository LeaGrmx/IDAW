<?php
    session_start();
    session_unset();
    session_destroy();
    echo "Vous avez été déconnecté";
    echo "<nav class=\"menu\"><ul><li><a href=\"login.php\">Retour à la page d'accueil</a></li></ul></nav>";
    //header('Location: index.php'); (redirection)
?>