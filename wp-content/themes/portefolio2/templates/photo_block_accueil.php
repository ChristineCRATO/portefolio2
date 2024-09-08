<?php 
/**
 * Template Name: photo_block_accueil
 * 
 * @package WordPress
 * @subpackage Portefolio "photo_block_accueil"
 * @since Portefolio 1.0.0
 * @author Christine CRATO
 * 
 */
?>

<!-- Home Page Photo Block -->
<div class="fadeInUp">
    <div id="portefolio">
        <h2>Mon Portefolio</h2>
    </div>

    <div class="initialBlock">
        
    <?php
    // Get 8 Photos for Initial Block
                $args = array(
                    'post_type' => 'projet',
                    'posts_per_page' => 8,
                    'order' => 'DESC',
                );
        
                // Init WP Query
                $photo_block = new WP_Query($args);
                
                // Check Photo
                if ($photo_block->have_posts()) :
                    
                    // Define Arguments Photo Block
                    set_query_var('photo_block_args', array('content' => 'page'));
                    
                    // Photo LOOP
                    while ($photo_block->have_posts()) :
                        $photo_block->the_post();
                        // Use Get Template with Default Format (fallback)
                        get_template_part('templates/photo_block', get_post_format());
                    endwhile;
                    // Reset Query
                    wp_reset_postdata();
                    else :
                        // Message Photo Not Found
                        echo 'Aucun Projet trouvé.';
                    endif;
                    ?>
    </div>
</div>