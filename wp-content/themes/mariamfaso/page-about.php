<?php 
/*
    Template Name: PAGE-ABOUT
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
    <section class="about-us" id="historique">
        <h2 class="main__heading2" aria-level="2" role="heading">
            <?php _e('Qui sommes-nous?', 'dw') ?>
        </h2>
        <div class="about-us__bloc">
            <div class="about-us__txt">
                <?php the_field('qui_sommes-nous') ?>
            </div>
        </div>
    </section>
    <section class="goal" id="but">
        <h2 class="main__heading2" aria-level="2" role="heading">
            <?php _e('Nos intentions', 'dw') ?>
        </h2>
        <div class="goal__bloc">
            <div class="goal__txt">
                <?php the_field('intentions') ?>
            </div>
        </div>
    </section>
    <!-- <section class="value">
        <h2 class="main__heading2" aria-level="2" role="heading">
            Nos valeurs
        </h2>
        <ul id="techList">
            <li class="equite">Équité</li>
            <li class="justice">Justice</li>
            <li class="transparence">Transparence maximale</li>
            <li class="solidarite">Solidarité</li>
            <li class="sensibilisation">Sensibilisation citoyenne</li>
            <li class="projets">Projets à long terme</li>
            <li class="developpement">Développement durable</li>
        </ul> 
    </section> -->
    <section class="poeple" id="membres">
        <h2 class="main__heading2" aria-level="2" role="heading">
            <?php _e('Nos adeptes', 'dw') ?>
        </h2>
        <div class="poeple__bloc">
            <?php
            $args = array( 'post_type' => 'team', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="person">
                <div class="initials"><?php the_field('initiales'); ?></div>
                <div class="infos">
                    <h3 class="main__heading3" aria-level="3" role="heading">
                        <?php the_field('nom_&_prenom'); ?>
                    </h3>
                    <p class="poste"><?php the_field('fonction'); ?></p>
                    <p class="date"><?php the_field('annee_dentree'); ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
    </section>
</main>
<?php
    get_footer();
?>