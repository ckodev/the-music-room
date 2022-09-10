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
        <img src="<?php echo $feat_image_url; ?>" alt="<?php echo $image_alt; ?>">

        <div class="hero-text-container grid">
            <?php
            if (function_exists('get_fields')) {
                if (get_field('hero_text')) {
                    ?>
                    <h2><?php the_field('hero_text'); ?></h2>
                    <?php
                }
            }
            ?>
        </div>
    </section>


