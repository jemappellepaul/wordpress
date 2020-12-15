<?php
/**
 * template name: Tickets
 * template post type: page, archive-Gestion
 */
?>
<div class="ticket_contener">
    <?php get_header(); ?>

    <!-- Start the Loop. -->
    <?php if (have_posts()): while ( have_posts()): the_post(); ?>

    <h1><?php the_field('titre_de_la_page'); ?></h1>
        <h3><?php the_field('intro_page'); ?></h3>
        <p>
            <img src="<?php the_post_thumbnail_url();?>" alt="">
        <?php the_content(); ?>
        </p>
        <p><?php the_field('formule1'); ?></p>
        <a><button>ACHETER</button></a>
        <p><?php the_field('formule2'); ?></p>
        <a><button>ACHETER</button></a>
        <p><?php the_field('formule3'); ?></p>
        <a><button>ACHETER</button></a>
        <p><?php the_field('formule4'); ?></p>
        <a><button>ACHETER</button></a>

            
    <?php endwhile; 
    endif; ?>

    <?php get_footer(); ?>
</div>