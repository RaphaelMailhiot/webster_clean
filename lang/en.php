<?PHP

$descriptionbaseen = "CeciEstLaDescriptionDeBase";
$keywordsbaseen = "CeuxCiSontLesKeywordsDeBase";

$meta['accueil'][0] ="Accueil - $namebase";
$meta['accueil'][1] ="$descriptionbaseen";
$meta['accueil'][2] ="$keywordsbaseen";
$meta['accueil'][3] ="en/";

$meta['a-propos'][0] ="About - $namebase";
$meta['a-propos'][1] ="$descriptionbaseen";
$meta['a-propos'][2] ="$keywordsbaseen, à propos,";
$meta['a-propos'][3] ="en/about/";

$meta['services'][0] ="Services - $namebase";
$meta['services'][1] ="$descriptionbaseen";
$meta['services'][2] ="$keywordsbaseen, services,";
$meta['services'][3] ="en/our-services/";

$meta['realisations'][0] ="Achievements - $namebase";
$meta['realisations'][1] ="$descriptionbaseen";
$meta['realisations'][2] ="$keywordsbaseen, réalisations,";
$meta['realisations'][3] ="en/our-achievements/";

$meta['contact'][0] ="Contact - $namebase";
$meta['contact'][1] ="Contact an employee of our expert team now.";
$meta['contact'][2] ="contacter, contact,";
$meta['contact'][3] ="en/contact-us/";

$meta['contact-send'][0] ="Message sent - $namebase";
$meta['contact-send'][1] ="Contact an employee of our expert team now.";
$meta['contact-send'][2] ="contact us, contact,";
$meta['contact-send'][3] ="en/contact-send/";

if ($page=="template"){  
$titre ="SEO ".$category."- $namebase";
$description ="SEO at ".$category." $namebase. $descriptionbaseen";
$keywords = "$keywordsbaseen, $namebase".$category.",";
 }
else {
	
$titre= $meta[$page][0];
$description = $meta[$page][1];
$keywords = $meta[$page][2];
}