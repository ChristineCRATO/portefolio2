<?php
/**
 * 
 * @package WordPress
 * @subpackage Portefolio "Header"
 * @since Portefolio 1.0
 * @author Christine CRATO
 * 
 */
?>
<?php
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <title>Christine CRATO</title>

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="menuHeader" class="menuHeader">
                <div class="menuLogo">
                    <a href="<?php echo home_url(); ?>">
                    <span class="logoText">Christine CRATO</span>
                    </a>
                </div>
            <!-- Bloc Menu VSD Responsive -->
            <div class="menuBlock">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <!-- Using wp_nav_menu function to display WP menu -->
                <nav id="menuNav" class="menuNav">
                    <?php wp_nav_menu(
                        array(
                        'theme_location' => 'menuHeader',
                        'menu_class' => 'menuHeader', // Custom Menu
                        ));
                    ?>
                </nav>
        </header>

        <?php wp_body_open(); ?>
    