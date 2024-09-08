<?php 
/**
 * Template Name: Matrix Girl Kawaï
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "Kawaï""
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kawai.jpg" alt="Matrix Girly KawaÏ">
            </a>
    </div>
    
        <h1 class="projetTitle1">Matrix Girly Kawaï</h1>
        <h2 class="projetTitle2">Animation « Matrix Girly » en HTML, CSS et JavaScript
        <br>(From Scratch)</h2>

            <p class="projetP"></p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP">1. Conception et Design :
* Création d’une animation inspirée de l’effet Matrix, revisitée avec un fond rose pour un style girly et kawaï.
<br>2. Développement Front-End :
<br>* Réalisation du projet entièrement from scratch en HTML, CSS et JavaScript.
<br>* Mise en place d’animations pour faire défiler des mots et des photos de haut en bas.
<br>3. Personnalisation Visuelle :
<br>* Choix de couleurs et d’éléments en accord avec le thème kawaii, incluant un fond rose vif et des animations fluides.</p>
        
    <h2 class="projetTitle2">Résultat :</h2>
        <p class="projetP">Le résultat est une version originale de l’univers Matrix dans un style girly et coloré. Les mots et photos descendent avec fluidité sur un fond rose, créant une ambiance dynamique et mignonne. L’animation est simple mais immersive, capturant parfaitement l’esthétique kawaii recherchée.</p>
        
        <div class="siteLink">
            <h2 class="projetTitle2">Voir le site : 
                <a href="https://christinecrato.github.io/matrix-girly-kawa/" target="_blank">https://christinecrato.github.io/matrix-girly-kawa/</a>
            </h2>
        </div>
        
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
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/javascript.png" alt="Javascript">
                </a>
                </div>
            </div>
            <div class="projetLinks">
                <h2 class="projetTitle2">Aller vers GitHub</h2>
                <a href="https://github.com/ChristineCRATO/matrix-girly-kawa" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a>
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>