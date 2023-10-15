<!--=================================
 header -->

<header id="header" class="header fancy">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 xs-mb-10">
                    <div class="topbar-call text-left">
                        <ul>
                            <li><i class="fa fa-envelope-o theme-color"></i> info@delisoft.ca</li>
                            <li><i class="fa fa-phone"></i> <a href="tel:+4503327577"> <span>450-332-7577</span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-social text-end">
                        <ul>
                            <li><a aria-label="Facebook" href="#"><span class="ti-facebook"></span></a></li>
                            <li><a aria-label="Instagram" href="#"><span class="ti-instagram"></span></a></li>
                            <li><a aria-label="Twitter" href="#"><span class="ti-twitter"></span></a></li>
                            <li><a aria-label="Linkedin" href="#"><span class="ti-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div class="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <!-- menu start -->
                    <nav id="menu" class="mega-menu">
                        <!-- menu list items container -->
                        <section class="menu-list-items">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="<?= $url . $meta['accueil'][3] ?>"><img src="<?PHP echo $url ?>/images/favicon.ico" alt="logo"></a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <div class="menu-bar">
                                <ul class="menu-links">
                                    <li <?php if ($_GET["page"] === "accueil"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['accueil'][3] ?>">Accueil</a></li>
                                    <li <?php if ($_GET["page"] === "a-propos"): ?> class="active" <?php endif;?>><a href="#">A Propos<i class="fa fa-angle-down fa-indicator"></i></a>
                                        <ul class="drop-down-multilevel left-side">
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>">À Propos</a></li>
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>#">Mettre une page</a></li>
                                            <li><a href="<?= $url . $meta['a-propos'][3] ?>#">Mettre une page</a></li>
                                        </ul>
                                    </li>
                                    <li <?php if ($_GET["page"] === "services"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['services'][3] ?>"</a></li>
                                    <li <?php if ($_GET["page"] === "realisations"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['realisations'][3] ?>"</a></li>
                                    <li <?php if ($_GET["page"] === "contact"): ?> class="active" <?php endif;?>><a href="<?= $url . $meta['contact'][3] ?>"</a></li>

                                </ul>

                            </div>
                        </section>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- menu end -->
</header>

<!--=================================
 header -->