<?php
require 'debut.php';
require 'menu.php';
?>



<div class="container_ajout_list">
    <?php
    $co = connexionBD();
    ajoutMovieList($co);
    deconnexionBD($co);
    ?>
</div>

<?php
require 'fin.php';
?>