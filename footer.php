<footer class="footer page-section-pt black-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                    <ul>
                        <li><a href="<?= $url . $meta['accueil'][3] ?>">Accueil</a></li>
                        <li><a href="<?= $url . $meta['a-propos'][3] ?>">À propos</a></li>
                        <li><a href="<?= $url . $meta['services'][3] ?>">Services</a></li>
                        <li><a href="<?= $url . $meta['realisations'][3] ?>">Réalisations</a></li>
                        <li><a href="<?= $url . $meta['contact'][3] ?>">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                    <h6 class="text-white mb-30 mt-10 text-uppercase">Liens utils</h6>
                    <ul>
                        <li><a href="#">Lien1</a></li>
                        <li><a href="#">Lien2</a></li>
                        <li><a href="#">Lien3</a></li>
                        <li><a href="#">Lien4</a></li>
                        <li><a href="#">Lien5</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 xs-mb-30">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Contact</h6>
                <ul class="addresss-info">
                    <li><i class="fa fa-map-marker"></i>
                        <p>Adresse: 17504 Carlton Cuevas Rd, Gulfport, MS, 39503</p></li>
                    <li><i class="fa fa-phone"></i> <a href="tel:4503327577"><span>450 332-7577</span></a></li>
                    <li><i class="fa fa-envelope-o"></i>Courriel: info@delisolft.ca</li>
                </ul>
            </div>
            <div class="col-lg-4 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">S'inscrire à notre infolettre</h6>
                <p>Inscrivez-vous à notre infolettre pour recevoir nos nouvelles et nos offres.</p>
                <div class="footer-Newsletter">
                    <div id="mc_embed_signup_scroll">
                        <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form"
                              name="mc-embedded-subscribe-form" class="validate">
                            <div id="msg"></div>
                            <div id="mc_embed_signup_scroll_2">
                                <input aria-label="adresse courriel" id="mce-EMAIL" class="form-control" type="text" placeholder="Adresse Courriel"
                                       name="email1" value="">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response d-none" id="mce-error-response"></div>
                                <div class="response d-none" id="mce-success-response"></div>
                            </div>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div class="footer-bots-form">
                                <input aria-label="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                            </div>
                            <div class="clear">
                                <button type="submit" name="submitbtn" id="mc-embedded-subscribe"
                                        class="button button-border mt-20 form-button"> S'abonner
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-widget mt-20">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <p class="mt-15"> &copy;<?PHP echo $namebase ?> <span id="copyright"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear().toString()))</script></span>
                        | Tous Droits Réservés | <a href="https://delisoft.ca/" target="_blank">Conception Web Delisoft</a></p>
                </div>
                <div class="col-lg-4 col-md-6 text-end">
                    <div class="footer-widget-social">
                        <ul>
                            <li><a aria-label="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a aria-label="Instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a aria-label="Twitter" href="#"><i class="fa fa-twitter"></i> </a></li>
                            <li><a aria-label="Linkedin" href="#"><i class="fa fa-linkedin"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>