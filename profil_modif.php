<?php
session_start();
require 'debut.php';
require 'menu.php';

?>
<section class="profil">

    <form class="changement_profil" action="profil_modif_verif.php" method="post">
        <div class="changement_profil_pp">
            <img class="pp_img" src="./img/pp/pp.svg" alt="">
        </div>
        <input type="text" name="prenom" value="<?php echo $_SESSION['user_prenom'] ?>">
        <input type="text" name="nom" value="<?php echo $_SESSION['user_nom'] ?>">
        <input type="email" name="email" value="<?php echo $_SESSION['user_email'] ?>">
        <input class="enregistrer" type="submit" value="Enregistrer">
    </form>
</section>
<?php
require 'fin.php';
?>