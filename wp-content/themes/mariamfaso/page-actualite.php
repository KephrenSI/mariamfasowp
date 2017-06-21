<?php 
/*
    Template Name: PAGE-ARTICLES
*/
    get_header();
?>
<main class="main">
    <section class="banner">
        <h2 class="main__heading2 hidden" aria-level="2" role="heading"><?php _e('Photo de la bannière', 'dw') ?></h2>
        <div class="banner__btn">
            <a href="<?php the_permalink(42); ?>" title="Aller vers la page de <?php get_the_title(42); ?>." class="banner__btn--link"><?php _e('Faites un don', 'dw') ?></a>
        </div>
    </section>
    <section class="news">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Tous les articles', 'dw') ?></h2>
        <!-- <div class="filtre">
            <form action="get" class="formulaire">
                <label for="recherche"><?php _e('Catégories', 'dw') ?></label>
                <select>
                    <option value="all"><?php _e('Toutes les catégories', 'dw') ?></option>
                    <option value="voyage">Voyage</option>
                    <option value="nature">Nature</option>
                    <option value="actualite">Actualité</option>
                    <option value="ecologie">Écologie</option>
                </select> 
            </form>
        </div> -->
        <div class="actus">
            <?php
                $posts = new WP_Query( ['post_type' => 'post', 'posts_per_page' => -1] );
                if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
            <div class="actu">
                <div class="picture">
                    <div class="picture__containerimg">
                        <img class="picture__img" src="<?php the_post_thumbnail_url();?>" alt="">
                    </div>
                    <p class="picture__categorie"><?php dw_the_category(', ', '<strong class="type">', '</strong>'); ?></p>
                    <h3 class="main__heading3" aria-level="3" role="heading"><?php the_title(); ?></h3>
                    <p class="picture__date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('l, j F'); ?></time></p>
                </div>  
                <div class="preamble">
                    <p class="preamble__txt">
                    <?php dw_the_excerpt(600); ?>
                    </p>
                </div>
                <div class="more">
                    <a href="<?php the_permalink(); ?>" title="Aller vers la page de l'<?php get_the_title(); ?>." class="more__link"><?php _e('Lire la suite', 'dw') ?></a>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>