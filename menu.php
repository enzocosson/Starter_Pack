<?php
require 'lib.inc.php';
?>

<header>
    <ul class="menu">
        <li class="link logo"><a href="home.php">iMovix</a></li>
        <div class="container_link">
            <li class="link first_link"><a href="overview.php">Overview</a></li>
            <li class="link second_link"><a href="overview.php">Overview</a></li>
        </div>
        <div class="container_link">
            <li class="link first_link"><a href="movies.php">Movies</a></li>
            <li class="link second_link"><a href="movies.php">Movies</a></li>
        </div>
        <div class="container_link">
            <li class="link first_link"><a href="list.php">My List</a></li>
            <li class="link second_link"><a href="list.php">My List</a></li>
        </div>

    </ul>


    <?php
    if (!empty($_SESSION['user_prenom'])) {
        echo '<ul class="log">';
        echo '<div class="container_link">';
        echo '<li class="link first_link"><a href="profil.php">' . $_SESSION['user_prenom'] . '</a></li>';
        echo '<li class="link second_link"><a href="profil.php">' . $_SESSION['user_prenom'] . '</a></li>';
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
    ?>


    <!--  <div class="burger">
        <span class="line line1"></span>
        <span class="line line2"></span>
        <span class="line line3"></span>
    </div> -->
    <?php
    if (!empty($_SESSION['user_prenom'])) {
        echo '<a href="profil.php" class="photo_profil">';
        echo '<img class="photo_profil_img" src="./img/wpspiderman.jpg" alt="">';
        echo '</a>';
    } else {
        echo '<a href="profil.php" class="photo_profil">';
        echo '<img class="photo_profil_img" src="./img/pp/pp.svg" alt="">';
        echo '</a>';
    }
    ?>

</header>