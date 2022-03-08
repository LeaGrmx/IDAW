<?php
    require_once('template_header.php');
?>
        
        <!--Titres -->

        <div class="element-flexible">
            <h1> <b><u>Léa Grumiaux</b></u></h1>
        </div>
        
        <div class ="conteneur-flexible">
            <div class="element-flexible colonne">
                <nav class="menu">
                    <ul>
                    <li><a id="currentpage" href="index.php">Accueil</a></li>
                    <li><a href="cv.php">CV</a></li>
                    <li><a href="motivation.php">Lettre de motivation</a></li>
                    <li><a href="projets.php">Projets</a></li>
                    <li><a href="hobbies.php">Hobbies</a></li>
                </ul> </nav>
            </div>
            <div class="element-flexible colonne">
                <header>Bienvenue sur mon premier site HTML.</header>
                <article>
                    <br>Vous pouvez retrouver dans les différentes fenêtres un certain nombre d'informations potentiellement utile pour un futur recrutement.
                    <br>Vous avez accès à une page contenant mon CV, une lettre de motivation type, mes futurs projets, ainsi qu'une page regroupant mes hobbies. 
                </article>
            </div>
        </div>

        <footer>
            Pour me contacter directement par mail, vous pouvez <a href="mailto:lea.grumiaux@etu.imt-nord-europe.fr"> cliquer ici</a>
        </footer>

        <?php require_once('template_footer.php');?>
