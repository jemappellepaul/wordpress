<?php get_header(); ?>

<!-- page d'un seul article -->
<?php if (have_posts()): while ( have_posts()): the_post(); ?>
    <h1><?php the_title();?></h1>
    <p>
        <img src="<?php the_post_thumbnail_url();?>" alt="">
    <?php the_content(); ?>
    </p>
    <?php if(get_post_meta(get_the_ID(), SponsoMetaBox::META_KEY, true) === '1'): ?>
      <div class="alert alert-info">
        Cet article est sponsorisé
      </div>
    <?php endif ?>
        
<?php endwhile; 
endif; ?>

 <?php get_footer(); ?>