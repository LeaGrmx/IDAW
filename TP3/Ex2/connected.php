<!-- <?php
    echo "Le login proposé est : ".$_GET['login']."<br>";
    echo "Le mot de passe associé est : ".$_GET['password'];
?> -->

<!-- Premier formulaire avec méthode GET + modification de method="GET" en ="POST" dans login.php
<?php
    // on simule une base de données
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_GET['login']) && isset($_GET['password'])) {
        $tryLogin=$_GET['login'];
        $tryPwd=$_GET['password'];

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenue ".$login."</h1>";

    }
?>
-->

<?php
    // on simule une base de données
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );

    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];

        // si login existe et password correspond
        if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } 
    else
        $errorText = "Merci d'utiliser le formulaire de login";
    
    if(!$successfullyLogged) {
        echo $errorText;
        echo "<nav class=\"menu\"><ul><li><a href=\"login.php\">Lien vers le formulaire de login</a></li></ul></nav>";
    } else {
        echo "<h1>Bienvenue ".$login."</h1>";
        session_start();
        $_SESSION['newsession']=$login;
        echo "Le login de la session en cours est :".$_SESSION['newsession']."<br>" ;
        echo "<nav class=\"menu\"><ul><li><a href=\"index.php\">Lien vers l'index</a></li></ul></nav>";
    }   
?>