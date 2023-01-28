<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero__box">
        <div class="row">
            <div class="hero__box__text col-lg-8 col-md-10 col-12 row">
                <h2 class="col-12 my-5 p-0">Progetti</h2>
                <h5 class="col-12 my-2">Aiuto le aziende a creare un'immagine di valore per promuovere il loro business.</h5>
                <h5 class="col-12 my-2">Solo progettando un esperienza utente costruita su misura potrai valorizzarti al meglio, ecco qui alcuni esempi di cosa ti aspetta.</h5>
            </div>
            <div class="row hero__progetti px-3">
                <p class="offset-md-1 col-md-6 col-12">Scorri per visualizzare alcuni dei miei lavori</p>
                <div class="offset-md-1 col-md-6 col-12 hero__progetti__icon my-3">
                    <a href="#loop-progetti">
                        <iconify-icon icon="material-symbols:arrow-downward"></iconify-icon>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Loop Progetti -->
<section id="loop-progetti" class="container progetti">
    <div class="row">
        <?php 
            $loop = new WP_Query( array(
                'post_type'         => 'progetti',
                'post_status'       => 'publish',
                'orderby'           => 'count',
                'order'             => 'ASC',
                'posts_per_page'    => 999 ,
            ));

            while ($loop -> have_posts()) : $loop -> the_post();

            $link_progetti = get_post_meta( $post->ID, '_link_progetti', true );?>

            <article class="col-lg-4 col-md-6 col-12 progetti__card">
                <div class="progetti__card__content">
                    <div class="progetti__card__content__image">
                        <?php the_post_thumbnail("large");?>
                    </div>
                    <div class="progetti__card__content__title">
                        <h3><?php echo get_the_title();?></h3>
                    </div>
                    <div class="button">
                        <a href="<?php echo esc_url($link_progetti);?>" target="_blank" class="button__link">
                            <button class="button__link__items">Visita il sito</button>
                        </a>
                    </div>
                </div>
            </article>

        <?php endwhile;?>
    </div>
</section>

<!-- CTA -->
<section class="container-fluid py-5 cta">
    <div class="container my-5">
        <div class="row align-items-center">
            <div class="col-md-9 col-12 my-3">
                <h4>Pronto per costruire assieme qualcosa di grande?</h4>
            </div>
            <div class="col-md-3 col-12 button my-3">
                <a href="contatti" class="button__link">
                    <button class="button__link__items">contattami</button>
                </a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>