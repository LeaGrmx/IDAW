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

function renderMenuToHTML($currentPageId, $language) {
// un tableau qui definit la structure du site
        $mymenu = array( // idPage titre
            'accueil' => array( 'fr' => 'Accueil', 'en' => 'Home'),
            'cv' => array( 'fr' => 'CV', 'en'=> 'Resume'),
            'motivation' => array('fr' => 'Motivation', 'en' => 'Cover letter'),
            'projets' => array('fr' => 'Futurs Projets', 'en' => 'Projects'),
            'hobbies' => array('fr' => 'Hobbies', 'en' => 'Hobbies'),
            'contact' => array('fr' => 'Me contacter', 'en' => 'Contact me'),
            'langage' => array('fr'=> array('en', 'English version'), 'en' => array('fr','Version française'))
        );
        
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
    
            if($currentPageId == $pageId)
                echo "id=\"currentpage\" ";
            
            if($pageId!='langage')
                echo "href=\"index.php?page=".$pageId."&lang=".$language."\">".$pageParameters[$language]."</a></li> \n";
            
            elseif($pageId=='langage')
                echo "href=\"index.php?page=".$currentPageId."&lang=".$pageParameters[$language][0]."\">".$pageParameters[$language][1]."</a></li>\n";
        

        echo "</ul></nav>";
        }
        
    
    

}

?>

