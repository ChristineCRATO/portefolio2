<?php 
/**
 * Template Name: single-photo
 * 
 * @package WordPress
 * @subpackage Portefolio "Single-photo"
 * @since Portefolio 1.0.0
 * @author Christine CRATO
 * 
 */
?>
<?php
echo "Bonjour, single projet!";
?>

<!-- SINGLE-PHOTO -->
 
<?php
// Retrieve ACF Fields
$projetID = get_field('Projet'); // Retrieve Projet Title

// Retrieve Taxnomie Terms
$competence = get_the_terms(get_the_ID(), 'competence');
    $competence_name = !empty($competence[0]) ? $competence[0]->name : 'Non défini';

// Previous and Next Post URL
$next_projet = get_next_post();
$previous_projet = get_previous_post();
$previous_thumbnail = $previous_projet ? get_the_post_thumbnail_url($previous_projet->ID, 'thumbnail') : '';
$next_thumbnail = $next_projet ? get_the_post_thumbnail_url($next_projet->ID, 'thumbnail') : '';

?>

<!-- Site : Single-photo Page -->
<section class="pageProjet">
    <div class="containerProjet">
        <div class="infoProjet">
            <div class="contentPhoto">
                <img src="<?php echo esc_url($projetID); ?>" alt="<?php the_title_attribute(); ?>">
            </div>
            <div class="detailProjet">
                <h2><?php echo esc_html(get_the_title()); ?></h2>
                <div class="taxoProjet">
                    <p>Compétences : <?php echo esc_html($competence_name); ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Bloc -->
    <div class="blocContact">
        <div class="contact">
            <p class="pContact">Cette photo vous intéresse ?</p>
            <button id="contact-modal" data-reference="<?php echo esc_html($reference); ?>">Contact</button>
        </div>
        
        <!-- Mini Photos -->
        <div class="miniPhoto">
            <div class="smallPhoto" id="smallPhoto"></div>
            <div class="arrow">
                <?php if (!empty($previous_projet)) : ?>
                    <img class="arrow arrow-left" src="<?php echo get_theme_file_uri() . '/assets/img/leftArrow.png'; ?>" alt="Photo précédente" data-thumbnail-url="<?php echo $previous_thumbnail; ?>" data-target-url="<?php echo esc_url(get_permalink($previous_projet->ID)); ?>">
                <?php endif; ?>
                
                <?php if (!empty($next_projet)) : ?>
                    <img class="arrow arrow-right" src="<?php echo get_theme_file_uri() . '/assets/img/rightArrow.png'; ?>" alt="Photo suivante" data-thumbnail-url="<?php echo $next_thumbnail; ?>" data-target-url="<?php echo esc_url(get_permalink($next_projet->ID)); ?>">
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
