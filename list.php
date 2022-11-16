<?php
session_start();
require 'debut.php';
require 'menu.php';
?>

<section class="myList">
    <h1>My <span>List</span></h1>

    <?php
    $co = connexionBD();
    myList($co);
    deconnexionBD($co);
    ?>

    <!-- <div class="carousel">
        <a><img class="prevBtn" src="./img/picto/btnArrow.svg" alt=""></a>
        <div class="slide">
            <img class="affiche" src="./img/affiche/affiche1.jpg" alt="">
        </div>
        <div class="slide">
            <img class="affiche" src="./img/affiche/affiche2.jpg" alt="">
        </div>
        <div class="slide">
            <img class="affiche" src="./img/affiche/affiche3.jpg" alt="">
        </div>
        <div class="slide">
            <img class="affiche" src="./img/affiche/affiche4.jpg" alt="">
        </div>
        <div class="slide">
            <img class="affiche" src="./img/affiche/affiche5.jpg" alt="">
        </div>
        <a><img class="nextBtn" src="./img/picto/btnArrow.svg" alt=""></a>
    </div> -->

</section>


<script src="./js/carrouselList.js"></script>
<?php
require 'fin.php';
?>