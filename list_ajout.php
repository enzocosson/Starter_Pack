<?php
require 'debut.php';
require 'menu.php';
?>



<div class="container_ajout_list">
    <?php
    $co = connexionBD();
    ?>
    <div class="ajout_movie">
        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

        <?php
        ajoutMovieList($co);
        ?>
    </div>


    <?php
    deconnexionBD($co);
    ?>
</div>
<script src="https://unpkg.com/split-type"></script>
<script src="./js/listAjout.js"></script>
<?php
require 'fin.php';
?>