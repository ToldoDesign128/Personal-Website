<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="format-detection" content="telephone=no"/>
    <meta name="theme-color" content="#417BC7">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="header__logo col-md-3 col-8 mx-md-0 mx-2">
                    <a href="home" class="header__logo__link">
                        Federico Toldo
                    </a>
                </div>
                <div class="header__hamburger col-3 d-md-none d-flex justify-content-end">
                    <button class="hamburger hamburger--collapse" type="button" aria-label="Menu" aria-controls="navigation">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <nav class="header__nav col-lg-6 col-md-8 col-12 d-md-block d-none" role="navigation">
                    <?php wp_nav_menu(array(
                        'theme_location'    =>  'header',
                        'container'         =>  false,
                        'menu_class'        => 'main-menu',
                        'orderby'           => 'menu_order'
                    )); ?>
                </nav>
            </div>
        </div>
    </header>

    <div class="cursor d-none d-md-block"></div>
    <div class="outline d-none d-md-block"></div>