<?php get_header(); ?>

<h1>Voici nos Artistes</h1>

<!-- Start the Loop. -->
<?php if (have_posts()) : ?>
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
          <?php the_post_thumbnail( 'medium', ['class' => 'card-img-top', 'alt' => '']); ?>
            <h5 class="card-title"><?= get_field('nom_de_lartiste');?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php the_category(); ?></h6>
            <p class="card-text"><?= get_field('description');?></p>
            <a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
          </div>
        </div>
      </div>


    <?php endwhile;
  else : ?>
  </div>
  <p>Aucun artiste ;(</p>
<?php endif; ?>

<?php get_footer(); ?>