<?php
require 'debut.php';
require 'menu.php';
?>
<section data-barba="container" class="inscription">
    <div class="cont-bandes">
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
    </div>
    <form action="inscription_verif.php" method="post">
        <div class="menu_deroulant">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_j1adxtyb.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
        <h1>Inscris toi</h1>
        <input type="text" name="prenom" id="prenom" placeholder="Prénom">
        <input type="text" name="nom" id="nom" placeholder="Nom">
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
        <input class="submit" type="submit" value="Se connecter">

        <?php

        ?>
    </form>
</section>
<?php
require 'fin.php';
?>