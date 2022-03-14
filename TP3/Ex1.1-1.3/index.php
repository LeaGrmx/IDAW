<!DOCTYPE html>
<html>
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
        if(isset($_GET['css'])){
            echo "L'utilisateur a choisi le ".$_GET['css']."<br>";
 
        }
        setcookie("css", $_GET['css']);
        
        print_r($_COOKIE);  
    ?>

    <?php
        $id_css = $_COOKIE['css'];
        echo "<br> L'identifiant css contenu dans le cookie est : ".$id_css;
    ?>
    </div>
    <head>
        <title>Site de test</title>
            <?php 
                echo "<link rel=\"stylesheet\" href=\"".$id_css.".css\" type=\"text/css\"
                media=\"screen\" title=\"default\" charset=\"utf-8\"/>";
            ?>
            
    </head>

</html>