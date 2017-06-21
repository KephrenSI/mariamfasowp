<?php 
/*
    Template Name: PAGE-DON
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
    <section class="dons">
        <h2 class="main__heading2" aria-level="2" role="heading"><?php _e('Donnations', 'dw') ?></h2>
        <section class="unique">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Don unique', 'dw') ?></h3>
            <p class="unique__txt">
                <?php the_field('don_unique') ?>
            </p>
            <form action="post" class="form">
               
                <input class="form__input form__price" type="radio" name="gender" value="60" id="60">
                <label for="60">60 <span>€</span></label>
                
                <input class="form__input form__price" type="radio" name="gender" value="40" id="40">
                <label for="40">40 <span>€</span></label>
                
                <input class="form__input form__price" type="radio" name="gender" value="20" id="20">
                <label for="20">20 <span>€</span></label>

                <input class="form__input form__choice" class="montant__price montant__free" name="gender" value="10" step="5" value="0" min="10" type="number" id="€">
                <label for="€">€</label>

                <button class="btn" type="submit">
                    Faire un don
                </button>
            </form>
        </section>
        <section class="mensuel">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Don mensuel', 'dw') ?></h3>
            <div class="mensuel__txt">
                <?php the_field('don_mensuel') ?>
            </div>
            <form action="post" class="form">
                
                <input class="form__input form__price" type="radio" name="gender" value="15" id="15">
                <label for="15">15 <span>€</span></label>
                
                <input class="form__input form__price" type="radio" name="gender" value="10" id="10">
                <label for="10">10 <span>€</span></label>
                
                <input class="form__input form__price" type="radio" name="gender" value="7" id="7">
                <label for="7">7 <span>€</span></label>
                
                <input class="form__input form__choice" class="montant__price montant__free" name="gender" value="20" step="5" value="0" min="20" type="number" id="euro">
                <label for="euro">€</label>
                
                <button class="btn" type="submit">
                    <?php _e('Faire un don', 'dw') ?>
                </button>
            </form>
        </section>
    </section>
    <section class="complementaire">
        <h2 class="main__heading2 hidden" aria-level="2" role="heading"><?php _e('Transparence', 'dw') ?></h2>
        <div class="transparence">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Votre don en toute transparence', 'dw') ?></h3>
            <divdiv class="transparence__txt">
            <?php the_field('transparence') ?>
            </divdiv>
        </div>
        <div class="fisc">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Avantages fiscaux', 'dw') ?></h3>
            <divdiv class="fisc__txt">
            <?php the_field('avantages_fiscaux') ?>
            </divdiv>
            <a class="fisc__link" href="https://finances.belgium.be/fr/particuliers/avantages_fiscaux/dons" title="Aller vers le site des finances belges"><?php _e('Plus d\'information', 'dw') ?></a>
        </div>
        <div class="soutient">
            <h3 class="main__heading3" aria-level="3" role="heading"><?php _e('Pourquoi nous soutenir', 'dw') ?> ?</h3>
            <div class="soutient__txt">
            <?php the_field('soutient') ?>
            </div>
        </div>
    </section>
</main>
<?php
    get_footer();
?>