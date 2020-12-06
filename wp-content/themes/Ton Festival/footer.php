    </div>
    <div>
    <?php the_field('titre'); ?>
    <?php the_field('contenu'); ?>
    <?php the_field('deuxieme_colonne'); ?>
    <?php the_field('troisieme_colonne'); ?>
    <?php the_field('quatrieme_colonne'); ?>
    </div>
    
    <!-- menu pied de page -->
    <nav class="navbar fixed-bottom navbar-light bg-light">
    <?php wp_nav_menu([
                'theme_location' => 'footer',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto'
            ]); ?>
            
    <?php wp_footer(); ?>
    
</body>
</html>