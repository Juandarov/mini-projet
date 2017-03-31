<?php $title = "Ma 'tite Boutique";
    $onglet = "Accueil";
    $currentPage = "home";
    require_once "header.php";?>

        <div class="row">
            <div class="col-sm-6 col-md-12">
                <section>
                    <h3>Le Top des ventes</h3>
                    <div id="slides">

                        <img src="static/images/cactus.jpg" alt="">
                        <img src="static/images/gentiane.jpg" alt="">
                        <img src="static/images/lotus.jpg" alt="">
                    </div>
                </section>
            </div>
            <div class="col-sm-6 col-md-12">
                <main>
                    <h3>Notre entreprise</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </main>
                <div class="products">
                    <a class="btn btn-info" href="catalogue.php" role="button">Voir nos produits</a>
                </div>
            </div>
        </div>


<?php $anotherscript = '<script src="static/external/SlidesJS/source/jquery.slides.js"></script>';
require "footer.php"; ?>
<script type="text/javascript">
$(document).ready(function() {
    $("#slides").slidesjs({
        width: 450,
        height: 450,
        play: {
            active: true,
            // [boolean] Generate the play and stop buttons.
            // You cannot use your own buttons. Sorry.
            effect: "slide",
            // [string] Can be either "slide" or "fade".
            interval: 4000,
            // [number] Time spent on each slide in milliseconds.
            auto: true,
            // [boolean] Start playing the slideshow on load.
            swap: true,
            // [boolean] show/hide stop and play buttons
            pauseOnHover: false,
            // [boolean] pause a playing slideshow on hover
            restartDelay: 2500,
            // [number] restart delay on inactive slideshow
        },
    });
});
</script>
