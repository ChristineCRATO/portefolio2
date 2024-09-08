<?php 
/**
 * Template Name: Robbie LENS Photographie
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio "Robbie LENS Photographie""
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1-lens.jpg" alt="Robbie LENS Photographie">
            </a>
    </div>
    
        <h1 class="projetTitle1">Robbie LENS Photographie</h1>
        <h2 class="projetTitle2">Création d’un Site Web en HTML et CSS</h2>

            <p class="projetP">Un photographe souhaite mettre en ligne son portfolio, ses tarifs et ses photos. Il désire un site simple, fonctionnel et épuré pour présenter son travail de manière professionnelle. Le site doit permettre de naviguer facilement entre les différentes pages tout en offrant une expérience fluide et agréable à ses visiteurs.</p>
          
        <h2 class="projetTitle2">Étapes Réalisées :</h2>
            <p class="projetP"><u>1. Structure et Navigation :</u>
<br>* Création de trois pages : Accueil, À propos et Portfolio.
<br>* Mise en place de liens de navigation entre les pages pour une expérience fluide.
<br>* Ajout d’un logo cliquable redirigeant vers la page d’accueil.
<br><u>2. Page d’Accueil :</u>
<br>* Intégration d’une photo, d’une présentation concise du photographe et d’un bouton de contact.
<br>* Affichage des derniers projets réalisés avec un formulaire de contact fonctionnel.
<br>* Ajout de deux liens vers les réseaux sociaux.
<br><u>3. Page À Propos :</u>
<br>* Présentation du photographe avec une brève description et les services proposés.
<br>* Inclusion d’un tableau détaillant les tarifs des prestations.
<br>* Ajout d’un bouton redirigeant vers la page Portfolio.
<br><u>4.Page Portfolio :</u>
<br>* Création d’une galerie photo mettant en avant les œuvres du photographe.
<br>* Implémentation d’un mode plein écran pour chaque photo lorsque l’on clique dessus.</p>
        <h2 class="projetTitle2">Résultat :</h2>
        <p class="projetP">Le site final est à la fois simple, épuré et entièrement codé en HTML et CSS. Malgré sa simplicité, il reste fonctionnel et intuitif, offrant une navigation fluide et agréable. Les trois pages principales sont bien structurées, avec des boutons de contact clairs et une galerie attrayante. Le design minimaliste met en valeur le contenu tout en assurant une expérience utilisateur optimale.</p>

        <div class="siteLink">
            <h2 class="projetTitle2">Voir le site : 
                <a href="https://christinecrato.github.io/RobbieLensPhotographie/" target="_blank">https://christinecrato.github.io/RobbieLensPhotographie/</a>
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
                <a href="https://github.com/ChristineCRATO/RobbieLensPhotographie" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/github.png" alt="GitHub">
                </a>
            </div>
        </div>
    </div>
  </section>

<?php
get_footer();
?>

