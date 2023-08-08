<?PHP

$descriptionbasefr = "CeciEstLaDescriptionDeBase";
$keywordsbasefr = "CeuxCiSontLesKeywordsDeBase";

$meta['accueil'][0] ="Accueil - $namebase";
$meta['accueil'][1] ="$descriptionbasefr";
$meta['accueil'][2] ="$keywordsbasefr";
$meta['accueil'][3] ="";

$meta['a-propos'][0] ="À propos - $namebase";
$meta['a-propos'][1] ="$descriptionbasefr";
$meta['a-propos'][2] ="$keywordsbasefr, à propos,";
$meta['a-propos'][3] ="a-propos/";

$meta['services'][0] ="Services - $namebase";
$meta['services'][1] ="$descriptionbasefr";
$meta['services'][2] ="$keywordsbasefr, services,";
$meta['services'][3] ="nos-services/";

$meta['realisations'][0] ="Réalisations - $namebase";
$meta['realisations'][1] ="$descriptionbasefr";
$meta['realisations'][2] ="$keywordsbasefr, réalisations,";
$meta['realisations'][3] ="nos-realisations/";

$meta['contact'][0] ="Contact - $namebase";
$meta['contact'][1] ="Contactez un employé de notre équipe d'expert dès maintenant.";
$meta['contact'][2] ="contacter, contact,";
$meta['contact'][3] ="contactez-nous/";

$meta['contact-send'][0] ="Message envoyé - $namebase";
$meta['contact-send'][1] ="Contactez un employé de notre équipe d'expert dès maintenant.";
$meta['contact-send'][2] ="contacter, contact,";
$meta['contact-send'][3] ="contact-send/";


if ($page=="seo"){  
$titre ="SEO ".$town."- $namebase";
$description ="SEO à ".$town." $namebase. $descriptionbasefr" ;
$keywords = "$keywordsbasefr, $namebase".$town.",";
 }
else {
	
$titre= $meta[$page][0];
$description = $meta[$page][1];
$keywords = $meta[$page][2];
}