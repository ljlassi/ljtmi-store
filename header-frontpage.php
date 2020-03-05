<?php

/**
 * The header file, contains the <head> of every page and the top navi.
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top navi sticky-header py-0">
    <div class="container-fluid">
        <a class="navbar-brand brandlink" href="<?php echo site_url(); ?>"><?php echo bloginfo('name'); ?></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon my-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php

            /**
             * Use the WP_Bootstrap_Navwalker to generate a working boostrap 4 navigation.
             */

            wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav pl-3 pr-3 navi-ul',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) ); ?>

</nav>
<div class="container-fluid">
    <div class="row">

        <div class="col-12 p-0">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="7500" data-pause="false">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/banner.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block slider-bg">
                            <h5 class="slider-h5">Laaturautaa kohtuuhintaan</h5>
                            <p class="slider-p">Prosesorit, grafiikkakortit, emolevyt, kotelot ynnä muut</p>
                            <p class="slider-p"><a class="slider-link" href="https://www.solarweb.com/PvSystems/PvSystem?pvSystemId=26f4863a-8fd2-4aa6-87df-6f67aecf50c3">Suosittelemamme tuotteet</a></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/img/gaming.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block slider-bg">
                            <h5 class="slider-h5">Rakenna oma pelikoneesi!</h5>
                            <p class="slider-p">Osa tuotteista -25%!</p>
                            <p class="slider-p"><a class="slider-link" href="<?php echo get_site_url() . '/poliittinen-toiminta/perusosasto/liity-jtyn-jaseneksi/' ?>">Katso alennustuotteet!</a></p>
                        </div>
                    </div>
                </div>
    </div>
        </div>
    </div>

<div class="row">
    <div class="col-12 spacing-before-main"></div>
</div>

    <script src="<?php echo get_template_directory_uri(); ?>/js/fadeouts.js"></script>