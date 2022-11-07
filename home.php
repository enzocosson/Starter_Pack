<?php
require 'debut.php';
require 'menu.php';
?>

<section data-barba="container" class="home">
    <!-- <div class="distortion"></div>-->
    <!-- gsap -->
    <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js" integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>-->
    <!-- three js -->
    <!--   <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/108/three.min.js" integrity="sha256-3mBEX8I0uMLF7+AUjJeTCelosuorzYpqwBMBPDTyQqY=" crossorigin="anonymous"></script>

    <script src="./js/hover-effect.umd.js"></script>
    <script>
        new hoverEffect({
            parent: document.querySelector('.distortion'),
            intensity: 0.2,
            image1: "./img/wpspiderman.jpg",
            image2: "./img/bg_wp.jpg",
            displacementImage: "./img/diss.png",
            imageRatio: 380 / 300,

        })
    </script>
-->


    <div class="cont-bandes">
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
        <div class="bande"></div>
    </div>
    <div class="wipe-transition"></div>


    <img class="bg_wp_avatar" src="./img/bg_wp_avatar.png" alt="">
    <img class="afficheAvatar" src="./img/afficheAvatar.png" alt="">


    <div class="description">
        <h1><span>A</span>VATAR</h1>
        <h2>La Voie de l'eau</h2>
        <div class="interaction">
            <a class="play" href="">PLAY</a>
            <a href="">TEASER</a>
            <a href="">+ ADD LIST</a>
        </div>
        <h3>Genre : Action, Science-Fiction</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, repellat! Lorem ipsum dolor sit amet.Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
    </div>
</section>
<section class="main">
    <div class="bg">
        <div class="bg_wp" style="background-image: url(./img/wpspiderman.jpg);"></div>
        <div class="bg_wp second" style="background-image: url(./img/bg_wp.jpg);"></div>
        <div class="bg_wp third" style="background-image: url(./img/bg_wp_pirates.jpg);"></div>


    </div>

    <div class="container_banner">
        <div class="banner first">
            <div class="banner_slide">SPIDER-MANSPIDER-MAN</div>
        </div>
        <div class="banner second">
            <div class="banner_slide">AVENGERS:ENDGAMEAVENGERS:ENDGAME</div>
        </div>
    </div>


    <div class="info">
        <div class="info_child">
            <div class="container_affiche">
                <img class="affiche" src="./img/afficheSpiderman.png" />
                <img class="affiche second" src="./img/afficheEndgame 1.png" />

            </div>
            <div class="description">
                <div class="titre">
                    <h2 class="first">Spider-man</h2>
                    <h2 class="second">Avengers : Endgame</h2>
                </div>
                <div class="interaction">
                    <a class="play" href="">PLAY</a>
                    <a href="">TEASER</a>
                    <a href="">+ ADD LIST</a>
                </div>
                <h3>Genre : Action, Science-Fiction</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, repellat! Lorem ipsum dolor sit amet.Lorem ipsum dolor, sit amet consectetur adipisicing elit. </p>
            </div>
        </div>
        <div class="navigation">
            <span class="fleche prev">
                <img src="./img/fleche.svg" alt="">
            </span>
            <span class="fleche next">
                <img src="./img/fleche.svg" alt="">
            </span>
        </div>

    </div>




</section>

<?php
require 'fin.php';
