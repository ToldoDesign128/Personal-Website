<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero__box">
        <div class="row h-100">
            <div class="hero__box__text col-lg-8 col-md-10 col-12 row">
                <h5 class="col-12 my-3">👋 Ciao, mi chiamo <b>Federico</b> piacere di conoscerti</h5>
                <h1 class="col-12 my-3 p-0">Design & Develop</h1>
                <p class="col-12 my-3">
                    Stai cercando di migliorare la tua presenza online?
                    <br>
                    <b>Hai trovato chi fa al caso tuo!</b>
                </p>
                <div class="row col-12 my-5">
                    <div class="button col-auto my-2">
                        <a href="contatti" class="button__link">
                            <button class="button__link__items">Contattami</button>
                        </a>
                    </div>
                    <div class="button col-auto my-2">
                        <a href="progetti" class="button__link">
                            <button class="button__link__items">I miei progetti</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hero__box__image col-lg-4 col-12">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/IMG_7232.webp'; ?>" alt="Foto federico Toldo">
            </div>
        </div>
    </div>
</section>

<!-- Foto small device -->
<section class="cover">
    <img loading="lazy" src="<?php echo get_template_directory_uri() . '/assets/img/IMG_7232.webp'; ?>" alt="Foto federico Toldo">
</section>

<!-- Servizi -->
<section class="container-fluid servizi my-5">
    <div class="container">
        <div class="row">
            <div class="servizi__title col-lg-8 co-md-10 col-12 row">
                <h2 class="col-auto">Servizi</h2>
                <a href="about" class="col-auto">
                    <iconify-icon icon="material-symbols:arrow-outward"></iconify-icon>
                </a>
            </div>
        </div>
    </div>
    <div class="servizi__carousel splide">
        <div class="servizi__carousel__track__list splide__track">
            <ul class="servizi__carousel__track__list splide__list">
                <li class="servizi__carousel__track__list__item splide__slide"> <img loading="lazy" src="https://sergiom106.sg-host.com/wp-content/uploads/2023/05/balazs-ketyi-FeuEg-8XlA8-unsplash.jpg" class="servizi__carousel__track__list__item__image" alt="">
                    <h5 class="servizi__carousel__track__list__item__title"> Design </h5>
                </li>
                <li class="servizi__carousel__track__list__item splide__slide"> <img loading="lazy" src="https://sergiom106.sg-host.com/wp-content/uploads/2023/05/florian-olivo-4hbJ-eymZ1o-unsplash-scaled.jpg" class="servizi__carousel__track__list__item__image" alt="">
                    <h5 class="servizi__carousel__track__list__item__title"> Sviluppo Web </h5>
                </li>
                <li class="servizi__carousel__track__list__item splide__slide"> <img loading="lazy" src="https://sergiom106.sg-host.com/wp-content/uploads/2023/05/carlos-muza-hpjSkU2UYSU-unsplash.jpg" class="servizi__carousel__track__list__item__image" alt="">
                    <h5 class="servizi__carousel__track__list__item__title"> Marketing </h5>
                </li>
                <li class="servizi__carousel__track__list__item splide__slide"> <img loading="lazy" src="https://sergiom106.sg-host.com/wp-content/uploads/2023/05/dylan-gillis-KdeqA3aTnBY-unsplash-scaled.jpg" class="servizi__carousel__track__list__item__image" alt="">
                    <h5 class="servizi__carousel__track__list__item__title"> Comunication Manager </h5>
                </li>
                <li class="servizi__carousel__track__list__item splide__slide"> <img loading="lazy" src="https://sergiom106.sg-host.com/wp-content/uploads/2023/05/stephen-phillips-hostreviews-co-uk-shr_Xn8S8QU-unsplash-scaled.jpg" class="servizi__carousel__track__list__item__image" alt="">
                    <h5 class="servizi__carousel__track__list__item__title"> Web Menagement </h5>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- I miei lavori -->
<section class="servizi py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="servizi__title col-lg-8 co-md-10 col-12 row">
                <h2 class="col-auto">Alcuni lavori</h2>
                <a href="progetti" class="col-auto">
                    <iconify-icon icon="material-symbols:arrow-outward"></iconify-icon>
                </a>
            </div>
        </div>
        <div class="row mt-5 lavori">
            <?php
            $loop = new WP_Query(array(
                'post_type'         => 'lavori',
                'post_status'       => 'publish',
                'orderby'           => 'date',
                'order'             => 'ASC',
                'posts_per_page'    => 2,
            ));

            while ($loop->have_posts()) : $loop->the_post();

                $link_progetti = get_post_meta($post->ID, '_link_lavori', true); ?>

                <article class="col-12 mb-5">
                    <div class="lavori__card">
                        <div class="lavori__card__image">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                        <div class="lavori__card__content">
                            <div class="lavori__card__content__title">
                                <h3><?php echo get_the_title(); ?></h3>
                            </div>
                            <div class="lavori__card__content__text">
                                <p><?php echo get_the_excerpt(); ?></p>
                            </div>
                            <div class="button">
                                <a href="<?php echo esc_url($link_progetti); ?>" target="_blank" class="button__link">
                                    <button class="button__link__items">Visita il sito</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

            <?php endwhile; ?>
        </div>
        <div class="row my-5">
            <h5 class="col-md-8">Vuoi vedere qualcos'altro di mio?</h5>
            <a href="progetti" class="col-md-4 lavori-link">Vai a i miei progetti <iconify-icon icon="material-symbols:arrow-outward"></iconify-icon></a>
        </div>
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