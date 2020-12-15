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
            <h2><?php
            if( have_rows('premiere_colonne') ):
                while( have_rows('premiere_colonne') ): the_row();
            
                    // Layout 1.
                    if( get_row_layout() == 'layout_1' ):
            
                        // Layout 1 value.
                        $value = get_sub_field('sub_field_1');
            
                    // Layout 2.
                    elseif( get_row_layout() == 'layout_2' ):
            
                        // Layout 2 value.
                        $value = get_sub_field('sub_field_2');
            
                    endif;
            
                endwhile;
            endif;
            ?></h2>
    </div>
        </body>

        </html>