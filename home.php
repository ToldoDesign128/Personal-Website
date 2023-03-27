<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero__box">
        <div class="row">
            <div class="hero__box__text col-lg-6 col-md-8 col-12 row">
                <h2 class="col-12 my-5 p-0">News</h2>
                <h5 class="col-12 my-2">Una piccola sezione dove parlo di design, sviluppo e molto altro legato al mondo della tecnologia e della comunicazione.</h5>
            </div>
        </div>
    </div>
</section>

<!-- Loop News -->
<section class="container news my-5">
    <div class="row">
        <?php 
            $loop = new WP_Query( array(
                'post_type'         => 'post',
                'post_status'       => 'publish',
                'orderby'           => 'count',
                'order'             => 'ASC',
                'posts_per_page'    => 999 ,
            ));

            while ($loop -> have_posts()) : $loop -> the_post();?>

                <article class="col-md-6 col-12 news__card">
                    <div class="news__card__content">
                        <div class="news__card__content__image">
                            <?php the_post_thumbnail("large");?>
                        </div>
                        <div class="news__card__content__title">
                            <h3><?php echo get_the_title();?></h3>
                        </div>
                        <div class="news__card__content__text">
                            <?php echo  the_excerpt();?>
                        </div>
                        <div class="button">
                            <a href="<?php echo get_the_permalink();?>" class="button__link">
                                <button class="button__link__items">Leggi di più</button>
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