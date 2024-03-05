<?php

$province = $_GET['province'];
$town = $_GET['town'];
$service = $_GET['service'];
$townclean = str_replace('-', ' ', $town);
$serviceclean = str_replace('-', ' ', $service);
$valueclean = str_replace('-', ' ', $value);

?>


<section class="page-title bg-overlay-black-60 parallax"
         style="background-image: url(<?= $url ?>images/bg/page-title.jpg); padding-top:180px; padding-bottom: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1 class="text-uppercase"><?= $serviceclean ?> <?= $townclean ?></h1>
                </div>
                <ul class="page-breadcrumb" style="padding-top: 10px !important;">
                    <li><a href="<?= $url . $meta['accueil'][3] ?>">Accueil</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span><?= $serviceclean ?> <?= $townclean ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</section>


<section class="page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 sm-mt-30">
                <div class="section-title line lef mb-20">
                    <h2 class="title"><?= $serviceclean ?> <?= $townclean ?></h2>
                    <p class="mt-30">Les meilleurs soins possibles, <span
                                class="theme-color">un maximum de confort</span></p>
                </div>
                <p>Notre centre dentaire regroupe huit chirurgiens-dentistes et six hygiénistes pour offrir des soins
                    dentaires complets, en utilisant une technologie des plus avancées. Notre équipe est constamment à la
                    recherche de perfectionnement et la formation continue est essentielle afin de mieux servir nos
                    patients. Votre clinique dentaire à Montréal.</p>

                <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">
                    Prendre rendez-vous <i class="fa fa-angle-right"></i></a>

            </div>
        </div>
    </div>
</section>


<section class="carousel-ville">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel" data-items="4" data-md-items="4" data-sm-items="3" data-xs-items="3"
                     data-xx-items="1">

                    <?php foreach ($array1 as $key => $value) {
                        $valueclean = str_replace('-', ' ', $value);
                        ?>

                        <div class="item">
                            <a href="<?= $url ?><?= $value; ?>/<?= $town ?>/"><?= $valueclean; ?></a>
                        </div>

                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="white-bg page-section-ptb">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-sm-6 border-right pl-0 pl-sm-40">
                <div class="feature-text p-4 xs-pt-0">
                    <div class="feature-icon mb-15">
                        <img class="img-fluid" src="<?= $url ?>images/icons/urgence.png"
                             alt="Urgence dentaire Montréal">
                    </div>
                    <div class="feature-info">
                        <h1 class="seo-h5">Urgence dentaire Montréal</h1>
                        <p>Urgence dentaire Montréal. Vous avez une dent douloureuse, une urgence dentaire ? Ne tardez
                            pas à nous appeler.</p>
                        <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous <i
                                    class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 border-right pl-0 pl-sm-40">
                <div class="feature-text p-4">
                    <div class="feature-icon mb-15">
                        <img class="img-fluid" src="<?= $url ?>images/icons/esthetique.png"
                             alt="Urgence dentaire Montréal">
                    </div>
                    <div class="feature-info">
                        <p class="seo-h5">ESTHÉTIQUE</p>
                        <p>Allez-y, souriez librement.Découvrez nos services dentaires pour un sourire radieux</p>
                        <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous <i
                                    class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 border-right pl-0 pl-sm-40">
                <div class="feature-text p-4">
                    <div class="feature-icon mb-15">
                        <img class="img-fluid" src="<?= $url ?>images/icons/implantologie.png"
                             alt="Urgence dentaire Montréal">
                    </div>
                    <div class="feature-info">
                        <p class="seo-h5">IMPLANTOLOGIE</p>
                        <p>Un implant dentaire fait office de racine lorsque vous désirez remplacer une dent
                            manquante</p>
                        <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous <i
                                    class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="feature-text p-4 xs-pb-0">
                    <div class="feature-icon mb-15">
                        <img class="img-fluid" src="<?= $url ?>images/icons/orthodontie.png"
                             alt="Urgence dentaire Montréal">
                    </div>
                    <div class="feature-info">
                        <p class="seo-h5">ORTHODONTIE</p>
                        <p>L’orthodontie permet d’améliorer non seulement la santé, mais aussi l’estime de soi et la
                            qualité de vie.</p>
                        <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous <i
                                    class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="about-05-split split-section gray-bg page-section-ptb" id="economique">
    <div class="side-background">
        <div class="col-lg-6 img-side img-right">
            <div class="img-holder img-cover bg-center-cover"
                 style="background-size:cover; background-image: url(<?= $url ?>images/implant-accueil.jpg);">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 sm-mb-30">
                <div class="shop-split-content">
                    <h3 class="seo-h6"><?= $serviceclean ?> <?= $townclean ?></h3>
                    <p class="h2 mt-10">LES MEILLEURS SOINS POSSIBLES, <span
                                class="theme-color">UN MAXIMUM DE CONFORT</span></p>
                    <p>Notre centre dentaire regroupe huit chirurgiens-dentistes et six hygiénistes pour offrir des
                        soins dentaires complets, en utilisant une technologie des plus avancées.Notre équipe est
                        constamment à la recherche de perfectionnement et la formation continue est essentielle afin de
                        mieux servir nos patients. Votre clinique dentaire à Montréal.</p>
                    <a class="button icon-color" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous <i
                                class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-05-split split-section gray-bg page-section-ptb" id="familial">
    <div class="side-background">
        <div class="col-lg-6 img-side img-left">
            <div class="img-holder img-cover bg-center-cover"
                 style="background-size:cover; background-image: url(<?= $url ?>images/orthodontie-accueil.jpg);">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-5 sm-mt-30">
                <div class="shop-split-content">
                    <h4 class="seo-h6"><?= $serviceclean ?> <?= $townclean ?></h4>
                    <div class="seo-h2 mt-10">DENTISTERIE POUR<span class="theme-color"> L'ENFANT</span></div>
                    <p>La première visite chez le dentiste peut se faire dès l’apparition des premières dents, ou au
                        plus tard dans les six mois suivants, soit vers l’âge d’un an. Le but ici n’est pas forcément de
                        traiter l’enfant, mais plutôt de le familiariser avec l’environnement d’une clinique
                        dentaire.</p>
                    <p>Dans un but préventif pour votre enfant, le dentiste vérifiera :</p>
                    <ul class="list list-mark">
                        <li> L’évolution de la croissance de ses mâchoires</li>
                        <li> La position de ses dents</li>
                        <li> La position de sa langue lors de la déglutition</li>
                    </ul>
                    <a class="button icon-color pt-10 pb-10" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous
                        <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-05-split split-section gray-bg page-section-ptb" id="travailleurs">
    <div class="side-background">
        <div class="col-lg-6 img-side img-right">
            <div class="img-holder img-cover bg-center-cover"
                 style="background-size:cover; background-image: url(<?= $url ?>images/cerec2-accueil.jpg); background-position: left center;">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 sm-mb-30">
                <div class="shop-split-content">
                    <h5 class="seo-h6"><?= $serviceclean ?> <?= $townclean ?></h5>
                    <div class="seo-h2 mt-10">APRÈS UNE<span class="theme-color"> EXTRACTION DENTAIRE</span></div>
                    <p>Mordez sur la compresse que nous vous avons remise pendant 30 minutes. Si le saignement persiste,
                        recommencez avec une nouvelle compresse pendant encore 30 minutes. Un sac de thé imbibé d’eau
                        peut être placé sur la plaie pendant 20 minutes. Le tanin qu’il contient créé un effet
                        coagulant. S’il y a lieu, prendre vos médicaments tels que prescrits par le dentiste. Si votre
                        joue est gonflée, appliquez de la glace en évitant le contact direct avec la peau à raison de 15
                        minutes à toutes les heures.</p>
                    <a class="button icon-color pt-10 pb-10" href="<?= $url . $meta['contact'][3] ?>">Contactez-nous<i
                                class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>