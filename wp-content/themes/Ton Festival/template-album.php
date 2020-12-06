<?php

/**
 * template name: Album
 * template post type: page
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_field('titre_de_la_page'); ?></h1>
        <h3><?php the_field('intro_page'); ?></h3>
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php the_content(); ?>
        </p>
        <!-- première image -->
        <div><img href="<?php the_field('images'); ?>" alt="photo_album">
            <!-- deuxième image -->
            <?php the_field('image_2'); ?>

            <!-- troisième image -->

            <!-- quatrième image -->
            <?php the_post_thumbnail_url('image4'); ?>
            <!-- cinquième image -->
            <?php get_field_object('image_1'); ?>
            <img src="<?php if (get_field('images'));
foreach (get_field('images') as $image);
the_field($image); ?>" alt="">
            <!-- sixième image -->
            <?php the_field('image6'); ?>
            <!-- septième image -->
            <?php the_field('image7'); ?>
            <!-- dernière image -->
            <?php the_field('image8'); ?></div>



<?php endwhile;
endif; ?>
<?php if (get_field('images'));
foreach (get_field('images') as $image);
the_field($image); ?>

<?php get_footer(); ?>