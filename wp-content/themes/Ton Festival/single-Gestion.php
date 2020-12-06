<?php get_header(); ?>

<!-- page d'un seul article -->

<img src="<?php echo esc_url(get_field('image_de_lartiste')['url']); ?>" alt="artiste" />
<p><?= get_field('nom_de_lartiste') ?></p>
<p><?= get_field('genre_musical') ?></p>
<p><?= get_field('nom_de_lartiste') ?></p>
<p><?= get_field('nom_de_lartiste') ?></p>
<?php get_footer(); ?>