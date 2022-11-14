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
        new hoverEffect({
            parent: document.querySelector('.distortion'),
            intensity: 0.3,
            image1: "./img/imgInterstellar/dist1.png",
            image2: "./img/imgInterstellar/dist2.png",
            displacementImage: "./img/diss.png",
            imageRatio: 380 / 300,

        })
    </script>

    <video class="interstellar_ba" controls autoplay loop muted>
        <source src="./video/interstellar_ba.mp4" type="video/mp4">
    </video>

    <div class="couverture_info">
        <div class="description">
            <h1><span>I</span>nterstellar</h1>
            <div class="interaction">
                <a class="play" href="">PLAY</a>
                <a href="">TEASER</a>
                <a href="">+ ADD LIST</a>
            </div>
            <h3>Genre : Action, Science-Fiction</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, repellat! Lorem ipsum dolor sit amet.Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
        </div>
        <div class="container_timeline_sound">
            <div class="timeline"></div>
            <a class="muteBtn">
                <img class="noMuted" src="./img/picto/noMuted.svg" alt="">
                <img class="muted" src="./img/picto/Muted.svg" alt="">
            </a>
        </div>
    </div>

</section>


<?php
$co = connexionBD();
?>
<section class="affichageMovie">
    <div class="container_genre">
        <div class="titre_genre">
            <h1>Top Tendance :</h1>
        </div>

        <div class="carrousel_genre">
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

        <div class="carrousel_genre">
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

        <div class="carrousel_genre">
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

        <div class="carrousel_genre">
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

        <div class="carrousel_genre">
            <?php
            afficherMoviesRomance($co);
            ?>
        </div>

        <?php
        $_SESSION['idMovie'];
        ?>
    </div>


</section>




<!-- <section class="affichageMovie">
    <div class="container_genre">
        <div class="titre_genre">
            <h1>Top Tendance :</h1>
        </div>

        <div class="carrousel_genre">
            <?php
            // afficherMovies($co);
            ?>
        </div>

        <div class="hoverInfo">

            <div class="hoverInfo_descr">
                <h1>Avengers : Endgame</h1>
                <h2><span>Genre : </span> Action, Science-Fiction</h2>
                <h2><span>Distribution : </span> Robert Downey Jr, Chris Evans, Chris Hemsworth...</h2>
                <p>Le Titan Thanos, ayant réussi à s'approprier les six Pierres d'Infinité et à les réunir sur le Gantelet doré, a pu réaliser son objectif de pulvériser la moitié de la population de l'Univers. Cinq ans plus tard, Scott Lang, alias Ant-Man, parvient à s'échapper de la dimension subatomique où il était coincé. Il propose aux Avengers une solution pour faire revenir à la vie tous les êtres disparus, dont leurs alliés et coéquipiers : récupérer les Pierres d'Infinité dans le passé.</p>
                <div class="interaction">
                    <a class="play" href="">PLAY</a>
                    <a class="more" href=""> <img class="plus" src="./img/picto/+.svg" alt=""> </a>
                    <a class="more" href=""><img class="good" src="./img/picto/thumbUp.svg" alt=""></a>
                </div>
            </div>

            <div class="hoverInfo_video">
                <a class="muteBtn">
                    <img class="noMuted" src="./img/picto/noMuted.svg" alt="">
                    <img class="muted" src="./img/picto/Muted.svg" alt="">
                </a>
                <video class="avengersEndgame_ba" autoplay loop muted>
                    <source src="./video/avengersEndgame_ba.mp4" type="video/mp4">
                </video>

            </div>

        </div>
    </div>
</section> -->

<script src="./js/hoverInfoMovie.js"></script>

<?php
require 'fin.php';
?>