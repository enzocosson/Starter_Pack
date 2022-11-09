<?php
require 'debut.php';
require 'menu.php';
?>

<section data-barba="container" class="connexion">
    <div class="cont-bandes">
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
    </div>
    <div class="wipe-transition"></div>

    <form action="connexion_verif.php" method="post">
        <div class="menu_deroulant">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets5.lottiefiles.com/packages/lf20_j1adxtyb.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
        <h1>Connecte toi</h1>
        <input type="email" name="email" id="email" placeholder="Email">
        <input type="password" name="mdp" id="mdp" placeholder="Mot de passe">
        <input class="submit" type="submit" value="Se connecter">

        <?php
        if (!empty($_SESSION['erreur'])) {
            echo $_SESSION['erreur'];
            unset($_SESSION['erreur']);
        }
        ?>
    </form>
    <div class="noCompte">
        <h3>Pas de compte ?</h3>
        <a class="btnNoCompte" href="inscription.php">S'inscrire</a>
    </div>
</section>
<?php
require 'fin.php';
?>