<!--=================================
 Hero -->

<section class="page-title bg-overlay-black-40 parallax realisations-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-title-name">
                    <h1>Nos réalisations</h1>
                    <p><?= $namebase ?></p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 Galerie -->

<section class="mt-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="isotope full-screen columns-5 popup-gallery">

                    <!--il faut mettre le nb de photo-->
                    <?php for ($row = 1; $row <= 7; $row++): ?>
                        <div class="grid-item">
                            <div class="portfolio-item">
                                <!--nommé les images realisations- "un numéro de 1 à ..."-->
                                <img src="<?= $url ?>images/realisations/realisations-<?= $row ?>.jpg" alt="Réalisation">
                                <a class="popup portfolio-img" href="<?= $url ?>images/realisations/realisations-<?= $row ?>.jpg"><i
                                        class="fa fa-arrows-alt"></i></a>
                            </div>
                        </div>
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</section>