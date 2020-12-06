<?php
/**
 * template name: Blog
 * template post type: page_article
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()): while ( have_posts()): the_post(); ?>

    h1><?php the_field('titre_de_la_page'); ?></h1>
    <h1><?php the_field('intro_page'); ?></h1>
    <p>
        <img src="<?php the_post_thumbnail_url();?>" alt="">
    <?php the_content(); ?>
    </p>
    <p><?php the_field('formule1'); ?></p>
    <p><?php the_field('formule2'); ?></p>
    <p><?php the_field('formule3'); ?></p>
    <p><?php the_field('formule4'); ?></p>
        
<?php endwhile; 
endif; ?>

 <?php get_footer(); ?>