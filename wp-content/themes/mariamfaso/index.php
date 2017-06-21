<?php get_header(); ?>
<main class="main">
    <section class="main-banner">
        <h2 class="main__heading2 hidden" aria-level="2" role="heading"><?php _e('Photo de la bannière', 'dw'); ?></h2>
        <p class="main-banner__txt">
            <q class="main-banner__txt--citation" lang="fr">”<?php the_field('citation_dintroduction'); ?>”</q>
            <cite class="main-banner__txt--auteur" lang="fr"><?php the_field('auteur_de_la_citation'); ?></cite>
        </p>
        <div class="main-banner__btn">
            <a href="<?php the_permalink(42); ?>" title="Aller vers la page <?php get_the_title(42); ?>." class="main-banner__btn--link"><?php _e('Faites un don', 'dw'); ?></a>
        </div>
    </section>
    <section class="intro">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php bloginfo('name'); ?></h2>
        <div class="intro__txt">
            <?php the_field('texte_dintroduction'); ?>
        </div>
        <p class="intro__btn">
            <a href="<?php the_permalink(25); ?>" title="Aller vers la page <?php get_the_title(25); ?>." class="intro__btn--link"><?php _e('En savoir plus', 'dw'); ?></a>
        </p>
    </section>
    <section class="last-actu">

        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Dernières actualités', 'dw'); ?></h2>
        <div class="articles">
            <ul class="list1">
                <?php
                    $posts = new WP_Query( ['post_type' => 'post', 'posts_per_page' => 4] );
                    if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                ?>
                <li class="list1__elt" style="background-image:url('<?php the_post_thumbnail_url();?>');">
                    <a class="list1__elt--link list1__elt--desctop" href="#<?php the_title(); ?>">
                        <p class="categorie"><?php dw_the_category(', ', '<strong class="post_place post_place--:type">', '</strong>'); ?></p>
                        <h3 class="articles__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
                        <p class="date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('l, j F'); ?></time></p>
                    </a>
                    <a class="list1__elt--link list1__elt--mobil" href="<?php the_permalink(); ?>">
                        <p class="categorie"><?php dw_the_category(', ', '<strong class="post_place post_place--:type">', '</strong>'); ?></p>
                        <h3 class="articles__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
                        <p class="date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('l, j F'); ?></time></p>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <ul class="list2">
                <?php
                    $posts = new WP_Query( ['post_type' => 'post', 'posts_per_page' => 4] );
                    if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
                ?>
                <li class="list2__elt list2__elt--a1" id="<?php the_title(); ?>">
                    <div class="infos">
                        <p class="categorie"><?php dw_the_category(); ?></p>
                        <p class="date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('l, j F'); ?></time></p>
                        <p class="auteur"><?php _e('Auteur', 'dw'); ?> : <span><?php the_field('auteur'); ?></span></p>
                        <?php if(the_field('photographe')): ?>
                        <p class="photographe"><?php _e('Photographe', 'dw'); ?> : <span><?php the_field('photographe'); ?></span></p>
                        <?php endif; ?>
                        <div class="follow">
                            <h4 class="main__heading4 heading4" aria-level="4" role="heading"><?php _e('Partager sur les réseaux sociaux', 'dw'); ?></h4>
                            <a class="link" target="_blank" title="Partager l'article sur Facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;" style="text-decoration: none;">
                                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="30" height="30">
                                    <g>
                                        <path class="st1" d="M369.1,11.8c0,27.7,0,54.2,0,81.5c-4.2,0-8.2,0-12.2,0c-17.5,0-35.1,0-52.6,0c-12.5,0-22.4,7.3-22.9,19.5
                                            c-1,21.7-0.3,43.5-0.3,66c29.1,0,58.1,0,88,0c-0.5,6.1-0.9,11.4-1.4,16.7c-1.8,19.6-3.9,39.1-5.5,58.7c-0.4,5.1-2.9,5.5-7,5.5
                                            c-22-0.1-44.1,0-66.1,0c-2.8,0-5.7,0-9.2,0c0,76.5,0,152.4,0,228.9c-29.2,0-57.7,0-87.1,0c0-76,0-152,0-228.7c-21.1,0-41.4,0-62,0
                                            c0-27.2,0-53.6,0-80.8c20.5,0,40.8,0,61.9,0c0-3.3,0-5.8,0-8.3c0-22.7,0-45.5,0-68.2c0-46,33.6-85,79.3-90.4
                                            c14.5-1.7,29.3-0.4,44-0.4C333.6,11.8,351,11.8,369.1,11.8z"/>
                                    </g>
                                </svg>
                            </a>
                            <a class="link" title="Partager l'article sur Twitter" target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=400,width=700');return false;">
                                <svg version="1.1" class="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                     viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="30" height="30">
                                    <g>
                                        <path class="st1" d="M6.5,405.7c54,5,102.7-8.4,145.8-41.6c-21.1-1.4-40.2-8-57.1-20.6c-16.8-12.6-28.4-28.9-35.1-48.3c7.4,0,14.6,0.3,21.7-0.1
                                            c7-0.4,14-1.5,21.1-3C74,284.2,51.7,268.1,37,242c-8.9-15.8-13.8-35.9-12.4-49.3c7,2.6,13.9,5.7,21.1,7.7c7.2,2,14.7,2.9,22.2,3.8
                                            C23.7,167,14,122.6,38,69.4c55.1,64.6,123.8,100,208,105.8c-0.6-6.4-1.5-12.2-1.8-18c-1.5-31.3,9.2-57.8,32.2-79
                                            c25.2-23.3,55.3-31,88.7-24.7c19.3,3.6,36.1,12.7,50,26.8c2,2.1,3.9,2.7,6.9,2c18.8-4.4,36.9-10.7,53.7-20.2c1.7-0.9,3.5-1.7,6.1-3
                                            c-7.8,23.5-22,40.8-41.5,54.3c18.9-1.5,36.7-7.1,55-14.6c-9.3,14-19.4,25.7-31,36.2c-4.9,4.5-10.1,8.7-15.3,12.7
                                            c-2.7,2-3.7,4.2-3.6,7.6c1.2,28.9-2.6,57.2-10.4,84.9c-6.7,23.7-16.1,46.3-28.4,67.8c-13.2,23.2-29.2,44.3-48.1,63.1
                                            c-25.7,25.4-55.2,45-88.7,58.5c-31.6,12.8-64.5,19.4-98.5,20.6c-23.9,0.8-47.6-0.7-71-5.7c-23.6-5.1-46.4-12.5-67.9-23.7
                                            c-8.9-4.6-17.6-9.4-26.5-14.2C6.2,406.4,6.3,406,6.5,405.7z"/>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <a class="all" href="<?php the_permalink(32); ?>" title="Aller vers la page des <?php get_the_title(32); ?>." ><?php _e('Toutes les actualités', 'dw'); ?></a>
                    </div>
                    <div class="article">
                        <h3 class="article__heading3 heading3" aria-level="3" role="heading"><?php the_title();?></h3>
                        <div class="article__bloc">
                            <div class="article__txt">
                                <?php dw_the_excerpt(1500); ?>
                            </div>
                            <a class="more" href="<?php the_permalink(); ?>" title="Aller vers la page de l'<?php get_the_title(); ?>." ><?php _e('Lire la suite', 'dw'); ?></a>
                        </div>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
        <div class="CTA">
            <a href="<?php the_permalink(32); ?>" class="CTA__link" title="Aller vers la page de <?php get_the_title(32); ?>."><?php _e('Voir tous les articles', 'dw'); ?></a>
        </div>
    </section>
    <section class="last-projects">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Derniers projets', 'dw'); ?></h2>
        <?php
            $posts = new WP_Query( ['post_type' => 'projet', 'posts_per_page' => 4] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="projets">
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
        </div>
        <?php endwhile; endif; ?>
        <div class="CTA">
            <a href="<?php the_permalink(34); ?>" class="CTA__link" title="Aller vers la page des <?php get_the_title(34); ?>."><?php _e('Voir tous les projets', 'dw'); ?></a>
        </div> 
    </section>
    <section class="last-event">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Derniers évènements', 'dw'); ?></h2>
        <?php
            $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => 4] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <div class="event">
            <div class="bloc">
                <div class="event__containerimg">
                    <img class="event__img" src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <div class="txt">
                    <h3 class="main__heading3" aria-level="3" role="heading"><?php the_title(); ?></h3>
                    <p class="date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('j F Y'); ?></time></p>
                    <div class="preamble"><?php dw_the_excerpt(400); ?></div>
                    <a href="<?php the_permalink(); ?>" class="event__link" title="Aller vers la page de l'<?php get_the_title(); ?>."><?php _e('En savoir plus', 'dw'); ?></a>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <div class="CTA">
            <a href="<?php the_permalink(36); ?>" class="CTA__link" title="Aller vers la page des <?php get_the_title(36); ?>."><?php _e('Voir tous les évènements', 'dw'); ?></a>
        </div> 
    </section>
    <section class="stat">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Ce que nous avons déjà accompli cette année', 'dw'); ?></h2>
        <ol class="list3">
            <?php
                $args = array( 'post_type' => 'stat', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <li class="list3__elt list3__elt--currentyear">
                <a class="list3__elt--link" href="#<?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
            <?php endwhile; endif; ?>
        </ol>
        <ul class="list4">
            <?php
                $args = array( 'post_type' => 'stat', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args );
            ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>    
            <li class="list4__elt" id="<?php the_title(); ?>">
                <div class="list4__global">
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('villages_approvisionnes_en_eau'); ?></p>
                        <p class="list4__about"><?php _e('villages approvisionné en eau', 'dw'); ?></p>
                    </div>
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('hectare_de_culture_amenages'); ?></p>
                        <p class="list4__about"><?php _e('hectare de culture aménagés', 'dw'); ?></p>
                    </div>
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('dons'); ?></p>
                        <p class="list4__about"><?php _e('dons', 'dw'); ?></p>
                    </div>
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('recoltes'); ?> €</p>
                        <p class="list4__about"><?php _e('récoltés', 'dw'); ?></p>  
                    </div>
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('enfants_scolarises'); ?></p>
                        <p class="list4__about"><?php _e('enfants scolarisés', 'dw'); ?></p>
                    </div>
                    <div class="list4__bloc">
                        <p class="list4__number"><?php the_field('nouveaux_bâtiments_scolaire_construits'); ?></p>
                        <p class="list4__about"><?php _e('bâtiments scolaire construits', 'dw'); ?></p>
                    </div>
                </div>
            </li>
            <?php endwhile; endif; ?>
        </ul>
        
    </section>
    <section class="don">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Envie de nous soutenir ?', 'dw'); ?></h2>
        <div class="bloc">
            <div class="bloc__don">
                <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Donnation', 'dw'); ?></h3>
                <div class="bloc__txt"><?php the_field('donnation', 23); ?></div>
                <a href="<?php the_permalink(42); ?>" title="Aller vers la page de <?php get_the_title(42); ?>." class="bloc__link"><?php _e('Faites un don', 'dw'); ?></a>
            </div>
            <div class="bloc__partenaire">
                <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Partenaria', 'dw'); ?></h3>
                <div class="bloc__txt"><?php the_field('partenaria', 23); ?></div>
                <a href="<?php the_permalink(50); ?>" title="Aller vers la page de <?php get_the_title(50); ?>." class="bloc__link"><?php _e('Devenez partenaire', 'dw'); ?></a>
            </div>
        </div>
        <div class="CTA">
            <a href="<?php the_permalink(42); ?>" class="CTA__link" title="Aller vers la page de <?php get_the_title(42); ?>."><?php _e('Faites un don', 'dw'); ?></a>
        </div>
    </section>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/assets/js/active.js"></script>

<?php get_footer(); ?>
