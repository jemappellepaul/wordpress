<?php get_header(); ?>

<!-- récupération des articles -->
<?php while (have_posts()) : the_post(); ?>

    <!-- titre la page acceuil -->
    <h1><?php the_title(); ?></h1>

    <!-- Contenu de la page d'acceuil -->
    <?php the_content(); ?>

    <!-- page des têtes d'affiche (page listant les artistes) -->
    <a href="<?php echo (get_post_type_archive_link('gestion')); ?>"> Voir vos artistes </a>

    <!-- compte a reourd -->

    <button type="button" value="détails">
    <button type="button" value="billet">
    <p><?= the_field('intro'); ?></p>
    <p>Event starts: <?= the_field('start_date'); ?></p>
    <p>Event end: <?= the_field('end_date'); ?></p>
    <p>lien vers menu <?= the_field('lien_menu'); ?></p>
    <form method="get" action="<?= the_field('bouton1'); ?>">
        <button type="submit">bouton 1</button>
    </form>
    <form method="get" action="<?= the_field('bouton2'); ?>">
        <button type="submit">bouton 2</button>
    </form>

<div alt='compte a rebours'><?php echo do_shortcode('[sales_countdown_timer id="salescountdowntimer"]'); ?>
</div>




<?php endwhile; ?>

<?php get_footer(); ?>



<!-- ICI QUE TOUT SE PASSE  -->