<?php

/**
 * Template for displaying a page.
 */

?>

<?php get_header('frontpage'); ?>

    <div class="row">
        <div class="col-xl-2 col-lg-0 spacing-sides">
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-xl-2 col-lg-1 col-md-0 spacing-sides"></div>
                <div class="col-xl-8 col-lg-10 col-md-12 pt-2">
                    <div class="main p-3 pb-4 d-flex justify-content-center content-main">
                        <?php

                        /**
                         * The post loop, call get the template for displaying page if there is a page to display.
                         */


                        if ( have_posts() ) {
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content/content', 'page' );
                            endwhile;
                        }
                        ?>

                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center content-main">
                            <h2>Esittelyssä:</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 d-flex justify-content-center pb-4">
                            <img src="<?php echo get_template_directory_uri();?>/img/decoration.jpg" alt="decoration" class="img-decoration">
                        </div>
                    </div>
                    <div class="main p-3 d-flex justify-content-center content-main">
                        <?php
                        echo do_shortcode('[featured_products per_page=\"3\" columns=\"3\"]')
                        ?>

                    </div>

                    <div class="main p-1 d-flex justify-content-center content-main">
                        <h3><a href="<?php echo get_site_url(); ?>/kauppa/">Täysi tuotelista</a></h3>

                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center">
                            <img src="<?php echo get_template_directory_uri();?>/img/decoration.jpg" alt="decoration" class="img-decoration">
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12 main p-1 pt-5 d-flex justify-content-center content-main">
                        <h3>Päätuotekategoriat</h3>
                    </div>
                    </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <img src="<?php echo get_template_directory_uri();?>/img/decoration.jpg" alt="decoration" class="img-decoration">
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-12 spacing-frontpage-bottom">
                        </div>
                    </div>
                    </div>
                <div class="col-xl-2 col-lg-1 col-md-0 spacing-sides"></div>
                </div>
        </div>
            <div class="col-xl-2 col-lg-0 spacing-sides">
            </div>
        </div>


        <div class="row">

            <div class="col-xl-1 col-lg-0">
            </div>

            <div class="col-xl-10 col-lg-0 pt-4">

        <div class="row">
            <div class="col-lg-6 col-md-12 pb-md-4 tofadein-first content-main">
                <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/cpu.jpg" class="img-main-pages" alt="cpu">
                </div>
                    <div class="col-md-6">
                        <h4><a href="<?php echo get_site_url(); ?>/tuote-osasto/prosessorit/">Prosessorit</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pb-md-4 tofadein-second content-main">
                <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/gpu.png" class="img-main-pages" alt="gpu">
                </div>
                <div class="col-md-6">
                    <h4><a href="<?php echo get_site_url(); ?>/tuote-osasto/grafiikkakortit/">Grafiikkakortit</a></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                </div>
                </div>
            </div>
        </div>
                <div class="col-xl-1 col-lg-0">
                </div>
            </div>
        </div>


<div class="row">
    <div class="col-12 spacing-frontpage">
    </div>
</div>

<div class="row">

    <div class="col-xl-1 col-lg-0">
    </div>

    <div class="col-xl-10 col-lg-0">


        <div class="row">
            <div class="col-lg-6 col-md-12 pb-md-4 tofadein-first content-main">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/motherboard.jpg" class="img-main-pages" alt="cpu">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="<?php echo get_site_url(); ?>/tuote-osasto/emolevyt/">Emolevyt</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pb-md-4 tofadein-second content-main">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/case.jpg" class="img-main-pages" alt="gpu">
                    </div>
                    <div class="col-md-6">
                        <h4><a href="<?php echo get_site_url(); ?>/tuote-osasto/kotelot/">Kotelot</a></h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-1 col-lg-0">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 spacing-frontpage">
    </div>
</div>



<?php get_footer(); ?>

