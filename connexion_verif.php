<?php
require 'lib.inc.php';

$email = $_POST['email'];
$mdp = $_POST['mdp'];

$co = connexionBD();
$req = 'SELECT * FROM imovix_users WHERE user_email LIKE  "' . $email . '" ';
echo $req;
$resultat = $co->query($req);

$ligne_resultat = $resultat->rowCount();
if ($ligne_resultat > 0) {
    $ligne = $resultat->fetch(PDO::FETCH_ASSOC);

    if ($mdp == $ligne['user_mdp']) {
        $_SESSION['user_photo'] = $ligne['user_photo'];
        $_SESSION['user_prenom'] = $ligne['user_prenom'];
        $_SESSION['user_numero'] = $ligne['user_code'];
        $_SESSION['user_nom'] = $ligne['user_nom'];
        $_SESSION['user_email'] = $ligne['user_email'];
        header('location:home.php');
    } else {
        $_SESSION['erreur'] = '<h1>Le mot de passe est incorrect</h1>';
        header('location:connexion.php');
        echo $req;
    }
} else {
    $_SESSION['erreur'] = '<h1>Les identifiants sont inconnus</h1>';
    header('location:connexion.php');
    echo $req;
}

deconnexionBD($co);
