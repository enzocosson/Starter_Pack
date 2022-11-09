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
    $req = 'INSERT INTO imovix_users (user_code, user_photo, user_prenom, user_nom, user_email, user_mdp) 
    VALUES (NULL, "default.svg","' . $prenom . '","' . $nom . '","' . $email . '","' . $mdp . '")';
    echo $req;
    try {
        $resultat = $co->query($req);
    } catch (PDOException $e) {
        echo '<p>Erreur : ' . $e->getMessage() . '</p>';
        die();
    }
    if ($resultat->rowCount() == 1) {
        $_SESSION['prenom_user'] = $prenom;
        $_SESSION['photo_user'] = 'default.svg';
        header('location:bienvenue.php');
    } else {
        echo "<h1>Une erreur est survenue</h1>";
        header('location:inscription.php');
        die();
    }
}
function afficherModifProfil($co)
{
    $req = "SELECT * FROM imovix_users";

    $resultat = $co->query($req);
    foreach ($resultat as $value) {
        echo '<form class="changement_profil" action="profil_modif_verif.php" method="post">';
        echo     '<button type="button" class="changement_profil_pp" onclick="afficherPP()">';
        echo     '<img src="./img/pp/' . $value['user_photo'] . '" alt="">';
        echo     '</button>';

        echo     '<input type="text" name="prenom" value="' . $value['user_prenom'] . '">';
        echo     '<input type="text" name="nom" value="' . $value['user_nom'] . '">';
        echo     '<input type="email" name="email" value="' . $value['user_email'] . '">';
        echo     '<input class="enregistrer" type="submit" value="Enregistrer">';
        echo '</form>';
    }
}
function afficherContainerPP($co)
{
    $req = "SELECT * FROM bdd_pp";

    $resultat = $co->query($req);
    foreach ($resultat as $value) {
        echo  '<button class="img_pp" type="button" onclick="" >';
        echo '<img src="./img/pp/' . $value['user_photo'] . '" />;';
        echo '<div class="hoverPP">';
        echo '<svg clip-rule="evenodd" fill="white" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m2.164 10.201c.055-.298.393-.734.934-.59.377.102.612.476.543.86-.077.529-.141.853-.141 1.529 0 4.47 3.601 8.495 8.502 8.495 2.173 0 4.241-.84 5.792-2.284l-1.251-.341c-.399-.107-.636-.519-.53-.919.108-.4.52-.637.919-.53l3.225.864c.399.108.637.519.53.919l-.875 3.241c-.107.399-.519.636-.919.53-.399-.107-.638-.518-.53-.918l.477-1.77c-1.829 1.711-4.27 2.708-6.838 2.708-5.849 0-9.968-4.8-10.002-9.93-.003-.473.027-1.119.164-1.864zm5.396 2.857 2.924 2.503c.142.128.321.19.499.19.202 0 .405-.081.552-.242l4.953-5.509c.131-.143.196-.323.196-.502 0-.41-.331-.747-.748-.747-.204 0-.405.082-.554.243l-4.453 4.962-2.371-2.011c-.144-.127-.321-.19-.499-.19-.415 0-.748.335-.748.746 0 .205.084.409.249.557zm14.276.743c-.054.298-.392.734-.933.59-.378-.102-.614-.476-.543-.86.068-.48.139-.848.139-1.53 0-4.479-3.609-8.495-8.5-8.495-2.173 0-4.241.841-5.794 2.285l1.251.341c.4.107.638.518.531.918-.108.4-.519.637-.919.53l-3.225-.864c-.4-.107-.637-.518-.53-.918l.875-3.241c.107-.4.518-.638.918-.531.4.108.638.518.531.919l-.478 1.769c1.83-1.711 4.272-2.708 6.839-2.708 5.865 0 10.002 4.83 10.002 9.995 0 .724-.081 1.356-.164 1.8z" fill-rule="nonzero"/></svg>';
        echo '</div>';
        echo  ' </button>';
        $_SESSION['pp'] = $value['user_photo'];
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
        echo '<h1>Votre profil à bien été modifié</h1>';
        header('Refresh:0.8 ; URL=profil.php');
    } else {
        echo '<h1>Une erreur est survenu lors de la modification</h1>';
    }
}

function afficherProfil($co)
{
    $req = "SELECT * FROM imovix_users";

    $resultat = $co->query($req);
    foreach ($resultat as $value) {
        if (!empty($_SESSION['user_prenom'])) {
            echo    '<h1>' . $value['user_prenom'] . '</h1>';
            echo    '<div class="pp">';
            echo       '<img class="pp_img" src="./img/pp/' . $value['user_photo'] . '" alt="">';
            echo  ' </div>';
            echo   '<h2 class="name">' . $value['user_nom'] . '</h2>';
            echo   '<h3>' . $value['user_email'] . '</h3>';
            echo   '<a href="profil_modif.php" class="profil_container modif">';
            echo       '<h4>Modifier mon profil</h4>';
            echo   '</a>';
        } else {
            echo "<h1 class='h1_erreur_profil'>Vous devez vous connectez pour acceder a votre profil</h1>";
            echo "<div class='log'>";
            echo "<a class='btnConnexion' href='connexion.php'>Se connecter</a>";
            echo "<a class='btnInscription' href='inscription.php'>S'inscrire</a>";
            echo "</div>";
        }
    }
}


function afficherProfilNav($co)
{
    $req = "SELECT * FROM imovix_users";

    $resultat = $co->query($req);
    foreach ($resultat as $value) {
        if (!empty($_SESSION['user_prenom'])) {
            echo '<ul class="log">';
            echo '<div class="container_link">';
            echo '<li class="link first_link"><a href="profil.php">' . $value['user_prenom'] . '</a></li>';
            echo '<li class="link second_link"><a href="profil.php">' . $value['user_prenom'] . '</a></li>';
            echo  '</div>';
            echo  '<div class="container_link">';
            echo '<li class="link first_link"><a href="deconnexion.php">Deconnexion</a></li>';
            echo '<li class="link second_link_log"><a href="deconnexion.php">Deconnexion</a></li>';
            echo '</div>';
        } else {
            echo '<ul class="log">';
            echo '<div class="container_link">';
            echo '<li class="link first_link"><a href="connexion.php">Connexion</a></li>';
            echo '<li class="link second_link"><a href="connexion.php">Connexion</a></li>';
            echo  '</div>';
            echo  '<div class="container_link">';
            echo '<li class="link first_link"><a href="inscription.php">Inscription</a></li>';
            echo '<li class="link second_link_log"><a href="inscription.php">Inscription</a></li>';
            echo '</div>';
        }



        if (!empty($_SESSION['user_prenom'])) {
            echo '<a href="profil.php" class="photo_profil">';
            echo '<img class="photo_profil_img" src="./img/pp/' . $value['user_photo'] . '" alt="">';
            echo '</a>';
        } else {
            echo '<a href="profil.php" class="photo_profil">';
            echo '<img class="photo_profil_img" src="./img/pp/default.svg" alt="">';
            echo '</a>';
        }
    }
}
