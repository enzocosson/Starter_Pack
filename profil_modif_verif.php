<?php
require 'debut.php';
require 'menu.php';

$photo;
$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$id = $_SESSION['user_numero'];


$co = connexionBD();
?>

<section class="modif_page">
    <?php
    modifierProfil($co, $prenom, $nom, $email, $id);
    ?>
</section>

<?php
deconnexionBD($co);
?>

<?php
require 'fin.php';
?>