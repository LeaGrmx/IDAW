<!DOCTYPE html>
<?php
    session_start();
?>

<html>
    <head>
        <title>Site de test</title>
        <?php 
            if(isset($_GET['css'])){
                echo "<link rel=\"stylesheet\" href=\"".$_GET['css'].".css\" type=\"text/css\"
                media=\"screen\" title=\"default\" charset=\"utf-8\"/>";
                setcookie("css", $_GET['css']);
            }
            
            elseif(isset($_COOKIE['css'])){
                echo "<link rel=\"stylesheet\" href=\"".$_COOKIE['css'].".css\" type=\"text/css\"
            media=\"screen\" title=\"default\" charset=\"utf-8\"/>";
            }
        ?>  
            
    </head>

    <div class=element-flexible taille25>
    <h3> Bienvenue sur mon site de test! </h3>
    
    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
        
    </form>
    <p> Ceci est mon site de test, il est en cours de construction... </p>


    <?php
        echo "<nav class=\"menu\"><ul><li><a href=\"projets.php\">Lien vers la page projet</a></li></ul></nav>";
        echo "<nav class=\"menu\"><ul><li><a href=\"deconnected.php\">Se déconnecter</a></li></ul></nav>";
        echo "Le login de la session en cours est :".$_SESSION['newsession'];
    ?>    
             
    
    </div>
    

</html>