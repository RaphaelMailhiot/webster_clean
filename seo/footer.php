<section class="carousel-ville">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel" data-items="5" data-md-items="5" data-sm-items="4" data-xs-items="3"
                     data-xx-items="1">

                    <?php foreach ($array1 as $x) {
                        foreach ($array2 as $key => $value) {
                            $valueclean = str_replace('-', ' ', $value);

                            ?>

                            <div class="item">
                                <a href="<?= $url ?><?= $x; ?>/<?= $value; ?>/"><?= $valueclean; ?></a>
                            </div>

                            <?php
                        }
                    } ?>

                </div>
            </div>
        </div>
    </div>
</section>