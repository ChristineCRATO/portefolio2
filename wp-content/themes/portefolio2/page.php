

<?php get_header();?>

<main>

    <?php

    if (have_posts()) :
        while (have_posts()) : the_post();
            // the_title('<h1>', '</h1>'); "Delete Page Title"
            the_content();
        endwhile;

        else :
            echo '<p>aucune page trouvé</p>';

    endif;

    // Templates Integration //
    if (is_front_page()) {

        
        // Integration A Propos Template //
        get_template_part('templates/a-propos');

        // Integration Competences Template //
        get_template_part('templates/competences');

        // Integration Portefolio Template //
        get_template_part('templates/portefolio');

        // Integration Filter Template //
        //get_template_part('templates/filter');//

        // Integration photo_block_accueil //
        //get_template_part('templates/photo_block_accueil');//

        // Integration "Load More" Button Template //
        //get_template_part('templates/load-more');// 
    }

    
    ?>
</main>

<?php get_footer(); ?>
