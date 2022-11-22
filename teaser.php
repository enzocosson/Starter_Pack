<?php
require 'debut.php';
require 'menu.php';
?>

<div class="teaser">

    <?php
    $co = connexionBD();
    teaser($co);
    deconnexionBD($co);
    ?>

</div>

<?php
require 'fin.php';
?>