<?php
require 'debut.php';
require 'menu.php';
?>

<div class="recherche">


    <form action="recherche_verif.php" method="get">
        <h1><span>Recherchez </span>le film de votre choix</h1>
        <input class="search" type="search" name="search" id="search" list="search" autocomplete="off" placeholder="Votre film">
        <datalist id="search">
            <option value="spiderman">
            <option value="avenegers">

            <option value="test">

                <?php
                // $co = connexionBD();
                // genererDatalistAuteurs($co);
                ?>
        </datalist>
        <input class="submit" type="submit" value="Rechercher">
    </form>

    <div class="affichageRecherche">
        <?php
        $co = connexionBD();
        recherche($co);
        deconnexionBD($co);
        ?>
    </div>
</div>

<?php
require 'fin.php';
?>