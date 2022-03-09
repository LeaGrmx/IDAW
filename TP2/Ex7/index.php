<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $language='fr'
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    } 
    if(isset($_GET['lang'])){
        $language=$_GET['lang'];
    }
    ?>

<header class="bandeau_haut">
<h1 class="titre">Léa Grumiaux</h1>
</header>

<div class="element-flexible colonne">
<?php
renderMenuToHTML($currentPageId,$language);
?>
</div>

<section class="corps">

<?php
   $pageToInclude = $language."\\".$currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>

</section>

<?php require_once("template_footer.php"); ?>  