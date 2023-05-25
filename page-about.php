<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero__box">
        <div class="row h-100">
            <div class="hero__box__text col-lg-8 col-md-10 col-12 pr-4 mb-5 row">
                <h3 class="col-12 my-4 p-0">Benvenuti nel mio mondo digitale!</h3>
                <h5 class="col-10 p-0"> Sono un designer e front-end developer appassionato di creare esperienze uniche e coinvolgenti per il web.</h5> 
                <p class="col-lg-8 col-md-10 my-4 p-0">Qui troverete una selezione dei miei progetti più recenti e le mie competenze, ma soprattutto la mia passione per il design e la tecnologia. Siete pronti a scoprire il futuro del web?</p>
                <h5 class="col-10 p-0">Allora, siete nel posto giusto!👌</h5>
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