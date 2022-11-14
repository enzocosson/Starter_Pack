<?php
session_start();
require 'debut.php';
require 'menu.php';
?>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<section class="myList">
    <div class="carousel">
        <a href="#one" class="carousel-item">
            <img src="./img/affiche/affiche1.jpg" alt="">
        </a>
        <a href="#two" class="carousel-item">
            <img src="./img/affiche/affiche2.jpg" alt="">
        </a>
        <a href="#three" class="carousel-item">
            <img src="./img/affiche/affiche3.jpg" alt="">
        </a>
        <a href="#four" class="carousel-item">
            <img src="./img/affiche/affiche4.jpg" alt="">
        </a>
        <a href="#five" class="carousel-item">
            <img src="./img/affiche/affiche5.jpg" alt="">
        </a>
    </div>
    <script>
        $(document).ready(function() {
            $('.carousel').carousel({
                indicators: true
            })
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</section>

<?php
require 'fin.php';
?>