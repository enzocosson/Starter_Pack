<?php
session_start();
require 'debut.php';
require 'menu.php';
?>

<section class="myList">
    <h1 class="title_list">My <span>List</span></h1>

    <?php
    $co = connexionBD();
    myList($co);
    deconnexionBD($co);
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        (function($) {
            $.fn.transformHeroes = function() {
                var perspective = "1000px",
                    delta = 20,
                    width = this.width(),
                    height = this.height(),
                    midWidth = width / 2,
                    midHeight = height / 2;

                this.on({
                    mousemove: function(e) {
                        var pos = $(this).offset(),
                            cursPosX = e.pageX - pos.left,
                            cursPosY = e.pageY - pos.top,
                            cursCenterX = midWidth - cursPosX,
                            cursCenterY = midHeight - cursPosY;

                        $(this).css(
                            "transform",
                            "perspective(" +
                            perspective +
                            ")  translate(-50%, -50%) rotateX(" +
                            cursCenterY / delta +
                            "deg) rotateY(" +
                            -(cursCenterX / delta) +
                            "deg)"
                        );
                        $(this).removeClass("is-out");
                    },
                    mouseleave: function() {
                        $(this).addClass("is-out");
                    },
                });

                return this;
            };
        })(jQuery);

        $(".card").transformHeroes();
    </script>

</section>


<script src="./js/myList.js"></script>
<?php
require 'fin.php';
?>