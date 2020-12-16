<?php get_header(); ?>
<div id="blog" class="body_blog">
      <div class="top_blog">
        <div class="blog_title">
          <!-- image sur le coté -->
          <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <!-- titre de la page -->
          <span class="white"><?php the_field('titre_de_la_page'); ?></span>
          <span class="pink"><?php the_field('second_titre'); ?></span>
          <!-- image sur le coté -->
          <img class="img_son" src="<?php the_post_thumbnail_url(); ?>" alt="">
        </div>
        <!-- texte d'introduction -->
        <span class="text_title_blog"><?php the_field('intro_page'); ?></span>
      </div>
<!-- Start the Loop. -->
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="blog" class="body_blog">
      <div class="block_blog">
        <div class="blog_1">
          <!-- titre de la publication -->
          <h2 class="titre_publication"><?php the_title() ?></h2>
          <!-- logo calendrier -->
          <!-- date de la publcation -->
          <span><i class="fa fa-calendar"></i><?php the_date() ?></span>
          <!-- logo auteur -->
          <!-- Autor of publication -->
          <span class="autor"><i class="fa fa-user"></i><?php the_author() ?></span>
          <!-- Publication -->
          <p><?php the_content(); ?></p>
          <a href="<?php the_permalink(); ?>" class="card-link">Voir plus</a>
        </div>
        </div>
      </div>
    </div>

  <?php endwhile;
else : ?>
  </div>
  <p>Aucun articles ;(</p>
<?php endif; ?>

<?php get_footer(); ?>
