<?php
session_start();
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

    <video class="interstellar_ba" controls autoplay loop>
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
<section class="movie_test">

</section>
<script src="./js/mutedFuction.js"></script>
<?php
require 'fin.php';
?>