<?php
require 'debut.php';
require 'menu.php';
?>

<section data-barba="container" class="profil">
    <div class="cont-bandes">
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
    </div>
    <div class="wipe-transition"></div>

    <?php
    $co = connexionBD();
    afficherProfil($co);
    deconnexionBD($co);
    ?>


</section>
<?php
require 'fin.php';
?>