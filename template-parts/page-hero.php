<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tmr
 */

?>

    <section class="hero-container">
        <?php 
        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        $image_id = get_post_thumbnail_id();
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        ?> 
        <div class="background-hero" style="background-image: url('<?php echo $feat_image_url; ?>');">

        <div class="hero-text-container">
            <?php
            if (function_exists('get_fields')) {
                
                if (get_field('hero_text_mobile')) {
                    ?>
                    <h2 class="mobile-heading"><?php the_field('hero_text_mobile'); ?></h2>
                    <?php
                }
                if (get_field('hero_text_desktop')) {
                    ?>
                    <h2 class="desktop-heading"><?php the_field('hero_text_desktop'); ?></h2>
                    <?php
                }
            }
            ?>
            
        </div>
       
    </section>


