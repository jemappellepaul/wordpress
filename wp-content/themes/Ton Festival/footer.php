    </div>
    <!-- Top footer -->
    <div class="block_top_footer">
        <!-- première colonne contact -->
        <div class="contact">
            <!-- début de la boucle -->
            <?php if (get_field('premiere_colonne')) : ?>
                <!-- condition si sous groupe -->
                <?php while (has_sub_field('premiere_colonne')) : ?>
                    <!-- titre de la colonne -->
                    <h2><?php the_sub_field('titre'); ?></h2>
                    <!-- contenu de la colonne -->
                    <p><?php the_sub_field('contenu'); ?></p>
                    <!-- fin condition du sous champs -->
            <?php endwhile;
            // si erreur affiche 'rien'
            else :
                echo ('notthing');
            endif; ?>
        </div>
        <h2 style="color : white;"><?php if (have_rows('premiere_colonne')) : ?>
                <ul>
                    <?php while (have_rows('premiere_colonne')) : the_row(); ?>
                        <li><?php the_sub_field('contenu'); ?></li>
                    <?php endwhile; ?>
                </ul>
            <?php else : ?>
                <p>No todos found</p>
            <?php endif; ?></h2>
            <!-- menu pied de page (politique)-->
        <?php wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'block_top_footer'
        ]); ?>
    </div>
    </body>

    </html>