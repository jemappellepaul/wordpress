<?php get_header(); ?>

<!-- Start the Loop. -->
<?php if (have_posts()) : ?>
  <div class="row">
    <?php while (have_posts()) : the_post(); ?>
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
          <?php the_post_thumbnail( 'the_post_thumbnail', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height :auto ']); ?>
            <h5 class="card-title"><?php the_title() ?></h5>
            <p class="card-subtitle mb-2 text-muted"><?php the_date() ?> , <?php the_author() ?></p>
            <p class="card-text"><?php the_content(); ?></p>
            <a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
          </div>
        </div>
      </div>

    <?php endwhile;
  else : ?>
  </div>
  <p>Aucun articles ;(</p>
<?php endif; ?>

<?php get_footer(); ?>