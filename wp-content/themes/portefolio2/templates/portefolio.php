<?php 
/**
 * Template Name: Portefolio
 * 
 * @package WordPress
 * @subpackage Portefolio "Portefolio Section"
 * @since Portefolio 1.0.0
 * @author Christine CRATO
 * 
 */
?>

<!-- Portefolio Section -->

<section class="slidePortefolio fadeInUp">

    <div id="portefolio">
        <h2>Mon Portefolio</h2>
    </div>

  <div class="containerImg">
        <a href="<?php echo home_url('/chic-dressing/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/7-chicDressing.jpg" alt="Chic Dressing">
        </a>
        <a href="<?php echo home_url('/the-artbox/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5-artbox.jpg" alt="The Artbox">
        </a>
        <a href="<?php echo home_url('/matrix-kawai-girly/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kawai.jpg" alt="Matrix Girl Kawaï">
        </a>
        <a href="<?php echo home_url('/ridding-cities/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/2-riddingCities.jpg" alt="Ridding Citie">
        </a>
        <a href="<?php echo home_url('/robbie-lens-photographie/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/1-lens.jpg" alt="Robbie LENS Photographie">
        </a>
        <a href="<?php echo home_url('/planty/'); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/6-Planty.jpg" alt="Planty">
        </a>
  </div>
</section>