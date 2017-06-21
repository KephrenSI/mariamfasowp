<?php 
/*
    Template Name: PAGE-FAQ
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
    <section class="questions">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Foire aux questions', 'dw') ?></h2>
        <div class="questions__bloc">
        <?php
            $posts = new WP_Query( ['post_type' => 'faq', 'posts_per_page' => 15] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
            <div class="questions__quest">
                <div class="questions__demande">
                    <p class="questions__demande--txt"><?php the_field('question'); ?></p>
                </div>
                <div class="questions__reponse active">
                    <p class="questions__reponse--txt"><?php the_field('reponse'); ?></p>
                </div>
            </div>
        <?php endwhile; endif; ?>
        </div>  
        <div class="question">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Bonjour, vous avez encore une question', 'dw') ?> ?</h3>
            <form action="post" class="form">
                <?php ninja_forms_display_form( 4 ); ?>
            </form>
        </div>
        <div class="CTA">
            <a href="<?php the_permalink(48); ?>" class="CTA__link" title="Aller vers la page de <?php get_the_title(48); ?>."><?php _e('Contactez-nous', 'dw') ?></a>
        </div>
    </section>
</main>
<?php
    get_footer();
?>