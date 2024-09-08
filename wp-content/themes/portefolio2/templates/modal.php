<?php
/**
 * Template Name: Modal
 * 
 * @package WordPress
 * @subpackage Nathalie Mota "Modal"
 * @since Nathtalie MOTA 1.0.0
 * @author GitPixel
 * 
 */
?>

<!-- CONTACT MODAL -->
 
<div id="modal" class="modalOverlay hidden">
    <div class="contactModal"> 
        <!-- Insert Modal Elements -->
        <div class="containerTitleModal">
            <div class="titleModal1"></div>
        </div>

        <!-- Ajout du texte -->
        <p class="introTxt">Je suis toujours ouverte à de nouvelles opportunités, N'hésitez pas à me contacter et on discutera de votre projet passionnant !</p>


        <!-- Insert Modal Form -->
        <div class="labelModal">

        <!-- Display Ref Modal -->
        <!--<p id="ref-display"></p>-->
        <!-- Hidden Input Photo Reference -->
            <input type="hidden" id="ref-photo-display" value="" readonly>
                <?php
                echo do_shortcode('[contact-form-7 id="3dffd2c" title="Contact Modal"]');
                ?>
        </div>
    </div>
</div>
