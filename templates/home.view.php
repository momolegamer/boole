<?php
require "include/header.view.php";
require "include/menubar.view.php";
?>

<body id='page-top class=' regular-navigation'>
    <!-- Header -->
    <header id="headerwrap" class="backstretched fullheight">
        <div class="container-fluid fullheight">
            <div class="vertical-center row">
                <div class="col-sm-1 pull-left text-center slider-control match-height">
                    <a href="#" class="prev-bs-slide vertical-center wow fadeInLeft" data-wow-delay="0.8s"><i class="fa fa-long-arrow-left"></i></a>
                </div>
                <div class="intro-text text-center smoothie col-sm-10 match-height">
                    <div class="intro-heading wow fadeIn heading-font" data-wow-delay="0.8s">
                        <div style="font-size:60px">Besoin de faire vos courses ?</div>
                        <div style="font-size:30px">Pour commencer, comparez et choisissez le meilleur produit</div>
                    </div>
                </div>
                <div class="col-sm-1 pull-right text-center slider-control match-height">
                    <a href="#" class="next-bs-slide vertical-center wow fadeInRight" data-wow-delay="0.8s"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </header>
    <section id='about' class='top-border-me'>
        <div class='section-inner'>
            <div class='container'>
                <div class='row'>
                    <div class='col-lg-12 text-center mb100'>
                        <h2 class='section-heading'><span class='theme-accent-color'>Les</span> Marques</h2>
                        <hr class="thin-hr">
                        <hr class="thin-hr">
                        <div class='row'>
                            <div class='col-xs-3'>
                                <img src='assets/img/marques/auchan.png' class='img-responsive'>
                            </div>
                            <div class='col-xs-3'>
                                <img src='assets/img/marques/marionaud.jpg' class='img-responsive'>
                            </div>
                            <div class='col-xs-3'>
                                <img src='assets/img/marques/fanprix.png' class='img-responsive'>
                            </div>
                            <div class='col-xs-3'>
                                <img src='assets/img/marques/casino.png' class='img-responsive'>
                            </div>
                        </div>
                        <p class="mt30"><a href="index.php?page=marques" class="btn btn-primary btn-red page-scroll">PLUS DE MARQUES</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="top-border-me opaqued" data-image-src="assets/img/bg/bg3.jpg" data-speed="0.8">
        <div class="section-inner">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb100">
                        <h2 class="section-heading">Top <span class="theme-accent-color">Produits</span></h2>
                        <?php foreach($keywordData as $keyword) {
                            echo "<a href='index.php?page=search/".$keyword->keyword."'>".$keyword->keyword."</a><br>";
                        }?>
                        <hr class="thin-hr">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<?php
require "include/footer.view.php";
?>
