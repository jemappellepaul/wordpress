<?php get_header(); ?>

<!-- récupération des articles -->
<?php while (have_posts()) : the_post(); ?>
    <div class="block_index">
        <!-- Contenu de la page d'acceuil -->
        <h1 class="title"><?php the_field('intro'); ?></h1>
        <!-- compte a rebours -->
        <div class="block_date">
            <div class="block">
                <span class="clock">15</span>
                <span class="day">Jours</span>
            </div>
        </div>
        <p>Event starts: <?php the_field('start_date'); ?></p>
        <p>Event end: <?php the_field('end_date'); ?></p>
        <!-- boutons -->
        <div class="block_date_button">
            <form method="get" action="<?php the_field('bouton1'); ?>">
                <button class="date_button">DÉTAILS</button>
            </form>
            <form method="get" action="<?php the_field('bouton2'); ?>">
                <button class="date_button_2">BILLETS</button>
            </form>
        </div>
        <!-- vidéo -->
        <!-- <iframe width="300" height="300" src="https://www.youtube.com/embed/QjWHmFyFXwY" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>

<!-- ICI QUE TOUT SE PASSE  -->