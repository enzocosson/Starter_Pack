<?php
session_start();
require 'debut.php';
require 'menu.php';
?>

<section class="loader">
    <?php
    if (empty($_SESSION['user_prenom'])) {
        echo "<h1 class='loader_titre'>";
        echo "<div class='word'>";

        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>M</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>x</div>";

        echo "</div>";
        echo "</h1>";

        echo "<h1 class='loader_titre2'>";
        echo "<div class='word'>";

        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>M</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>x</div>";

        echo "</div>";
        echo "</h1>";









        echo "<h1 class='loader_bienvenue'>";
        echo "<div class='word'>";

        echo "<div class='letter'>B</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>u</div>";
        echo "<div class='letter'>e</div>";

        echo "</div>";
        echo "</h1>";

        echo "<h1 class='loader_bienvenue2'>";
        echo "<div class='word'>";

        echo "<div class='letter'>B</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>u</div>";
        echo "<div class='letter'>e</div>";

        echo "</div>";
        echo "</h1>";







        echo "<h1 class='loader_inconnu'>";
        echo "<div class='word'>";

        echo "<div class='letter'>O</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>c</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>t</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>p</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>?</div>";

        echo "</div>";
        echo "</h1>";

        echo "<h1 class='loader_inconnu2'>";
        echo "<div class='word'>";

        echo "<div class='letter'>O</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>c</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>n</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>t</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>p</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>?</div>";

        echo "</div>";
        echo "</h1>";





        echo "<div class='log'>";
        echo "<a class='btnConnexion' href='connexion.php'>Se connecter</a>";
        echo "<a class='btnNoConnexion' href='home.php'>Continer sans se connecter</a>";
        echo "</div>";
    } else {

        echo "<h1 class='loader_titre'>";
        echo "<div class='word'>";

        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>M</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>x</div>";

        echo "</div>";
        echo "</h1>";

        echo "<h1 class='loader_titre2'>";
        echo "<div class='word'>";

        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>M</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>x</div>";

        echo "</div>";
        echo "</h1>";



        echo "<h1 class='loader_titre_co'>";
        echo "<div class='word'>";

        echo "<div class='letter'>R</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>d</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>u</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>r</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>r</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<span class='letter'>" . $_SESSION['user_prenom'] . "</span>";

        echo "</div>";
        echo "</h1>";

        echo "<h1 class='loader_titre_co2'>";
        echo "<div class='word'>";

        echo "<div class='letter'>R</div>";
        echo "<div class='letter'>a</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>d</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>u</div>";
        echo "<div class='letter'>s</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<div class='letter'>r</div>";
        echo "<div class='letter'>e</div>";
        echo "<div class='letter'>v</div>";
        echo "<div class='letter'>o</div>";
        echo "<div class='letter'>i</div>";
        echo "<div class='letter'>r</div>";
        echo "<div class='letter'>&nbsp</div>";
        echo "<span class='letter'>" . $_SESSION['user_prenom'] . "</span>";

        echo "</div>";
        echo "</h1>";
        header('Refresh:6 ; URL=home.php');
    }
    ?>
</section>

<script src="https://unpkg.com/split-type"></script>
<script src="./js/loader.js"></script>
<?php
require 'fin.php';
?>