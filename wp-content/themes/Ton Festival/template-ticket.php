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

<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <h1><?php the_field('titre_de_la_page'); ?></h1>
        <h3><?php the_field('intro_page'); ?></h3>
        <p>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php the_content(); ?>
        </p>
        <!-- Page Ticket -->
        <div id="ticket" class="ticket_contener">
            <div class="ticket_top">
                <div class="ticket_title">
                    <!-- titre de la page -->
                    <img class="img_son" src="Images/photo_son_2.jpg" alt="">
                    <span class="white"><?php the_field('titre_de_la_page'); ?></span>
                    <span class="pink"><?php the_field('titre_de_la_page'); ?></span>
                    <img class="img_son" src="Images/photo_son_2.jpg" alt="">
                </div>
                <!-- phrase d'intro -->
                <span><?php the_field('intro_page'); ?></span>
            </div>
            <div class="block_ticket">
                <div class="free">
                    <!-- premier statut -->
                    <h1 class="ticket_color">Gratuit</h1>
                    <!-- descriptif du premier statut -->
                    <span class="ticket_color">Lorem ipsum simply dummy text of the printing and</span>
                    <!-- prix -->
                    <h1 class="prix"><?php the_field('formule1'); ?></h1>
                    <a><button>ACHETER</button></a>
                    <p><?php the_field('formule2'); ?></p>
                    <a><button>ACHETER</button></a>
                    <p><?php the_field('formule3'); ?></p>
                    <a><button>ACHETER</button></a>
                    <p><?php the_field('formule4'); ?></p>
                    <a><button>ACHETER</button></a>


            <?php endwhile;
    endif; ?>

            <!-- Page Ticket -->
            <div id="ticket" class="ticket_contener">
                <div class="ticket_top">
                    <div class="ticket_title">
                        <!-- titre de la page -->
                        <img class="img_son" src="Images/photo_son_2.jpg" alt="">
                        <span class="white">ACHAT </span>
                        <span class="pink">TICKET</span>
                        <img class="img_son" src="Images/photo_son_2.jpg" alt="">
                    </div>
                    <!-- phrase d'intro -->
                    <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis deserunt sunt exercitationem
                        alias
                        voluptas laudantium ea! Suscipit soluta eum ratione ad blanditiis ipsam</span>
                </div>
                <div class="block_ticket">
                    <div class="free">
                        <!-- premier statut -->
                        <h1 class="ticket_color">Gratuit</h1>
                        <!-- descriptif du premier statut -->
                        <span class="ticket_color">Lorem ipsum simply dummy text of the printing and</span>
                        <!-- prix -->
                        <h1 class="prix">00€</h1>
                        <!-- bouton achat -->
                        <button>Acheter</button>
                    </div>
                    <div class="silver">
                        <!-- premier statut -->
                        <h1 class="ticket_color">Argent</h1>
                        <!-- descriptif du premier statut -->
                        <span class="ticket_color">Lorem ipsum simply dummy text of the printing and</span>
                        <!-- prix -->
                        <h1 class="prix">39€</h1>
                        <!-- bouton achat -->
                        <button>Acheter</button>
                    </div>
                    <div class="gold">
                        <!-- premier statut -->
                        <h1 class="ticket_color">Or</h1>
                        <!-- descriptif du premier statut -->
                        <span class="ticket_color">Lorem ipsum simply dummy text of the printing and</span>
                        <!-- prix -->
                        <h1 class="prix">59€</h1>
                        <!-- bouton achat -->
                        <button>Acheter</button>
                    </div>
                    <div class="vip">
                        <!-- premier statut -->
                        <h1 class="ticket_color">VIP</h1>
                        <!-- descriptif du premier statut -->
                        <span class="ticket_color">Lorem ipsum simply dummy text of the printing and</span>
                        <!-- prix -->
                        <h1 class="prix">99€</h1>
                        <!-- bouton achat -->
                        <button>Acheter</button>
                    </div>
                </div>
            </div>



            <?php get_footer(); ?>
