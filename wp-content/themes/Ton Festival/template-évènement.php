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
            <div id="calendrier" class="ticket_top">
                <div class="ticket_title">
                    <!-- titre de la page -->
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <span class="white"><?php the_field('titre_de_la_page'); ?></span>
                    <span class="pink"><?php the_field('second_titre'); ?></span>
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <span><?php the_field('intro_page'); ?></span>
            </div>
            <p>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                <!-- jour du concert -->
                <div class="button_calendrier">
                    <!-- Début de la boucle -->
                    <?php if (get_field('jours')) : ?>
                        <!-- condition sous groupe -->
                        <?php while (has_sub_field('jours')) : ?>
                            <!-- premier jour -->
                            <button onclick="calendrier_1()"><?php the_sub_field('jour1'); ?></button>
                            <!-- deuxième jour -->
                            <button onclick="calendrier_2()"><?php the_sub_field('jour2'); ?></button>
                            <!-- troisème jour -->
                            <button onclick="calendrier_3()"><?php the_sub_field('jour3'); ?></button>
                            <!-- quatrième jour -->
                            <button onclick="calendrier_4()"><?php the_sub_field('jour4'); ?></button>
                    <?php endwhile;
                    else :
                        // si erreur affiche 'rien'
                        echo ('notthing');
                    endif; ?>
                </div>
                    <!-- Premier jour -->
                    <!-- date du concert -->
                    <div id="day_1">
                        <div class="date">
                            <!-- Début de la boucle -->
                            <?php if (get_field('date')) : ?>
                                <!-- condition sous groupe -->
                                <?php while (has_sub_field('date')) : ?>
                                    <!-- premier jour -->
                                    <p><?php the_sub_field('date1'); ?></p>
                            <?php endwhile;
                            else :
                                // si erreur affiche 'rien'
                                echo ('notthing');
                            endif; ?>
                        </div>
                        <div class="concerts">
                            <div class="contenant_concert">
                                <div class="horaire">
                                        <!-- Début de la boucle -->
                                        <?php if (get_field('horaires')) : ?>
                                            <!-- condition sous groupe -->
                                            <?php while (has_sub_field('horaires')) : ?>
                                                <!-- premier horaire -->
                                                <span class="pink"><?php the_sub_field('horaire_1'); ?></span>
                                        <?php endwhile;
                                        else :
                                            // si erreur affiche 'rien'
                                            echo ('notthing');
                                        endif; ?> 
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
                                    <span class="pink"><!-- Début de la boucle -->
                                        <?php if (get_field('horaires')) : ?>
                                            <!-- condition sous groupe -->
                                            <?php while (has_sub_field('horaires')) : ?>
                                                <!-- premier horaire -->
                                                <span class="pink"><?php the_sub_field('horaire_2'); ?></span>
                                        <?php endwhile;
                                        else :
                                            // si erreur affiche 'rien'
                                            echo ('notthing');
                                        endif; ?> </span>
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
                                    <span class="pink"><!-- Début de la boucle -->
                                        <?php if (get_field('horaires')) : ?>
                                            <!-- condition sous groupe -->
                                            <?php while (has_sub_field('horaires')) : ?>
                                                <!-- premier horaire -->
                                                <span class="pink"><?php the_sub_field('horaire_3'); ?></span>
                                        <?php endwhile;
                                        else :
                                            // si erreur affiche 'rien'
                                            echo ('notthing');
                                        endif; ?> </span>
                                </div>
                                <div class="text_concert">
                                    <!-- nom du concert -->
                                    <h2 class="concert"><?php the_field('nom_du_concert3'); ?></h2>
                                    <!-- nom de l'artiste -->
                                    <span class="artiste"><i class="fa fa-user"></i><?php the_field('nom_du_group3'); ?></span>
                                    <!-- description du concert -->
                                    <p class="description"><?php the_field('desc_groupe3'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Les boutons pour défilé entre les jours -->
                    <div class="bouton_def">
            <button>&lt;</button>
            <button>></button>
        </div>

                    

            <?php endwhile;
    endif; ?>


            <?php get_footer(); ?>