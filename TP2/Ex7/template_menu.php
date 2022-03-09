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
// un tableau qui definit la structure du site
    if($_GET['lang']=='fr'){
        $mymenu = array( // idPage titre
            'accueil' => array( 'Accueil'),
            'cv' => array( 'CV'),
            'motivation' => array('Motivation'),
            'projets' => array('Futurs Projets'),
            'hobbies' => array('Hobbies'),
            'contact' => array('Me contacter')
        );
        
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
    
            if($currentPageId == $pageId)
                echo "id=\"currentpage\" ";
            
            echo "href= \"fr\index.php?page=".$pageId."\">".$pageParameters[0]."</a></li> \n";
        
        }
        echo "</ul></nav>";
    }
    elseif($_GET['lang']=='en'){
        $mymenu = array( // idPage titre
            'accueil' => array( 'Home Page'),
            'cv' => array( 'Resume' ),
            'motivation' => array('Cover letter'),
            'projets' => array('Projects'),
            'hobbies' => array('Hobbies'),
            'contact' => array('Contact me')
        );
        
        echo "<nav class=\"menu\"><ul>";
        foreach($mymenu as $pageId => $pageParameters) {
            echo "<li><a ";
    
            if($currentPageId == $pageId)
                echo "id=\"currentpage\" ";
            
            echo "href= \"en\index.php?page=".$pageId."\">".$pageParameters[0]."</a></li> \n";
        
        }
        echo "</ul></nav>";
    }
    
    
} 

?>

