<?php

/**
 * template name: Tickets
 * template post type: page, archive-Gestion
 */
?>
<div class="ticket_contener">
    <?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p><?php the_content(); ?></p>
        <!-- Page Ticket -->
        <div id="ticket" class="ticket_contener">
            <div class="ticket_top">
                <div class="ticket_title">
                    <!-- titre de la page -->
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                    <span class="white"><?php the_field('titre_de_la_page') ?> </span>
                    <span class="pink"><?php the_field('second_titre') ?></span>
                    <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
                </div>
                <!-- phrase d'intro -->
                <span><?php the_field('intro') ?></span>
            </div>
            <div class="block_ticket">
                <!-- Début de la boucle -->
                <?php if (get_field('formule1')) : ?>
                    <!-- condition sous groupe -->
                    <?php while (has_sub_field('formule1')) : ?>
                        <!-- Attribution de la classe -->
                        <div class="free">
                            <!-- premier statut -->
                            <h1 class="ticket_color"><?php the_sub_field('nom_de_la_formule'); ?></h1>
                            <!-- descriptif du premier statut -->
                            <span class="ticket_color"><?php the_sub_field('desc_formule'); ?></span>
                            <!-- prix -->
                            <h1 class="prix"><?php the_sub_field('prix'); ?>€</h1>
                    <?php endwhile;
                else :
                    // si erreur affiche 'rien'
                    echo ('notthing');
                endif; ?>
                    <!-- bouton achat -->
                    <button>Acheter</button>
            </div>
                <!-- Début de la boucle -->
                <?php if (get_field('formule2')) : ?>
                    <!-- condition sous groupe -->
                    <?php while (has_sub_field('formule2')) : ?>
                        <!-- Attribution de la classe -->
                        <div class="silver">
                            <!-- premier statut -->
                            <h1 class="ticket_color"><?php the_sub_field('nom_de_la_formule'); ?></h1>
                            <!-- descriptif du premier statut -->
                            <span class="ticket_color"><?php the_sub_field('desc_formule'); ?></span>
                            <!-- prix -->
                            <h1 class="prix"><?php the_sub_field('prix'); ?>€</h1>
                    <?php endwhile;
                else :
                    // si erreur affiche 'rien'
                    echo ('notthing');
                endif; ?>
                    <!-- bouton achat -->
                    <button>Acheter</button>
                        </div>
                <!-- Début de la boucle -->
                <?php if (get_field('formule3')) : ?>
                    <!-- condition sous groupe -->
                    <?php while (has_sub_field('formule3')) : ?>
                        <!-- Attribution de la classe -->
                        <div class="gold">
                            <!-- premier statut -->
                            <h1 class="ticket_color"><?php the_sub_field('nom_de_la_formule'); ?></h1>
                            <!-- descriptif du premier statut -->
                            <span class="ticket_color"><?php the_sub_field('desc_formule'); ?></span>
                            <!-- prix -->
                            <h1 class="prix"><?php the_sub_field('prix'); ?>€</h1>
                    <?php endwhile;
                else :
                    // si erreur affiche 'rien'
                    echo ('notthing');
                endif; ?>
                    <!-- bouton achat -->
                    <button>Acheter</button>
                        </div>
                <!-- Début de la boucle -->
                <?php if (get_field('formule4')) : ?>
                    <!-- condition sous groupe -->
                    <?php while (has_sub_field('formule4')) : ?>
                        <!-- Attribution de la classe -->
                        <div class="vip">
                            <!-- premier statut -->
                            <h1 class="ticket_color"><?php the_sub_field('nom_de_la_formule'); ?></h1>
                            <!-- descriptif du premier statut -->
                            <span class="ticket_color"><?php the_sub_field('desc_formule'); ?></span>
                            <!-- prix -->
                            <h1 class="prix"><?php the_sub_field('prix'); ?>€</h1>
                    <?php endwhile;
                else :
                    // si erreur affiche 'rien'
                    echo ('notthing');
                endif; ?>
                    <!-- bouton achat -->
                    <button>Acheter</button>
                </div>
            </div>
        </div>

<?php endwhile;
endif; ?>

<?php get_footer(); ?>
