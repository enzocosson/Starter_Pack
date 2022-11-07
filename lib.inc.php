<?php
session_start();
require 'secret_mdp.php';


function connexionBD()
{
    $mabd = null;
    try {
        $mabd = new PDO('mysql:host=localhost;port=3306;dbname=imovix;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
        $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
        print 'Erreur : ' . $e->getMessage() . '<br />';
        die();
    }
    return $mabd;
}
function deconnexionBD(&$mabd)
{
    return $mabd = null;
}

function inscription($co, $prenom, $nom, $email, $mdp)
{
    $req = 'INSERT INTO imovix_users (user_code, user_prenom, user_nom, user_email, user_mdp) 
    VALUES (NULL,"' . $prenom . '","' . $nom . '","' . $email . '","' . $mdp . '")';
    echo $req;
    try {
        $resultat = $co->query($req);
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        $_SESSION['prenom_user'] = $prenom;
        header('location:bienvenue.php');
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        header('location:inscription.php');
        die();
    }
}
function modifierProfil($co, $prenom, $nom, $email, $id)
{
    $req = "UPDATE imovix_users SET user_prenom='$prenom', user_nom='$nom', user_email='$email' WHERE user_code='$id' ";
    try {
        $resultat = $co->query($req);
    } catch (PDOException $e) {
        print 'Erreur : ' . $e->getMessage() . '<br />';
    }

    if ($resultat->rowCount() == 1) {
        session_destroy();
        echo '<h1>Votre profil à bien été modifié</h1>';
        echo '<h2>Vous devez vous reconnecter pour appliquer les changements</h2>';
        echo "<a class='btnConnexion' href='connexion.php'>Se connecter</a>";
        header('Refresh:10 ; URL=connexion.php');
    } else {
        echo '<h1>Une erreur est survenu lors de la modification</h1>';
    }
}
