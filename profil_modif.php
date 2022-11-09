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



    <?php
    $co = connexionBD();
    afficherModifProfil($co);
    ?>

    <div class="container_pp">
        <div class="container_img">
            <?php
            afficherContainerPP($co);
            ?>
        </div>
        <div class="container_fermer">
            <button type="button" onclick="fermerPP()">Fermer</button>
        </div>
    </div>

    <?php
    deconnexionBD($co);
    ?>

</section>
<script src="./js/afficherPP.js"></script>
<?php
require 'fin.php';
?>