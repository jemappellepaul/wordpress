<?php

/**
 * template name: Album
 * template post type: page
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <p><?php the_content(); ?></p>
        <!-- Page album -->
        <div id="ticket" class="ticket_contener">
            <div class="ticket_top">
                <div class="ticket_title">
                    <!-- titre de la page -->
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <span class="white"><?php the_field('titre_de_la_page') ?> </span>
                    <span class="pink"><?php the_field('second_titre') ?></span>
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <!-- phrase d'intro -->
                    <span><?php the_field('intro') ?></span>
                    <div id="album" class="album">
                        <div class="colum">
                            <!-- première colonne -->
                            <!-- Début de la boucle -->
                            <?php if (get_field('images')) : ?>
                                <!-- condition sous groupe -->
                                <?php while (has_sub_field('images')) : ?>
                                    <!-- premiere image -->
                                    <img class="image_1" src="<?php echo esc_url('image_1'['url']); ?>" alt="">
                                    <!-- deuxième image -->
                                    <img class="image_2" src="<?php the_field('image_2'); ?>" alt="">
                                    <!-- troisème image -->
                                    <img class="image_1" src="<?php echo wp_get_attachment_image('image_3'); ?>" alt="">
                                    </div>
                                    <?php endwhile;
                            else :
                                // si erreur affiche 'rien'
                                echo ('notthing');
                            endif; ?>
                            <!-- deuxième colonne -->
                            <div class="colum_2">
                             <!-- Début de la boucle -->
                             <?php if (get_field('images')) : ?>
                                <!-- condition sous groupe -->
                                <?php while (has_sub_field('images')) : ?>
                                    <!-- premiere image -->
                                    <img class="image_3" src="<?php the_sub_field('image_4'); ?>" alt="">
                                    <!-- deuxième image -->
                                    <<img class="image_4" src="<?php the_sub_field('image_5'); ?>" alt="">
                                    </div>
                                    <?php endwhile;
                            else :
                                // si erreur affiche 'rien'
                                echo ('notthing');
                            endif; ?>
                            <!-- Troisième colonne -->
                            <div class="colum_3">
                             <div class="colum_4">
                             <!-- Début de la boucle -->
                             <?php if (get_field('images')) : ?>
                                <!-- condition sous groupe -->
                                <?php while (has_sub_field('images')) : ?>
                                    <!-- premiere image -->
                                    <img class="image_3" src="<?php the_sub_field('image_6'); ?>" alt="">
                                    <!-- deuxième image -->
                                    <<img class="image_4" src="<?php the_sub_field('image_7'); ?>" alt="">
                                    </div>
                                    </div>
                                    <?php endwhile;
                            else :
                                // si erreur affiche 'rien'
                                echo ('notthing');
                            endif; ?>
                        </div>
                         <!-- Quatrième colonne -->
                             <!-- Début de la boucle -->
                             <?php if (get_field('images')) : ?>
                                <!-- condition sous groupe -->
                                <?php while (has_sub_field('images')) : ?>
                                    <!-- premiere image -->
                                    <img class="image_6" src="<?php the_sub_field('image_8'); ?>" alt="">
                                    </div>
                                    <?php endwhile;
                            else :
                                // si erreur affiche 'rien'
                                echo ('notthing');
                            endif; ?>
                    </div>
                </div>

        <?php endwhile;
endif; ?>

        <?php get_footer(); ?>