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
        <div class="container_link">
            <li class="link first_link"><a href="recherche.php">Recherche</a></li>
            <li class="link second_link"><a href="recherche.php">Recherche</a></li>
        </div>

    </ul>


    <?php
    $co = connexionBD();
    afficherProfilNav($co);
    deconnexionBD($co);
    ?>

</header>