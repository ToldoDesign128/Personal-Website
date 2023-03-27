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
                <img src="<?php echo get_template_directory_uri() . '/assets/img/IMG_7232.webp' ;?>" alt="Foto federico Toldo">
            </div>
        </div>
    </div>
</section>

<!-- Foto small device -->
<section class="cover">
    <img src="<?php echo get_template_directory_uri() . '/assets/img/IMG_7232.webp' ;?>" alt="Foto federico Toldo">
</section>

<!-- Servizi -->
<section class="servizi my-5">
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
</section>

<!-- I miei lavori -->
<section class="servizi mt-5">
    <div class="container">
        <div class="row">
            <div class="servizi__title col-lg-8 co-md-10 col-12 row">
                <h2 class="col-auto">Alcuni lavori</h2>
                <a href="progetti" class="col-auto">
                    <iconify-icon icon="material-symbols:arrow-outward"></iconify-icon>
                </a>
            </div>
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