<?php
require 'debut.php';
require 'menu.php';
?>

<section class="movies">

    <div class="distortion"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js" integrity="sha256-3mBEX8I0uMLF7+AUjJeTCelosuorzYpqwBMBPDTyQqY=" crossorigin="anonymous"></script>
    <script src="./js/hover-effect.umd.js"></script>
    <script>
        // new hoverEffect({
        //     parent: document.querySelector('.distortion'),
        //     intensity: 0.3,
        //     image1: "./img/imgInterstellar/dist1.png",
        //     image2: "./img/imgInterstellar/dist2.png",
        //     displacementImage: "./img/diss.png",
        //     imageRatio: 380 / 300,

        // })
    </script>
    <?php
    $co = connexionBD();

    couvertureMovie($co)
    ?>

</section>



<section class="affichageMovie">
    <div class="container_genre">
        <div class="titre_genre">
            <h1>Top Tendance :</h1>
        </div>

        <div class="carrousel_genre_tendance">
            <?php
            afficherMoviesTendance($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>

    </div>

    <div class="container_genre">
        <div class="titre_genre">
            <h1>Action :</h1>
        </div>

        <div class="carrousel_genre_action">
            <?php
            afficherMoviesAction($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>

    </div>

    <div class="container_genre">
        <div class="titre_genre">
            <h1>Aventure :</h1>
        </div>

        <div class="carrousel_genre_aventure">
            <?php
            afficherMoviesAventure($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>

    </div>



    <div class="container_genre">
        <div class="titre_genre">
            <h1>Thriller :</h1>
        </div>

        <div class="carrousel_genre_thriller">
            <?php
            afficherMoviesThriller($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>
    </div>



    <div class="container_genre">
        <div class="titre_genre">
            <h1>Romance :</h1>
        </div>

        <div class="carrousel_genre_romance">
            <?php
            afficherMoviesRomance($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>
    </div>


</section>
<script src="./js/hoverInfoMovie.js"></script>

<?php
require 'footer.php';
require 'fin.php';
?>