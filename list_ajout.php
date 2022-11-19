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
        <lottie-player class="anim_warning" src="https://assets4.lottiefiles.com/packages/lf20_Tkwjw8.json" background="transparent" speed="1" loop autoplay></lottie-player>
        <?php
        ajoutMovieList($co);
        ?>
    </div>


    <?php
    deconnexionBD($co);
    ?>
</div>

<?php
require 'fin.php';
?>