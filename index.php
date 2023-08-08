<?PHP
$page = $_GET["page"];
$lang = $_GET["lang"];
if ($page == "seo") {
    $town = $_GET["town"];
}

$url = "https://z-test2.temoignagesvideo.com/";

$namebase = "NomDeLaCompagnie";

include("lang/" . $lang . ".php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
    <title><?php echo $titre ?></title>
    <meta name="author" content="Delisoft : https://delisoft.ca">
    <meta name="description" content="<?php echo $description ?>">
    <meta itemprop="description" content="<?php echo $description ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">


    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $url ?>images/favicon.ico">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,500&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
          rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/plugins-css.min.css">

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/typography.css">

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/shortcodes/shortcodes.min.css">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/style.css">

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo $url ?>css/responsive.min.css">

    <!-- Style customizer -->
    <link rel="stylesheet" type="text/css" href="<?PHP echo $url ?>css/skins/skin-yellow.css" data-style="styles"/>

    <!-- jquery -->
    <script src="<?PHP echo $url ?>js/jquery-3.6.0.min.js"></script>

    <!-- slider revolution -->
    <link rel="stylesheet" type="text/css" media="all"
          href="https://revolution.delisoft.ca/revslider/public/assets/css/settings.css">
    <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="https://revolution.delisoft.ca/revslider/public/assets/js/jquery.themepunch.revolution.min.js"></script>
    <script id="revslider_script" src="https://revolution.delisoft.ca/assets/js/revslider.js"></script>

</head>

<body>

<div class="wrapper">

    <!--=================================
     preloader -->

    <!--<div id="pre-loader">
        <img src="<?PHP /*echo $url */ ?>images/pre-loader/loader-06.svg" alt="Chargement">
    </div>-->

    <!--=================================
     preloader -->


    <?PHP if ($lang == "fr") {
        include("header.php");
    } else {
        include("en/header-en.php");
    } ?>



    <?PHP

    if ($page == "accueil") {
        if ($lang == "fr") {
            include("revolutionslider.php");
            include("accueil.php");
        } else {
            include("en/revolutionslider-en.php");
            include("en/accueil-en.php");
        }
    }

    if ($page == "a-propos") {
        if ($lang == "fr") {
            include("a-propos.php");
        } else {
            include("en/a-propos-en.php");
        }
    }

    if ($page == "services") {
        if ($lang == "fr") {
            include("services.php");
        } else {
            include("en/services-en.php");
        }
    }

    if ($page == "realisations") {
        if ($lang == "fr") {
            include("realisations.php");
        } else {
            include("en/realisations-en.php");
        }
    }

    if ($page == "contact") {
        if ($lang == "fr") {
            include("contact.php");
        } else {
            include("en/contact-en.php");
        }
    }

    ?>

    <?PHP if ($lang == "fr") {
        include("footer.php");
    } else {
        include("en/footer-en.php");
    } ?>


</div>


<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- plugins-jquery -->
<script src="<?PHP echo $url ?>js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>const plugin_path = '<?PHP echo $url ?>js/';</script>

<!-- custom -->
<script src="<?PHP echo $url ?>js/custom.js"></script>

</body>
</html>