<?php 
/*
    Template Name: PAGE-EVENEMENT
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
    <section class="events">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Tous les évènements','wp');?></h2>
        <?php
            $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => -1] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="event">
            <div class="bloc">
                <div class="event__containerimg">
                    <img class="event__img" src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="event__txt">
                    <h3 class="main__heading3" aria-level="3" role="heading"><?php the_title(); ?></h3>
                    <p class="event__txt--lieu"><?php the_field('lieu'); ?></p>
                    <p class="event__txt--date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('j F Y'); ?></time></p>
                    <div class="event__txt--preamble"><?php dw_the_excerpt(400); ?></div>
                    <a href="<?php the_permalink(); ?>" class="event__txt--link" title="Aller vers la page de l'<?php get_the_title(); ?>."><?php _e('En savoir plus','wp');?></a>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </section>
</main>
<?php
    get_footer();
?>