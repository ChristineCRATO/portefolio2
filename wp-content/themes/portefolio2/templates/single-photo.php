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

<!-- SINGLE-Projet -->
 
<?php
// Retrieve ACF Fields
$projetID = get_field('Projet');
$slogan = get_field('Slogan');
$competences = get_field('Competences');
$lien_site = get_field('Lien_du_site');
$lien_git = get_field('Lien_git');
$descriptif = get_field('Descriptif');

// Retrieve Taxnomie Terms
$competence = get_the_terms(get_the_ID(), 'competence');

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
                <p class="slogan"><?php echo esc_html($slogan); ?></p>
                <p class="competences">Compétences : <?php echo esc_html($competence_name); ?></p>
                <p class="lien_site">Lien : <a href="<?php echo esc_url($lien_site); ?>" target="_blank"><?php echo esc_html($lien_site); ?></a></p>
                <p class="lien_git">GitHub : <a href="<?php echo esc_url($lien_git); ?>" target="_blank"><?php echo esc_html($lien_git); ?></a></p>
                <p class="descriptif"><?php echo esc_html($descriptif); ?></p>

                <div class="competences">
                    <?php if ($competence_terms) : ?>
                        <?php foreach ($competence_terms as $term) : ?>
                            <?php
                            // Retrieve the image field for this term
                            $term_image = get_field('image_field_name', 'term_' . $term->term_id);
                            ?>
                            <?php if ($term_image) : ?>
                                <div class="competence">
                                    <img src="<?php echo esc_url($term_image); ?>" alt="<?php echo esc_attr($term->name); ?>">
                                    <p><?php echo esc_html($term->name); ?></p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Aucune Compétence définie.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Bloc -->
    <div class="blocContact">
        <div class="contact">
            <p class="pContact">Cette Projet vous intéresse ?</p>
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
