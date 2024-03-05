<?php
$page = $_GET["page"];
$lang = $_GET["lang"];

// Mettre l'URL du site
$url = "https://z-test-raph-delisoft.temoignagesvideo.com/";

// Mettre le nom du site
$namebase = "NomDeLaCompagnie";

include("lang/" . $lang . ".php");
include("lang/lang.php");
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <title><?= $titre ?></title>
    <meta name="author" content="Delisoft : https://delisoft.ca">
    <meta name="description" content="<?= $description ?>">
    <meta itemprop="description" content="<?= $description ?>">
    <meta name="keywords" content="<?= $keywords ?>">


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= $url ?>images/favicon.ico">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/plugins-css.min.css">

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/typography.css">

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/shortcodes/shortcodes.min.css">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/responsive.min.css">

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="<?= $url ?>css/skins/skin-yellow.css" data-style="styles"/>

    <!-- jquery -->
    <script src="<?= $url ?>js/jquery-3.6.0.min.js"></script>

    <!-- slider revolution -->
    <!-- SI VOUS NE L'UTILISEZ PAS METTRE EN COMMENTAIRE -->
    <link rel="stylesheet" type="text/css" media="all"
          href="https://revolution.delisoft.ca/revslider/public/assets/css/settings.css">
    <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script id="revslider_script" src="https://revolution.delisoft.ca/assets/js/revslider.js"></script>

</head>

<body>

<div class="wrapper">


    <?php

    $titrePage = [
        'fr' => [
            'header' => 'header.php',
            'footer' => 'footer.php',

            'accueil' => 'accueil.php',
            'a-propos' => 'a-propos.php',
            'services' => 'services.php',
            'realisations' => 'realisations.php',
            'contact' => 'contact.php',

            // Mettre les autres pages ici
            'seo' => null
        ],
        'en' => [
            'header' => 'en/header-en.php',
            'footer' => 'en/footer-en.php',

            'accueil' => 'en/accueil-en.php',
            'a-propos' => 'en/a-propos-en.php',
            'services' => 'en/services-en.php',
            'realisations' => 'en/realisations-en.php',
            'contact' => 'en/contact-en.php',

            // Mettre les autres pages ici
            'seo' => null
        ]
    ];

    include($titrePage[$lang]['header']);

    include($titrePage[$lang][$page]);

    include($titrePage[$lang]['footer']);

    ?>


</div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- plugins-jquery -->
<script src="<?= $url ?>js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>const plugin_path = '<?= $url ?>js/';</script>

<!-- custom -->
<script src="<?= $url ?>js/custom.js"></script>

</body>
</html>