<?php
    require_once('templace_header.php');
?>

        <nav class="menu">
          <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="cv.php">CV</a></li>
            <li><a href="motivation.php">Lettre de motivation</a></li>
            <li><a href="projets.php">Projets</a></li>
            <li><a id="currentpage" href="hobbies.php">Hobbies</a></li>
        </ul> </nav>
     
        <h3> Mes hobbies</h3>

        <div class="element-flexible">
            <ul>
                <li> La musique : Harmonie municipale de Berlaimont depuis 2014 </li>
            </ul>
            <img src ="Harmonie Berlaimont 2022.jpg" width=500 height=500 alt="Photo Harmonie de Berlaimont 2022">
        </div>
        
        <div class="element-flexible">
            <ul>
                <li> Tennis </li>
            </ul>
            <img src="Logo tennis.png" alt="Logo tennis">
            <ul>
                <li> Voyages </li>
            </ul>
        </div>
      
        <?php require_once('templace_footer.php');?>