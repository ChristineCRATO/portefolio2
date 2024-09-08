<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Portefolio
 * @since Portefolio 1.0
 * @author Christine CRATO
 *
 */
?>

<?php

get_header();
?>

<!-- Start the Loop -->
<div id="wrap">
	<section id="content">

			<?php 
			if (have_posts()) :
				while (have_posts()) : the_post();
					the_content();
				endwhile;
			endif;

		// Templates Projets //
		
		// Integration Chic Dressing Template Projet //
		get_template_part('templates/chicDressing');

		// Integration Artbox Template Projet //
		get_template_part('templates/artbox');

		// Integration Matrix Kawaï Girly Template Projet //
		get_template_part('templates/kawai');

		// Integration Robbie LENS Photographie Template Projet //
		get_template_part('templates/lens');

		// Integration Planty Template Projet //
		get_template_part('templates/planty');

		// Integration Ridding Cities Template Projet //
		get_template_part('templates/riddingCities');


			?>

	</section>
</div>

<?php get_footer(); ?>