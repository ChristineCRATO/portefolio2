<?php 
/**
 * Template Name: Ridding Cities
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "Ridding Cities""
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2-riddingCities.jpg" alt="Ridding Cities">
            </a>
    </div>
    
        <h1 class="projetTitle1">Ridding Cities</h1>
        <h2 class="projetTitle2">Refonte du Site et Ajout d’une Section Spécifique</h2>

            <p class="projetP">Lors de mes débuts en développement HTML, j’ai participé à la refonte du site web d’une association. Mon rôle principal consistait à ajouter une nouvelle section dédiée aux fondateurs, mettant en valeur leurs noms et leurs photos de manière élégante et intuitive. Grâce au code HTML, j’ai intégré cette section de façon fluide, en respectant l’harmonie visuelle établie par la maquette conçue sur Figma par un graphiste.</p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP"><u>1. Ajout d’une Section Dédiée</u>
<br><u>2. Optimisation des Boutons</u>
<br>Une autre tâche cruciale de ce projet a été de modifier les boutons du site en leur appliquant des classes CSS spécifiques déjà créées. Plutôt que de modifier directement le code CSS, j’ai choisi de travailler sur le HTML en attribuant ces classes aux boutons. Cela a permis d’apporter des améliorations visuelles et de maintenir une cohérence dans le design du site, tout en minimisant la complexité du code.
<br><u>3. Collaboration Harmonieuse</u>
        <h2 class="projetTitle2">Résultat :</h2>
            <p class="projetP">Pour réaliser ce projet, j’ai pu m’appuyer sur la maquette Figma créée par le graphiste, ce qui a grandement facilité l’alignement visuel du site. Cette expérience m’a également permis de comprendre l’importance de la collaboration entre le design et le développement, ainsi que la manière dont HTML, CSS et la maquette peuvent s’intégrer harmonieusement pour créer une expérience utilisateur cohérente et attrayante.</p>
    
        <div class="siteLink">
            <h2 class="projetTitle2">Voir le site : 
                <a href="https://christinecrato.github.io/RidingCities/" target="_blank">https://christinecrato.github.io/RidingCities/</a>
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
                
                </div>
            </div>
            <div class="projetLinks">
                <h2 class="projetTitle2">Aller vers GitHub</h2>
                <a href="https://github.com/ChristineCRATO/RidingCities" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a>
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>