<?php
/**
 * template name: Acceuil
 * template post type: page
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()): while ( have_posts()): the_post(); ?>

    <h1><?php the_title();?></h1>
    <p>
        <img src="<?php the_post_thumbnail_url();?>" alt="">
    <?php the_content(); ?>
    <input type="button" value="coucou">salut</input>
    <p>Event starts: <?php the_field('start_date'); ?></p>
    </p>
    
<?php endwhile; 
endif; ?>

 <?php get_footer(); ?>