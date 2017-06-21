<?php 
/*
    Template Name: SINGLE-EVENEMENT
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
    <section class="evenement">
        <?php
            $posts = new WP_Query( ['post_type' => 'evenement', 'posts_per_page' => 1] );
            if ( $posts->have_posts() ): while ( $posts->have_posts() ): $posts->the_post();
        ?>
        <h2 class="main__heading2" aria-level="2" role="heading"><?php the_title(); ?></h2>
        <div class="infos">
            <div class="infos__meta">
                <p class="infos__meta--lieu"><?php the_field('lieu'); ?></p>
                <p class="infos__meta--date"><time class="date__post" datetime="<?php the_time('c'); ?>"><?php the_time('M, j F'); ?></time>Mardi, 16 mai</p>
                <p class="infos__meta--heure"><?php _e('Heure','wp'); ?> : <span><?php the_field('heure'); ?></span></p>
                <p class="infos__meta--adresse"><?php _e('Adresse','wp'); ?> : <span><?php the_field('adresse'); ?></span></p>
            </div>
            <div class="infos__follow">
                <h4 class="main__heading4" aria-level="4" role="heading"><?php _e('Partagez-moi','wp');?></h4>
                <a class="link" target="_blank" title="Partager l'article sur Facebook" href="https://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;" style="text-decoration: none;">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="40" height="40">
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
                         viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="40" height="40">
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
        </div>
        <div class="evenement__content">
            <div class="evenement__content--containerimg">
                <img class="evenement__content--img" src="<?php the_post_thumbnail_url();?>" alt="">
            </div> 
            <div class="evenement__txt">
                <?php the_content(); ?>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </section>
</main>
<?php
    get_footer();
?>