<?php 
/**
 * Template Name: Planty
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "Planty""
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6-Planty.jpg" alt="Planty">
            </a>
    </div>
    
        <h1 class="projetTitle1">Planty</h1>
        <h2 class="projetTitle2">Création du Site Web pour Planty, Marque de Boissons Énergisantes</h2>

            <p class="projetP">Planty, une jeune marque de boissons énergisantes à base de plantes, m’a confié la création de son site internet. L’objectif principal était de concevoir un site vitrine permettant de présenter les produits de la marque, valoriser ses activités et générer des commandes.</p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP">Installation et configuration de WordPress, ainsi que choix et personnalisation d’un thème enfant.
          Intégration de la maquette fournie par Figma.
          Développement des pages et des fonctionnalités spécifiques, telles que le système de précommande et le formulaire de contact.
          Optimisation SEO pour améliorer le référencement.
          Tests et validations du site.</p>
        <h2 class="projetTitle2">Résultat :</h2>
        <p class="projetP">Le site web développé pour Planty est moderne, attractif et conforme aux attentes de la marque. Il se distingue par son design épuré et élégant, une navigation fluide, et des fonctionnalités clés telles que le système de précommande et le formulaire de contact. Le site est également optimisé pour le SEO, assurant une meilleure visibilité sur les moteurs de recherche, et est entièrement responsive, offrant une expérience utilisateur cohérente sur tous les types d’écrans.</p>

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
                <h2 class="projetTitle2">Aller vers GitHub</h2>
                <a href="https://github.com/ChristineCRATO/Planty1" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a>
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>