<?php
/**
 * template name: Évènements
 * template post type: page
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()): while ( have_posts()): the_post(); ?>

    <h1><?php the_field('titre_de_la_page'); ?></h1>
    <h3><?php the_field('intro_page'); ?></h3>
    <p>
        <img src="<?php the_post_thumbnail_url();?>" alt="">
        <p> les jours: <?php the_field('jours'); ?></p>
        <p>les dates: <?php the_field('date'); ?></p>
        <p> les horaires: <?php the_field('horaires'); ?></p>
        <p> nom du concert: <?php the_field('nom_du_concert1'); ?></p>
        <p> nom du groupe: <?php the_field('nom_du_groupe1'); ?></p>
        <p> la description du groupe: <?php the_field('desc_groupe1'); ?></p>
<?php endwhile; 
endif; ?>

 <?php get_footer(); ?>