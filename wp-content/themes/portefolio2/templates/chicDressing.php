<?php 
/**
 * Template Name: Chic Dressing
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "Chic Dressing"
 * @since Portefolio 1.0.0
 * @author Christine CRATO
 * 
 */
get_header();
?>


<!-- Détail du Projet Planty -->

<section class="projetPage">
    <div class="projetImg">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7-chicDressing.jpg" alt="Chic Dressing">
            </a>
    </div>
    
        <h1 class="projetTitle1">Chic Dressing</h1>
        <h2 class="projetTitle2">Optimisation d’un Site WordPress Existant</h2>

            <p class="projetP">En tant qu’intégrateur WordPress Freelance, je suis constamment à la recherche de nouvelles opportunités pour mettre mes compétences à profit. Une amie m’a récemment parlé de Sarah, une influenceuse mode très active sur les réseaux sociaux. Sarah avait lancé une boutique en ligne de vêtements et accessoires de luxe de seconde main sur son blog « Chic Dressing », mais elle rencontrait des difficultés à générer du trafic et à améliorer ses ventes. Elle souhaitait optimiser son site pour offrir une meilleure expérience utilisateur, augmenter sa visibilité en ligne et ainsi dynamiser ses activités.
Dans le cadre de ce projet, mon rôle a consisté à améliorer les performances globales du site, à optimiser son référencement (SEO) et à rendre le site plus accessible pour tous les utilisateurs.
J’ai d’abord effectué un audit complet du site pour identifier les points à optimiser. Suite à cela, j’ai installé et configuré plusieurs plugins clés :</p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP">* SEO Press : pour gérer et optimiser le référencement naturel du site, en veillant à la bonne structuration des balises, à l’optimisation des métadonnées et à la création d’un sitemap.
<br>* Autoptimize et WP Super Cache : pour améliorer la vitesse de chargement du site en minimisant les fichiers CSS, JavaScript et HTML, et en mettant en place un système de mise en cache performant.
<br>* EWWW Image Optimizer : pour compresser les images sans perte de qualité, réduisant ainsi le temps de chargement tout en préservant l’esthétique du site.
<br>* En parallèle, j’ai utilisé l’outil « Lighthouse » de Chrome pour analyser et ajuster l’accessibilité, en veillant à ce que le site respecte les bonnes pratiques en matière d’ergonomie, de lisibilité et de navigation pour tous les utilisateurs, y compris ceux ayant des limitations visuelles ou cognitives.</p>
        <h2 class="projetTitle2">Résultat :</h2>
        <p class="projetP">Grâce à ces optimisations, le site « Chic Dressing » bénéficie désormais d’un temps de chargement plus rapide, d’une meilleure visibilité sur les moteurs de recherche et d’une interface utilisateur plus accessible et agréable. Sarah a ainsi pu constater une augmentation du trafic sur son site et une amélioration de l’expérience de ses visiteurs.</p>
        <div class="projetIcon">
            <div class="projetCompetences">
                <h2 class="projetTitle2">Compétences Requises</h2>
                <div class="containerIcon">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/html5.png" alt="HTML5">
                </a>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/css3.png" alt="CSS3">
                </a>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/phpp.png" alt="PHP">
                </a>
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/wordpress.png" alt="WordPress">
                </a>
                </div>
            </div>
            <div class="projetLinks">
            <h2 class="projetTitle3">* Site en Maintenance pour Refonte</h2>
              <!-- site en maintenance pour refonte
                <h2 class="projetTitle2">Aller vers GitHub</h2>
                <a href="https://github.com/ChristineCRATO/Planty1" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a> -->
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>