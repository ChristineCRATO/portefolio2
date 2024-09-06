<?php
/**
 * 
 * @package WordPress
 * @subpackage Portefolio "Footer"
 * @since Portefolio 1.0
 * @author Christine CRATO
 * 
 */
?>

    <!-- Using wp_nav_menu function to display WP menu -->
    <footer id="menuFooter" class="menuFooter">
            <?php wp_nav_menu(
                array(
                'theme_location' => 'menuFooter',
                'menu_class' => 'menuFooter',
                'container' => 'ul', // Without Div //
                )
            );
            ?>
            <p class="copyright">Copyright @ 2024 - Christine CRATO</p>
    </footer>

    <!-- Launch Contact Modal -->
    <?php get_template_part('/templates/modal'); ?>
    <?php get_template_part('/templates/lightbox'); ?>

    <?php wp_footer(); ?>
    </body>
</html>