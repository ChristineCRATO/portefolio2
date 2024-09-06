

<?php get_header();?>

<main>

    <?php
echo "bonjour c'est le milieu de la page php";
    if (have_posts()) :
        while (have_posts()) : the_post();
            // the_title('<h1>', '</h1>'); "Delete Page Title"
            the_content();
        endwhile;

        else :
            echo '<p>aucune page trouvé</p>';

    endif;
echo "heyyy c'est juste avant les templates";
    // Templates Integration
    if (is_front_page()) {

        // Integration Hero Template //
        get_template_part('templates/hero');

        // Integration Filter Template //
        get_template_part('templates/filter');

        // Integration photo_block_accueil //
        get_template_part('templates/photo_block_accueil');

        // Integration "Load More" Button Template //
        get_template_part('templates/load-more');
    }

    echo "on est à la fin du fichier page php";
    ?>
</main>

<?php get_footer(); ?>
