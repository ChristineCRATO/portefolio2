i<?php 
/**
 * Template Name: The Artbox
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "The Artbox""
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5-artbox.jpg" alt="The Artbox">
            </a>
    </div>
    
        <h1 class="projetTitle1">The Artbox</h1>
        <h2 class="projetTitle2">Refonte du site « The Artbox » en PHP</h2>

            <p class="projetP">J’ai été mandaté par la galerie d’art moderne « The Artbox » pour refondre leur site web statique en HTML/CSS et le transformer en un site dynamique utilisant PHP. L’objectif principal était de simplifier la mise à jour du contenu.</p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP">* Analyse du site existant : J’ai examiné la structure HTML/CSS du site en identifiant les éléments récurrents et les sections du code pouvant être optimisées et factorisées.
<br>* Installation de PHP et configuration du projet : J’ai installé PHP ainsi qu’un serveur web local, puis j’ai créé un nouveau projet PHP. J’ai importé l’ensemble du code HTML et CSS dans ce projet et configuré le serveur pour un bon fonctionnement.
<br>* Factorisation du code avec PHP : J’ai regroupé les éléments répétitifs (comme le header, le footer et les blocs de contenu) dans des fichiers PHP distincts. Ces fichiers ont ensuite été inclus dans les différentes pages du site. J’ai également utilisé des variables et des boucles pour rendre le contenu dynamique et plus facilement modifiable.
<br>* Tests et optimisation du site : J’ai testé le site sur le serveur local pour m’assurer de son bon fonctionnement. Ensuite, j’ai optimisé le code PHP afin d’améliorer les performances générales du site. Une vérification de la compatibilité avec différents navigateurs a également été effectuée.</p>
        <h2 class="projetTitle2">Résultat :</h2>
        <p class="projetP">Le site « The Artbox » est désormais un site web dynamique, où la mise à jour du contenu est nettement plus simple. Les modifications peuvent être effectuées sans toucher au code source, ce qui représente un gain de temps considérable pour l’équipe.</p>

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
                </div>
            </div>
            <div class="projetLinks">
                <h2 class="projetTitle2">Aller vers GitHub</h2>
                <a href="https://github.com/ChristineCRATO/Artbox" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a>
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>
