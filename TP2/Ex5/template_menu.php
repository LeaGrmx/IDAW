<!DOCTYPE html>

<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">CV</a></li>
        <li><a href="motivation.php">Lettre de motivation</a></li>
        <li><a href="projets.php">Projets</a></li>
        <li><a href="hobbies.php">Hobbies</a></li>
    </ul> 
</nav> -->

<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
    $mymenu = array( // idPage titre
        'index' => array( 'Accueil' ),
        'cv' => array( 'CV' ),
        'motivation' => array('Motivation')
        'projets' => array('Mes Projets')
        'hobbies' => array('Hobbies')
    );
    
    // ...
    foreach($mymenu as $pageId => $pageParameters) {
    echo "...";
    }
    // ...
} ?>

