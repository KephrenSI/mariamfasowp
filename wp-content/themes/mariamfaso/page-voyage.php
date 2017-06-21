<?php 
/*
    Template Name: PAGE-VOYAGE
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
    <section class="travel">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Demande de voyage','wp');?></h2>
        <form action="post" class="form">
           <!--  <div class="cond">
                <a href="../docs/travelcondition.pdf" title="Aller vers le fichier des condition de participation" class="form__cond">Lire les conditions de participation</a>
            </div> -->
            <?php ninja_forms_display_form( 6 ); ?>
        </form>
        <div class="links">
            <div class="contact">
                <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Contactez-nous','wp');?></h3>
                <ul class="list">
                    <li class="list__elt">
                        <a href="<?php the_field('tel1', 48); ?>" class="list__link" title="Telephoner au numero <?php the_field('tel1', 48); ?>"><?php _e('Tél.', 'dw') ?> : <span><?php the_field('tel1', 48); ?></span></a>
                    </li>
                    <?php if(get_field('tel2', 48)): ?>
                    <li class="list__elt">
                        <a href="tel:<?php the_field('tel2', 48); ?>" class="list__link" title="Telephoner au numero <?php the_field('tel2', 48); ?>"><?php _e('Tél.', 'dw') ?> : <span><?php the_field('tel2', 48); ?></span></a>
                    </li>
                    <?php endif; ?>
                    <li class="list__elt">
                        <a href="mailto:<?php the_field('email1', 48); ?>" class="list__link" title="envoyer un email <?php the_field('email1', 48); ?>"><?php _e('Mail', 'dw') ?> : <span><?php the_field('email1', 48); ?></span></a>
                    </li>
                    <?php if(get_field('mail2', 48)): ?>
                    <li class="list__elt">
                        <a href="mailto:<?php the_field('email2', 48); ?>" class="list__link" title="envoyer un email <?php the_field('email2', 48); ?>"><?php _e('Mail', 'dw') ?> : <span><?php the_field('email2', 48); ?></span></a>
                    </li>
                    <?php endif; ?>
                    <li class="list__elt">
                        <!-- <a href="https://www.google.be/maps/place/Avenue+de+la+Gare+15,+6600+Bastogne/@49.9997881,5.7079983,17z/data=!3m1!4b1!4m5!3m4!1s0x47c01900e53f2ba1:0x2fd856badf94124e!8m2!3d49.9997881!4d5.710187" class="list__link">Adresse : <span>Avenue de la gare, 15 à 6600 Bastogne</span></a> -->
                        <p class="list__link"><?php _e('Adresse', 'dw') ?> : <span><?php the_field('adresse', 48); ?></span></p>
                    </li>
                </ul>
            </div>
            <div class="follow">
                <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Suivez-nous','wp');?></h3>
                <ul class="list">
                    <li class="list__elt">
                        <a href="<?php the_field('facebook', 48); ?>" title="Aller vers la page d'accueil Facebook" class="list__link facebook">
                            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="50" height="50">
                                <g>
                                    <path class="st1" d="M369.1,11.8c0,27.7,0,54.2,0,81.5c-4.2,0-8.2,0-12.2,0c-17.5,0-35.1,0-52.6,0c-12.5,0-22.4,7.3-22.9,19.5
                                        c-1,21.7-0.3,43.5-0.3,66c29.1,0,58.1,0,88,0c-0.5,6.1-0.9,11.4-1.4,16.7c-1.8,19.6-3.9,39.1-5.5,58.7c-0.4,5.1-2.9,5.5-7,5.5
                                        c-22-0.1-44.1,0-66.1,0c-2.8,0-5.7,0-9.2,0c0,76.5,0,152.4,0,228.9c-29.2,0-57.7,0-87.1,0c0-76,0-152,0-228.7c-21.1,0-41.4,0-62,0
                                        c0-27.2,0-53.6,0-80.8c20.5,0,40.8,0,61.9,0c0-3.3,0-5.8,0-8.3c0-22.7,0-45.5,0-68.2c0-46,33.6-85,79.3-90.4
                                        c14.5-1.7,29.3-0.4,44-0.4C333.6,11.8,351,11.8,369.1,11.8z"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li class="list__elt">
                        <a href="<?php the_field('twitter', 48); ?>" title="Aller vers la page d'accueil Twitter" class="list__link twitter">
                            <svg version="1.1" class="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="50" height="50">
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
                    </li>
                    <?php if(get_field('instagram', 48)): ?>
                    <li class="list__elt">
                        <a href="<?php the_field('instagram', 48); ?>" title="Aller vers la page d'accueil Instagram" class="list__link instagram">
                            <svg version="1.1" class="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="50" height="50">
                                <g>
                                    <path class="st1" d="M10.1,250c0-33.9-0.4-67.8,0.1-101.7c0.6-43.4,18.1-79,51.2-106.8c18.2-15.2,39.2-24.7,62.5-29.1
                                        c8.8-1.7,17.7-2.3,26.6-2.3c67.5,0,135-0.2,202.5,0.1c30.9,0.1,58.7,10.2,83,29.2c27.1,21.2,44.2,48.8,51.3,82.5
                                        c1.9,9.1,2.7,18.4,2.7,27.7c0,67,0.3,134-0.1,201c-0.3,46.8-19.9,84.4-57.2,112.5c-18.9,14.2-40.3,22.6-63.7,25.7
                                        c-6.1,0.8-12.3,1.2-18.4,1.2c-67.2,0.1-134.4,0.2-201.5,0c-32.1-0.1-60.9-10.2-86-30.2c-28.4-22.7-45.6-52.1-51.3-88
                                        c-1.1-7.1-1.5-14.4-1.6-21.7C10,316.7,10.1,283.4,10.1,250C10.1,250,10.1,250,10.1,250z M453,250c0-33.3,0-66.7,0-100
                                        c0-8.6-1-17-3-25.4c-10.8-44.7-51.9-77.5-97.7-77.5c-67.4-0.1-134.9,0-202.3,0c-10.8,0-21.3,1.5-31.6,4.7
                                        C76.8,64.5,47.1,103.9,47,147.5c-0.2,68.3-0.1,136.7,0,205c0,6.2,0.7,12.4,2,18.5c9.9,48.3,51.4,82,100.7,82
                                        c66.9,0,133.7,0,200.6-0.1c5.4,0,10.9-0.3,16.2-1.2c30.7-5.1,54.5-20.9,71.2-47.2c10.4-16.5,15.3-34.7,15.3-54.3
                                        C453.1,316.9,453,283.4,453,250z"/>
                                    <path class="st1" d="M120.8,250c0-71.4,58.7-130.1,131-129.2c70,0.9,127.4,58.3,127.4,129.2c0,71.2-58.2,129.2-129.5,129.2
                                        C178.8,379.2,120.8,321,120.8,250z M250,342.3c51.1,0,92.3-41.2,92.3-92.3c0-50.8-41-92-91.3-92.4c-51.6-0.3-93.2,40.9-93.2,92.3
                                        C157.7,301.1,198.9,342.3,250,342.3z"/>
                                    <path class="st1" d="M397.6,120.8c-10.1,0-18.4-8.3-18.4-18.5c0-10.2,8.3-18.5,18.6-18.4c10.1,0,18.3,8.4,18.3,18.6
                                        C416.1,112.6,407.7,120.8,397.6,120.8z"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(get_field('youtube', 48)): ?>
                    <li class="list__elt">
                        <a href="<?php the_field('youtube', 48); ?>" title="Aller vers la page d'accueil Youtube" class="list__link instagram">
                            <svg version="1.1" class="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" 
                                viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" width="50" height="50">
                                <g>
                                    <path class="st1" d="M252,239.2c44.6,1.1,88.9,1.8,133.1,3.4c29.1,1,49.9,23.3,51.6,52.4c2.8,47.2,2.9,94.4,0,141.6
                                        c-1.8,30.1-23.6,52-53.7,53.1c-87.8,3.2-175.6,3.2-263.4,0C89.9,488.7,68,466.6,66.3,437c-2.8-47.2-2.9-94.4,0-141.6
                                        c1.8-29.5,22.5-51.7,51.9-52.8C162.8,241,207.5,240.3,252,239.2z M281.7,437.7c2,1.9,3.1,3,4.3,4c7.4,6.1,15.7,7.9,24.8,4.9
                                        c8.8-3,11.4-10.7,12.7-18.9c0.4-2.5,0.4-5.1,0.4-7.6c0-22.5,0.2-45.1-0.1-67.6c-0.1-5.6-0.7-11.4-2.3-16.8
                                        c-4.4-14.2-19.2-19.1-31.6-10.9c-2.7,1.8-5.1,4-8.5,6.7c0-18.2,0-35.2,0-52.2c-7.9,0-15.1,0-22.4,0c0,55.8,0,111.2,0,166.7
                                        c7.7,0,15,0,22.4,0C281.5,443.4,281.6,441.1,281.7,437.7z M408.8,388.3c-0.7-15.4-0.7-30.1-2.2-44.6c-1.1-10.4-7.2-18.1-17.2-22
                                        c-23.3-9.1-46.9,5.7-47.8,30.7c-0.8,21.1-0.2,42.3-0.1,63.4c0,3.5,0.7,7,1.5,10.4c3.2,12.7,12.6,21.5,25.2,23
                                        c13.7,1.6,26.5-0.5,34.4-13.6c6.3-10.5,5.7-22.3,5.3-34.3c-7.9,0-15.3,0-22.8,0c-0.4,6-0.7,11.6-1.2,17.2c-0.4,4.7-3,7.5-7.9,7.9
                                        c-5.1,0.4-9.6-1.1-10.2-6.5c-1.1-10.4-1.1-20.8-1.7-31.7C379.5,388.3,393.3,388.3,408.8,388.3z M171.2,322.9c0,2.6,0,4.5,0,6.5
                                        c0,31.2,0,62.3,0,93.5c0,2.9,0.1,5.9,0.5,8.8c1.8,14.9,11.9,20.7,25.5,14.3c4.5-2.1,8.3-5.8,12.4-8.8c1.1-0.8,2.1-1.7,4.1-3.3
                                        c0,4.9,0,8.5,0,12.4c7.7,0,14.8,0,22.3,0c0-41.2,0-82.1,0-123.2c-7.6,0-14.8,0-22.5,0c0,2.6,0,4.8,0,6.9c0,26.8,0.1,53.7-0.2,80.5
                                        c0,3-1.9,6.6-4,8.9c-3,3.3-7.4,7-11.7,4c-2.4-1.7-3.3-6.8-3.3-10.3c-0.3-27.8-0.1-55.7-0.1-83.5c0-2.1,0-4.2,0-6.7
                                        C186.3,322.9,179.2,322.9,171.2,322.9z M145,304.6c9.2,0,17.7,0,26.3,0c0-8.9,0-17,0-25.3c-26.2,0-52,0-78,0c0,8.5,0,16.6,0,25.6
                                        c8.8,0,17.3,0,26.3,0c0,47.6,0,94.3,0,141.1c8.7,0,16.9,0,25.3,0C145,399.1,145,352.5,145,304.6z"/>
                                    <path class="st1" d="M96.4,9c10.9,0,21,0,31.6,0c6.9,27.3,13.7,54.4,20.6,81.6c0.6,0,1.3,0,1.9,0c6.5-27.1,13-54.1,19.6-81.4
                                        c10.6,0,20.9,0,31.8,0c-0.5,1.8-0.8,3.5-1.3,5.1c-11.3,36.7-22.6,73.4-33.7,110.1c-1,3.1-1.5,6.5-1.5,9.8
                                        c-0.1,24.1-0.1,48.2-0.1,72.3c0,2.1,0,4.3,0,6.8c-10.5,0-20.6,0-31.6,0c0-2.1,0-4.2,0-6.2c0-23.1,0.1-46.3-0.1-69.4
                                        c0-3.5-0.6-7-1.6-10.4C120.9,90,109.6,53,98.3,15.9C97.7,13.8,97.2,11.8,96.4,9z"/>
                                    <path class="st1" d="M201.2,137.1c0-14.3-0.5-28.6,0.1-42.9c0.8-19.2,12.8-32,32-34.7c16-2.3,30.5,0.4,41.2,14c5.7,7.3,7.9,15.7,7.9,24.7
                                        c0.1,26.1,0.1,52.1,0,78.2c-0.1,10.2-2.2,19.9-9,28c-10.1,12.1-29.8,16.4-47.7,10.5c-13.7-4.5-23.7-17.8-24.3-33.6
                                        c-0.5-14.7-0.1-29.4-0.1-44.1C201.3,137.1,201.3,137.1,201.2,137.1z M229.8,137.5C229.8,137.5,229.8,137.5,229.8,137.5
                                        c0,13.7-0.2,27.4,0.1,41.2c0.2,10.7,9.7,16.1,18.4,10.8c4.8-2.9,5.6-7.7,5.6-12.8c0-26.3,0.1-52.5,0-78.8c0-8.7-4.3-12.9-12.5-12.8
                                        c-7.7,0.1-11.5,4.3-11.5,13.1C229.8,111.2,229.8,124.3,229.8,137.5z"/>
                                    <path class="st1" d="M358.6,62.8c9.5,0,18.2,0,27.5,0c0,50.1,0,100.1,0,150.4c-9.1,0-18,0-27.6,0c0-5.1,0-9.8,0-14.6c-0.6-0.4-1.2-0.7-1.8-1.1
                                        c-1.2,1.7-2.1,4-3.7,5.1c-5.5,3.9-10.9,8.5-17.1,11c-15.4,6.1-26.3-0.6-28.8-16.9c-0.4-2.9-0.7-5.8-0.7-8.8c0-40.2,0-80.4,0-120.5
                                        c0-1.3,0.1-2.7,0.2-4.5c9.2,0,18.1,0,27.9,0c0,2.1,0,4.4,0,6.7c0,35.1,0,70.2,0,105.3c0,4.6-1.1,10.1,4.1,12.6
                                        c5.5,2.7,9.6-1.2,13.8-4.2c4.4-3.2,6.4-7,6.4-12.9c-0.3-33.5-0.2-67-0.2-100.6C358.6,67.8,358.6,65.7,358.6,62.8z"/>
                                    <path class="st0" d="M281.7,437.7c-0.2,3.4-0.3,5.7-0.4,8.4c-7.4,0-14.7,0-22.4,0c0-55.5,0-110.9,0-166.7c7.4,0,14.5,0,22.4,0
                                        c0,17,0,34,0,52.2c3.5-2.8,5.9-4.9,8.5-6.7c12.4-8.3,27.2-3.3,31.6,10.9c1.6,5.3,2.3,11.1,2.3,16.8c0.3,22.5,0.1,45.1,0.1,67.6
                                        c0,2.5,0,5.1-0.4,7.6c-1.3,8.2-3.9,15.9-12.7,18.9c-9,3-17.4,1.2-24.8-4.9C284.8,440.7,283.8,439.6,281.7,437.7z M300.4,385.4
                                        C300.4,385.4,300.4,385.4,300.4,385.4c0.1-1.2,0.1-2.3,0.1-3.5c-0.1-10.2,0.1-20.3-0.4-30.5c-0.3-6-4.1-9.4-9.3-9.2
                                        c-5.9,0.2-9.3,3.9-9.3,10.1c0,21.3,0,42.6,0,63.9c0,6.4,3.9,10.6,10.2,10.8c5.7,0.2,8.5-2.7,8.6-10
                                        C300.5,406.5,300.4,395.9,300.4,385.4z"/>
                                    <path class="st0" d="M408.8,388.3c-15.5,0-29.4,0-44.6,0c0.5,10.9,0.6,21.3,1.7,31.7c0.5,5.4,5.1,6.9,10.2,6.5
                                        c4.9-0.4,7.5-3.1,7.9-7.9c0.5-5.6,0.8-11.3,1.2-17.2c7.5,0,14.9,0,22.8,0c0.4,12,1,23.8-5.3,34.3c-7.8,13.1-20.6,15.2-34.4,13.6
                                        c-12.6-1.5-22.1-10.4-25.2-23c-0.8-3.4-1.5-6.9-1.5-10.4c-0.1-21.1-0.7-42.3,0.1-63.4c0.9-25,24.5-39.7,47.8-30.7
                                        c10,3.9,16.2,11.6,17.2,22C408.1,358.2,408.1,372.9,408.8,388.3z M385.1,367.2c-0.5-6.4-0.6-12-1.4-17.5c-0.7-4.6-3.9-6.9-8.7-7
                                        c-4.6-0.1-8.5,1.5-9.3,6.2c-1,6-1,12.1-1.4,18.4C371.7,367.2,377.9,367.2,385.1,367.2z"/>
                                    <path class="st0" d="M171.2,322.9c7.9,0,15.1,0,22.9,0c0,2.5,0,4.6,0,6.7c0,27.8-0.1,55.7,0.1,83.5c0,3.6,0.9,8.7,3.3,10.3
                                        c4.3,3,8.7-0.7,11.7-4c2.1-2.3,4-5.9,4-8.9c0.3-26.8,0.2-53.7,0.2-80.5c0-2.1,0-4.3,0-6.9c7.7,0,15,0,22.5,0c0,41.1,0,82,0,123.2
                                        c-7.5,0-14.6,0-22.3,0c0-3.9,0-7.5,0-12.4c-2,1.6-3,2.5-4.1,3.3c-4.1,3-7.9,6.7-12.4,8.8c-13.6,6.4-23.7,0.6-25.5-14.3
                                        c-0.4-2.9-0.5-5.9-0.5-8.8c0-31.2,0-62.3,0-93.5C171.2,327.4,171.2,325.5,171.2,322.9z"/>
                                    <path class="st0" d="M145,304.6c0,47.8,0,94.4,0,141.4c-8.5,0-16.6,0-25.3,0c0-46.7,0-93.5,0-141.1c-9.1,0-17.5,0-26.3,0
                                        c0-9,0-17.1,0-25.6c26,0,51.8,0,78,0c0,8.3,0,16.4,0,25.3C162.8,304.6,154.3,304.6,145,304.6z"/>
                                    <path class="st0" d="M229.8,137.5c0-13.1,0-26.3,0-39.4c0-8.8,3.8-13,11.5-13.1c8.2-0.1,12.5,4.1,12.5,12.8c0.1,26.3,0,52.5,0,78.8
                                        c0,5.1-0.8,9.9-5.6,12.8c-8.7,5.3-18.1-0.1-18.4-10.8C229.6,164.9,229.9,151.2,229.8,137.5C229.8,137.5,229.8,137.5,229.8,137.5z"
                                        />
                                    <path d="M300.4,385.4c0,10.6,0.1,21.1-0.1,31.7c-0.1,7.3-2.9,10.2-8.6,10c-6.3-0.3-10.2-4.4-10.2-10.8c0-21.3,0-42.6,0-63.9
                                        c0-6.2,3.4-9.9,9.3-10.1c5.1-0.2,9,3.2,9.3,9.2c0.4,10.1,0.3,20.3,0.4,30.5C300.5,383,300.5,384.2,300.4,385.4
                                        C300.4,385.4,300.4,385.4,300.4,385.4z"/>
                                    <path d="M385.1,367.2c-7.2,0-13.4,0-20.8,0c0.4-6.3,0.4-12.4,1.4-18.4c0.8-4.7,4.7-6.3,9.3-6.2c4.7,0.1,8,2.4,8.7,7
                                        C384.6,355.2,384.7,360.8,385.1,367.2z"/>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="CTA">
                <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Autre chose','wp');?> ?</h3>
                <ul class="list">
                    <li class="list__elt">
                        <a href="<?php the_permalink(46); ?>" title="Aller vers la page de <?php get_the_title(46); ?>." class="list__elt--link"><?php _e('Une question', 'dw') ?> ?</a>
                    </li>
                    <li class="list__elt">
                        <a href="<?php the_permalink(44); ?>" title="Aller vers la page de <?php get_the_title(44); ?>." class="list__elt--link"><?php _e('Partir avec nous', 'dw') ?> ?</a>
                    </li>
                    <li class="list__elt">
                        <a href="<?php the_permalink(50); ?>" title="Aller vers la page de <?php get_the_title(50); ?>." class="list__elt--link"><?php _e('Établir un partenaria', 'dw') ?> ?</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>