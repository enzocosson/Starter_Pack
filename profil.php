<?php
session_start();
require 'debut.php';
require 'menu.php';
?>
<div class="cont-bandes">
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
    <div class="bande"></div>
</div>
<div class="wipe-transition"></div>
<section class="profil">


    <?php
    if (!empty($_SESSION['user_prenom'])) {
        echo    '<h1>' . $_SESSION['user_prenom'] . '</h1>';
        echo    '<div class="pp">';
        echo       '<img class="pp_img" src="./img/pp/pp.svg" alt="">';
        echo  ' </div>';
        echo   '<h2 class="name">' . $_SESSION['user_nom'] . '</h2>';
        echo   '<h3>' . $_SESSION['user_email'] . '</h3>';
        echo   '<a href="profil_modif.php" class="profil_container modif">';
        echo       '<h4>Modifier mon profil</h4>';
        echo   '</a>';
    } else {
        echo "<h1 class='h1_erreur_profil'>Vous devez vous connectez pour acceder a votre profil</h1>";
        echo "<div class='log'>";
        echo "<a class='btnConnexion' href='connexion.php'>Se connecter</a>";
        echo "<a class='btnInscription' href='inscription.php'>S'inscrire</a>";
        echo "</div>";
    }
    ?>


</section>
<?php
require 'fin.php';
?>