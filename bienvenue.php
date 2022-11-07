<?php
session_start();
require 'debut.php';
require 'menu.php';
?>
<section class="bienvenue">
    <?php
    echo "<h1>Bienvenue parmis nous <span>" . $_SESSION['prenom_user'] . "</span></h1>";
    header('Refresh:4 ; URL=connexion.php');
    ?>
</section>
<?php
require 'fin.php';
?>