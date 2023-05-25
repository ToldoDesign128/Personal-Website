<?php get_header() ?>
<section class="single">
    <div class="container">
        <div class="row">
            <div class="single__content col-lg-9">

                <p><?php echo get_the_date(); ?></p>
                <h1><?php echo the_title() ?></h1>

                <div class="single__content__image">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <div class="single__content__text">
                    <?php echo the_content(); ?>
                </div>
            </div>
            <div class="single__side col-lg-3">
                <h4>News Corelate</h4>
                <div class="row">
                    <?php
                    $loop = new WP_Query(array(
                        'post_type'         => 'post',
                        'post_status'       => 'publish',
                        'orderby'           => 'date',
                        'order'             => 'ASC',
                        'posts_per_page'    => 3,
                    ));

                    while ($loop->have_posts()) : $loop->the_post(); ?>

                        <a href="<?php echo the_permalink();?>">
                            <article class="single__side__box col-12 row my-4">
                                <div class="single__side__box__image col-4">
                                    <?php the_post_thumbnail('xsmall'); ?>
                                </div>
                                <div class="single__side__box__content col-8">
                                    <p><?php echo get_the_date(); ?></p>
                                    <h5><?php echo the_title() ?></h5>
                                </div>
                            </article>
                        </a>

                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5 cta">
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
    </div>
</section>
<?php get_footer() ?>