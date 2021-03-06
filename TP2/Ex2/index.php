<!DOCTYPE html>

<html>
    <head>
        <title> Exemple Dynamique </title>
    </head>
    <body>
    La date d'aujourd'hui est le :
    <?php
    // Affichage de la date
    echo date("d/m/Y");?>

    <?php
    //Test sur les chaînes de caractère

    echo 'Une chaine \n guillemets \' simple';
    $i = 'doubles';
    echo "\n Guillemets \n $i";
    $a = "\n Hello ";
    $b = $a . "World !";
    echo $b; ?>

    <?php
        //Test fonction
        function afficher( $texte, $saut = 1 ) {
            echo $texte;
            for( $i = 0 ; $i < $saut ; $i++)
            echo "\n";
            }
            afficher("Hello", 0);
            afficher(" World !");
            afficher("Test OK");
    ?>

    <?php
        $tab1 = array("A","B","C");
        $tab2[0] = "A";
        $tab2[1] = "B";
        $tab2[2] = "C";
        $tab3[] = "A";
        $tab3[] = "B";
        $tab3[] = "C";
        
        print_r($tab1);
    ?> 

    <?php
        $tab = array(17,-3);
        // affiche récursivement le tableau
        echo "tab : "; print_r($tab);
        // supression de la clef 0
        unset($tab[0]);
        echo "tab : "; print_r($tab);
        // copie d'un tableau
        $tab2 = array_values($tab);
        echo "tab2 : "; print_r($tab2);
    ?>

    <?php
    //Test foreach
    $tab = array(5,2,5,7,4,6);
    foreach($tab as $value){
            echo $value."\n";
            }
    ?>

    <?php
    //Tableau avec string comme clé
    $personne = array(
        'prenom' => 'John',
        'nom' => 'Doe',
        'age' => 20
        );
        // Affichages équivalents :
        echo "M. ".$personne['prenom']."\n";
        echo "M. {$personne['nom']}\n";

    //Clés implicites/explicites
    $t = array(5 => 43, 32, 56, "b" => 12);
    $u = array(5 => 43, 6 => 32, 7 => 56, "b" => 12);
    // $t et $u sont identiques
    // Affichage d’un élément
    echo $u["b"];

    //Test matrices
    $matrice = array(
        array( 1, 18, 6 ),
        array( -1, 1, 8 ),
        array( 13, 18, 3 )
        );
        echo "\n".$matrice[1][2];
    ?> 
    </body>

</html>