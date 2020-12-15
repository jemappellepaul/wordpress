<?php

/**
 * template name: Évènements
 * template post type: page
 */
?>

<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="body_blog" id="blanc">
            <div id="calendrier"  class="ticket_top">
                <div class="ticket_title">
                    <!-- titre de la page -->
                    <span class="white"><?php the_field('titre_de_la_page'); ?></span>
                    <span class="pink"><?php the_field('second_titre'); ?></span>
                </div>
                <span><?php the_field('intro_page'); ?></span>
            </div>    
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <p> les jours: <?php the_field('jours'); ?></p>
            
                <!-- Premier jour -->
                <!-- date du concert -->
                <div id="day_1">
                    <div class="date">
                        <p><?php the_field('date'); ?></p>
                    </div>
                    <div class="concerts">
                        <div class="contenant_concert">
                            <div class="horaire">
                                <span class="pink"><?php the_field('horaires'); ?></span>
                            </div>
                            <div class="text_concert">
                                <!-- NAME OF CONCERT -->
                                <h2 class="concert"><?php the_field('nom_du_concert1'); ?></h2>
                                <!-- nom de l'artiste -->
                                <span class="artiste"><i class="fa fa-user"></i><?php the_field('nom_du_groupe1'); ?></span>
                                <!-- description du concert -->
                                <p class="description"><?php the_field('desc_groupe1'); ?></p>
                            </div>
                        </div>

                        <div class="contenant_concert">
                            <div class="horaire">
                                <span class="pink"><?php the_field('horaires'); ?></span>
                            </div>
                            <div class="text_concert">
                                <!-- nom du concert -->
                                <h2 class="concert"><?php the_field('nom_du_concert2'); ?></h2>
                                <!-- nom de l'artiste -->
                                <span class="artiste"><i class="fa fa-user"></i><?php the_field('nom_du_groupe2'); ?></span>
                                <!-- description du concert -->
                                <p class="description"><?php the_field('desc_groupe2'); ?></p>
                            </div>
                        </div>
                        <div class="contenant_concert">
                            <div class="horaire">
                                <span class="pink"><?php the_field('horaires'); ?></span>
                            </div>
                            <div class="text_concert">
                                <!-- nom du concert -->
                                <h2 class="concert"><?php the_field('nom_du_concert3'); ?></h2>
                                <!-- nom de l'artiste -->
                                <span class="artiste"><i class="fa fa-user"></i><?php the_field('nom_du_groupe3'); ?></span>
                                <!-- description du concert -->
                                <p class="description"><?php the_field('desc_groupe3'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Les boutons pour défilé entre les jours -->
                <div class="bouton_def">
                    <button>
                        <</button> <button>>
                    </button>
                </div>
        <?php endwhile;
endif; ?>

        <?php get_footer(); ?>