<?php 
/*
    Template Name: PAGE-PROJET
*/
    get_header();
?>
<main class="main">
    <section class="banner">
        <h2 class="main__heading2 hidden" aria-level="2" role="heading"><?php _e('Photo de la bannière','wp');?></h2>
        <div class="banner__btn">
            <a href="<?php the_permalink(42); ?>" title="Aller vers la page de <?php get_the_title(42); ?>." class="banner__btn--link"><?php _e('Faites un don','wp');?></a>
        </div>
    </section>
    <section class="proj">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Tous les projets','wp');?></h2>
        <!-- <div class="filtre">
            <form action="get" class="formulaire">
                <label for="recherche"><?php _e('Catégories','wp');?></label>
                <select>
                    <option value="all"><?php _e('Tous les pays','wp');?></option>
                    <option value="voyage">Burkina faso</option>
                    <option value="nature">Maroc</option>
                </select> 
            </form>
        </div> -->
        <div class="projets">
            <?php
                $posts = new WP_Query( ['post_type' => 'projet', 'posts_per_page' => -1] );
                if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
            ?>
            <figure class="projets__bloc">
                <div class="projets__containerimg">
                    <img class="projets__img" src="<?php the_post_thumbnail_url();?>" alt="">
                </div>                
                <figcaption class="projets__caption">
                    <h3 class="projets__subtitle" aria-level="3" role="heading"><?php dw_the_pays(', ', '<strong class="type">', '</strong>'); ?></h3>
                    <small class="projets__small" aria-level="4" role="heading"><?php the_field('lieu'); ?></small>
                    <p class="date"><?php _e('Du','wp');?> <?php the_field('date_de_debut'); ?> <?php _e('au','wp');?> <?php the_field('date_de_fin'); ?></p>
                </figcaption>
                <a class="projets__link" href="<?php the_permalink(); ?>" title="Aller vers la page du <?php get_the_title(); ?>."><?php _e('Voir le projet','wp');?></a>
            </figure>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>