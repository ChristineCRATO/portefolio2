<?php 
/**
 * Template Name: photo_block
 * 
 * @package WordPress
 * @subpackage Portefolio "photo_block"
 * @since Portefolio 1.0.0
 * @author Christine CRATO
 * 
 */
?>



<!-- Photo Block for Home Page and for "You may also like" Section -->
<?php 
// Retrieve Projet ID
$projet = get_the_post_thumbnail_url(null, 'large');
// Retrieve Photo Title
$title = get_the_title();
// Retrieve Post Url
$url_post = get_permalink();
// Retrieve Photo Category

?>

<!-- Photo Block Display -->
<div class="photo_block">
    <!-- Display Photo with URL + ALT Attribute -->
     <img src="<?php echo esc_url($projet); ?>" alt="<?php the_title_attribute(); ?>">

     <div class="overlay">
        <!-- Display Photo Title -->
         <h2 class="title_overlay"><?php echo esc_html($title); ?></h2>

        <!-- Add Icon to See Photo in Detail -->
         <div class="icon_eye">
            <a href="<?php echo esc_url($url_post); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Icon_eye.svg" alt="Voir la Projet">
            </a>
         </div>

        <!-- Add Fullscreen Icon with Date Attributes -->
         <div class="icon_fullscreen" data-full="<?php echo esc_attr($projet); ?>" data-competence="<?php echo esc_attr($competence); ?>">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/Icon_fullscreen.svg" alt="icône fullscreen">
         </div>
     </div>
</div>
