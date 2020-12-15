    </div>
    <!-- menu pied de page -->
    <div class="block_top_footer">
        <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'block_top_footer'
        ]); ?>
        <?php the_field('contenu'); ?>

        <h1 style="color : white;"><?php if (have_rows('premiere_colonne')) :
                while (have_rows('premiere_colonne')) : the_row();
                    $sub_value = get_sub_field('contenu');
                // Do something...
                endwhile;
            else :
            // no rows found
            echo ('nothing');
            endif; ?></h1>
            
    </div>
        </body>

        </html>