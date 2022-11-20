<?php
require 'debut.php';
require 'menu.php';
?>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>


<div class="container_suppr_list">
    <?php
    $co = connexionBD();
    supprList($co);
    deconnexionBD($co);
    ?>

</div>
<script src="https://unpkg.com/split-type"></script>
<script src="./js/listAjout.js"></script>
<?php
require 'fin.php';
?>