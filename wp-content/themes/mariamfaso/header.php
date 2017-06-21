<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php wp_title(); ?></title>
        <meta charset="UTF-8">
        <meta name="author" content="Simonis K&eacute;phren">
        <meta name="description" content="Site de l'asbl de relations Nord-Sud Mariam Faso">
        <meta name="keywords" content="Mariam Faso, Relations Nord-Sud, asbl, Construction, Afrique, Burkina Faso">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="<?php dw_asset('css/styles.css'); ?>">
        <link rel="icon" href="<?php dw_asset('img/logo.ico'); ?>" />
    </head>
    <body>
        <header class="header">
            <h1  class="header__heading1 hidden" aria-level="1" role="heading"><?php bloginfo('name'); ?></h1>

            <!-- <nav class="nav-gestion" role="navigation" aria-label="Language Navigation">
                <h2 class="languages__heading2 hidden">barre de gestion</h2>
                <ul class="gestion">
                    <li class="languages">
                        <a class="languages__dropdown"  href="#">Langues</a>
                        
                        <ul class="list">
                            <li class="list__elt">
                                <a class="languages__item languages__item--fr" href="#">FR</a>
                            </li>
                            <li class="list__elt">
                                <a class="languages__item languages__item--en" href="#">EN</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav> -->

            <input class="burger-check" id="burger-check" type="checkbox">
            <label for="burger-check" class="burger"></label>

            <nav class="nav" role="navigation" aria-label="Global Navigation">
                <h2 class="nav__heading2 hidden" aria-level="2" role="heading">
                    <?php _e('barre de menu', 'dw') ?>
                </h2>

                <ul class="menu"> 
					
                	<li class="menu__elt">
                        <a href="<?php the_permalink(23); ?>" title="Recharger la page d'<?php get_the_title(25); ?>." class="menu__logo">
                            <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="75px"; height="75px";
                                 viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;">
                                <circle class="st0" cx="247" cy="249.9" r="199.4"/>
                                <g>
                                    <path class="st1" d="M404.6,209.5c-2.6,0.9-5.1,2.4-7.8,2.7c-4.2,0.5-8.3,0.4-11.9,3.1c-0.7,0.5-2.1,0.3-3.2,0.3
                                        c-0.9,0-1.9-0.3-2.5,0.1c-1.7,1.2-2.8,0.4-4-0.8c-4.7-4.5-9.5-9-14.4-13.4c-2.6-2.3-5.3-4.8-8.4-6.2c-4.7-2.1-7.5-5-8.4-10.1
                                        c-0.6-3.7-2.9-6.9-6.3-8.5c-2.6-1.2-3.1-3.3-3.5-5.5c-0.5-2.6-0.3-5.3-1.2-7.7c-0.9-2.4-2.6-4.6-4.2-6.8c-1.2-1.7-4.1-3.1-4-4.6
                                        c0.2-3.4-2.1-5.2-3.5-7.6c-4-6.7-8.1-13.3-12-20c-1-1.8-1.6-3.8-2.5-5.7c3.6,3.2,4.6,8.2,9.2,10c2.6-6.8,3.6-13.3-0.8-19.5
                                        c-3.4,2.2-7.7,3.5-11,1.7c-4.2-2.3-6.9-1.2-10,1.1c-1.1,0.8-2.5,1.9-3.7,1.8c-5.7-0.5-10.9-4.1-16.9-2.7c-0.2,0-0.4-0.2-0.6-0.3
                                        c-2-0.7-4-1.5-5.9-2.2c-1.1-0.4-2.5-0.5-3.3-1.2c-4.5-3.8-7.3-4.2-12.2-1.1c-2.4,1.5-3.8,3.5-2.4,6.5c1.1,2.3-0.2,3.6-1.7,4.8
                                        c-1.5,1.2-3.1,1-4.9,0c-2.9-1.6-5.9-3-9.1-3.7c-3-0.7-5.3-1.6-5.7-5c-0.1-0.5-0.4-1.2-0.8-1.3c-3.4-1-6.7-2.2-10.1-2.6
                                        c-3-0.3-5.4-1.2-7-3.7c-1.2-1.8-2.1-3.7-3.2-5.5c1.3-2.3,4-4.3,1.2-7c-1.6-1.5-1.8-2.6,0.1-4c0.7-0.5,1-1.5,1.8-3
                                        c-1.6,0.6-2.4,0.9-3.3,1.2c-1.6-2.9-3.1-3.2-6.2-2c-1.6,0.7-3.6,0.7-5.4,0.8c-1.3,0.1-2.7-0.5-4-0.4c-4.2,0.3-8.3,0.7-12.6-0.4
                                        c-3-0.7-6.6,0.2-9.7,1c-4.5,1-9.2,2-13.3,4c-3,1.4-5.4,3.6-8.5,0.5c-0.3-0.3-1.2,0.3-1.8,0.3c-2.8,0-5.7,0.4-7.7-2.2
                                        c-2.7-3.6-2.9-3.6-5.2,0.7c-1.9,3.4-3.6,7-8.1,7.6c-6.2,0.8-8.6,6-11.5,10.4c-0.8,1.3-0.3,3.4-0.5,5.1c-0.2,1.1-0.3,2.5-1,3.3
                                        c-3.8,4.3-8.2,7.5-14.3,8.2c-1.7,0.2-3.3,2.1-4.8,3.4c-1.2,1-2,3-3.3,3.4c-3.7,1.1-4.6,4.2-6,7c-0.4,0.8-0.3,2.1-0.9,2.4
                                        c-4.7,2.6-7,7.1-9.8,11.3c-1.6,2.5-3.3,4.8-5,7.3c4.4,2.4,5.1,4.3,3.6,7.9c-0.3,0.7-1,1.6-0.8,2.1c1.9,5.1,1.3,9.8-1.9,14.2
                                        c-0.3,0.4-0.4,1-0.4,1.6c-0.5,3.7-2.5,6.3-5.6,8.3c2.5,3.3,4.4,6.4,2.2,10.7c-1.5,2.9,1,4.4,3.1,5.6c1.6,0.8,3.4,0.8,3.3,3.5
                                        c0,0.9,2,1.9,3,2.9c1.2,1.8,2.5,3.8,4.2,5.2c2.1,1.6,3.5,3.7,3.4,6.1c-0.2,4.2,2.7,6.6,5,8.9c4.5,4.3,9.6,7.9,14.6,11.7
                                        c4.5,3.4,8.8,6.2,15.1,3.4c7-3.2,14.5-3.5,21.9-0.3c0.9,0.4,2.1,0.3,3,0c8.5-2.8,16.7-6.6,25.9-7.3c5-0.4,9.5,2.6,10.6,7.1
                                        c0.3,1.2,1.4,3.1,2.1,3.1c4.3-0.2,8.6-0.8,12.9-1.3c0.1,0,0.2,0,0.3,0c1.8,1.5,3.6,3.1,6.1,5.2c1.6,3.6,1.6,8.1-1.3,12.1
                                        c0.5,1.1,1.1,1.9,1.1,2.8c0,0.9-0.6,1.8-1,2.7c-0.9,1.8-1.9,3.6-3.4,6.3c2.4,3,5.3,6.7,8.3,10.4c2.2,2.7,5.2,5,6.7,8.1
                                        c3,5.7,5.2,11.8,7.7,17.7c0.2,0.5,0.5,1.3,0.3,1.6c-3.3,3.4,0.3,6,1,8.9c0.5,2.3,1.5,4.8,1,6.9c-0.4,2-2.8,3.6-3.8,5.6
                                        c-3.6,7.5-6.2,15.3-5.4,23.8c0.2,1.8,1.1,3.5,1.9,5.2c0.8,1.6,2.1,2.9,3,4.4c2.3,4,4.6,8.1,6.7,12.2c0.8,1.5,1.6,3.1,1.9,4.8
                                        c1.2,6.2,2.1,12.4,3.5,18.5c0.6,2.8,1.6,6,3.5,7.8c4.6,4.1,6.5,9.4,8.8,14.7c0.6,1.4,1.6,2.7,2.4,4c1.4,2.3,2.8,4.6,0.5,7.2
                                        c-0.3,0.3-0.1,1,0,1.5c0.7,4.2,3.9,6.3,7,8.5c0.5,0.3,1.3,0.5,1.9,0.4c2.7-0.7,5.8-1,8-2.5c3.4-2.4,6.9-1.5,10.2-1.3
                                        c5.2,0.3,10.2-0.9,14.3-3.4c7.4-4.6,13.6-10.6,18.1-18.3c1.1-1.9,2.8-3.4,4.5-4.8c2-1.7,6-11,4.9-13c-2-3.6,0.4-4.6,2.8-5.6
                                        c2.1-0.9,4.4-1.5,6.6-2.4c2.2-0.9,4.2-2.1,3.4-5.1c-0.2-0.7,0.2-1.5,0.4-2.3c1.7-4.9-0.9-9.2-2.3-13.6c-0.7-2.3-1-3.4,1.1-4.8
                                        c3-2.1,5.7-4.7,8.7-6.9c2.8-2,5.6-3.8,8.6-5.5c2-1.1,4.4-1.6,6.2-2.9c3.3-2.5,6.2-5.7,6.3-9.9c0.2-5-1.2-10-0.9-14.9
                                        c0.2-3.5-0.5-5.6-2.5-8.7c-2.7-4.2-4-10-1.6-15.7c-5.3-2.8-2.9-6.8-1.4-10.5c0.5-1.3,1.4-2.4,2.1-3.6c2.2-3.9,3.7-8.3,8.1-10.5
                                        c1.3-0.7,2.3-2.1,3.2-3.3c4.8-6.8,10.5-12.7,17.6-16.9c6.9-4.1,12.3-9.6,16.5-16.2c2.9-4.5,5.4-9.4,7.8-14.2c2.5-5,6-9.6,6.3-15.5
                                        c0.1-2.5,0.6-5,1-8.8C407.2,208.6,405.9,209.1,404.6,209.5z M158.9,204.3l3.5,20.3l-18.2-9.6l-18.2,9.6l3.5-20.3l-14.7-14.4l20.4-3
                                        l9.1-18.5l9.1,18.5l20.4,3L158.9,204.3z"/>
                                    <path class="st1" d="M394.5,339.4c-0.5,4.1-1.5,5.2-5,5c-2.6,9.7-11.2,10.3-19,12.6c-0.2,0.9-0.1,2-0.7,2.5
                                        c-3.4,3.4-3,7.6-1.5,11.2c2.1,5.2-0.8,8.5-3.5,11.5c-2.8,3.2-2.9,6.1-2,9.8c0.4,1.6,0.7,3.4,0.5,5.1c-0.6,5.3,5.1,10.1,10.1,8.3
                                        c0.8-0.3,1.7-0.7,2.6-0.7c2.7,0.2,4-1.4,4.9-3.6c3.2-7.6,6.4-15.1,9.6-22.7c3.3-7.4,6.9-14.8,7.4-23.2c0.7,0.8,1.3,1.5,2,2.3
                                        c2.8-4.1,0.8-15.8-3.5-20.8C395.7,337.6,394.6,338.4,394.5,339.4z"/>
                                </g>
                            </svg>
                        </a>
                    </li> 
                    <!-- <?php foreach (dw_get_nav_items('header') as $item): ?>
                    <li class="menu__elt">
                        <a href="<?php echo $item->link; ?>" title="Aller vers la page page <?php echo $sub->label; ?>" class="menu__drop  menu__drop--link <?php echo $item -> isCurrent ? ' active' : ''; ?>"><?php echo $item->label; ?></a>
                        <?php if($item->children): ?>
                        <ul class="list">
                        	<?php foreach($item->children as $sub): ?>
                            <li class="list__elt">
                                <a href="<?php echo $sub->link; ?>" title="Aller vers la page pages <?php echo $sub->label; ?>" class="list__link <?php echo $item -> isCurrent ? ' actived' : ''; ?>"><?php echo $sub->label; ?></a>
                            </li>
                            <?php endforeach ?>
                        </ul>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?> -->
                    <li class="menu__elt">
                        <a href="<?php the_permalink(23); ?>" title="Recharger la page d'<?php get_the_title(23); ?>." class="menu__drop  menu__drop--link <?php if (is_page('Accueil')) echo 'active'; ?>"><?php _e('Accueil', 'dw') ?></a>
                    </li>

                    <li class="menu__elt">
                        <p class="menu__drop menu__drop--txt"><?php _e('Nos Campagnes', 'dw') ?></p>
                        <ul class="list">
                            <li class="list__elt">
                                <a href="<?php the_permalink(32); ?>" title="Aller vers la page des <?php get_the_title(32); ?>." class="list__link <?php if (is_page('Actualités')) echo 'actived'; ?>"><?php _e('Actualités', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(34); ?>" title="Aller vers la page des <?php get_the_title(34); ?>." class="list__link <?php if (is_page('Projets')) echo 'actived'; ?>"><?php _e('Projets', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(36); ?>" title="Aller vers la page des <?php get_the_title(36); ?>." class="list__link <?php if (is_page('Évènements')) echo 'actived'; ?>"><?php _e('Évènements', 'dw') ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__elt">
                        <a class="menu__drop menu__drop--link <?php if (is_page('À propos')) echo 'active'; ?>" href="<?php the_permalink(25); ?>" title="Aller vers la page des <?php get_the_title(25); ?>."><?php _e('À propos', 'dw') ?></a>
                        <ul class="list">
                            <li class="list__elt">
                                <a href="<?php the_permalink(25); ?>#historique" title="Aller vers la page <?php get_the_title(25); ?> dans la section historique" class="list__link"><?php _e('Historique', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(25); ?>#but" title="Aller vers la page <?php get_the_title(25); ?> dans la section but" class="list__link"><?php _e('Actions', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(25); ?>#membres" title="Aller vers la page <?php get_the_title(25); ?> dans la section membres" class="list__link"><?php _e('Membres', 'dw') ?></a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu__elt">
                        <p class="menu__drop menu__drop--txt"><?php _e('Participer', 'dw') ?></p>
                        <ul class="list">
                            <li class="list__elt">
                                <a href="<?php the_permalink(42); ?>" title="Aller vers la page de <?php get_the_title(42); ?>." class="list__link <?php if (is_page('Faire un don')) echo 'actived'; ?>"><?php _e('Faire un don', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(50); ?>" title="Aller vers la page de <?php get_the_title(50); ?>." class="list__link <?php if (is_page('Partenaria')) echo 'actived'; ?>"><?php _e('Partenaria', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(44); ?>" title="Aller vers la page de <?php get_the_title(44); ?>." class="list__link <?php if (is_page('Voyager')) echo 'actived'; ?>"><?php _e('Voyager', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(48); ?>" title="Aller vers la page de <?php get_the_title(48); ?>." class="list__link <?php if (is_page('Contact')) echo 'actived'; ?>"><?php _e('Contact', 'dw') ?></a>
                            </li>
                            <li class="list__elt">
                                <a href="<?php the_permalink(46); ?>" title="Aller vers la page de <?php get_the_title(46); ?>." class="list__link <?php if (is_page('FAQ')) echo 'actived'; ?>"><?php _e('FAQ', 'dw') ?></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>