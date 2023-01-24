<?php get_header() ?>

<!-- Hero -->
<section class="hero">
    <div class="container hero__box">
        <div class="row">
            <div class="hero__box__text col-lg-6 col-md-10 col-12 row">
                <h2 class="col-12 my-5 p-0">Contatti</h2>
                <h4 class="col-12">Lavoro con organizzazioni di ogni tipo, dalle start-up alle fondazioni, nei settori Privato, Pubblico e Sociale.</h4>
            </div>
        </div>
        <div class="row my-5 hero__contatti px-3">
            <p class="col-12 text-right">Compila il form di seguito oppure scrivimi a</p>
            <a href="mailto:fede.toldo96@gmail.com" class="col-12 text-right">fede.toldo96@gmail.com</a>
        </div>
    </div>
</section>

<!-- Form -->
<section class="form my-5">
    <div class="container">
        <div class="row my-5 form__title px-3">
            <h5 class="col-lg-6 col-md-8 col-12">Non importa quanto grande sia la tua azienda, o strana la tua domanda, vale sempre la pena entrare in contatto, ti risponderò il prima possibile.</h5>
        </div>
        <div class="row my-5 justify-content-end">
            <div class="col-lg-6 col-md-8 col-12 form__box px-3">
                <?php echo apply_shortcodes('[contact-form-7 id="28" title="Form di contatto"]');?>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>