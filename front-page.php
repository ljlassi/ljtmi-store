<?php

/**
 * Template for displaying a page.
 */

?>

<?php get_header('frontpage'); ?>

    <div class="row">
        <div class="col-md-2 col-sm-0 spacing-sides">
        </div>
        <div class="col-md-8 col-sm-12">
            <div class="row">
                <div class="col-md-2 col-sm-0 "></div>
                <div class="col-md-8 col-sm-12">
                    <div class="main p-3 d-flex justify-content-center">
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
                    <div class="main p-3 d-flex justify-content-center">
                        <?php
                        echo do_shortcode('[featured_products per_page=\"3\" columns=\"3\"]')
                        ?>

                    </div>
                </div>
                <div class="col-md-2 col-sm-0 "></div>
                </div>
            <div class="col-md-2 col-sm-0 spacing-sides">
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-12 spacing-frontpage">
            </div>
        </div>

        <div class="row">

            <div class="col-md-1 col-sm-0">
            </div>

            <div class="col-md-10 col-sm-0">


        <div class="row">
            <div class="col-md-6 col-sm-12 tofadein-first">
                <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/cpu.jpg" class="img-main-pages" alt="cpu">
                </div>
                    <div class="col-md-6">
                        <h3>Prosessorit</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 tofadein-second">
                <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_template_directory_uri();?>/img/gpu.png" class="img-main-pages" alt="gpu">
                </div>
                <div class="col-md-6">
                    <h3>Grafiikkakortit</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                </div>
                </div>
            </div>
        </div>
                <div class="col-md-1 col-sm-0">
                </div>
            </div>
        </div>


<div class="row">
    <div class="col-12 spacing-frontpage">
    </div>
</div>

<div class="row">

    <div class="col-md-1 col-sm-0">
    </div>

    <div class="col-md-10 col-sm-0">


        <div class="row">
            <div class="col-md-6 col-sm-12 tofadein-first">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/motherboard.jpg" class="img-main-pages" alt="cpu">
                    </div>
                    <div class="col-md-6">
                        <h3>Emolevyt</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 tofadein-second">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo get_template_directory_uri();?>/img/case.jpg" class="img-main-pages" alt="gpu">
                    </div>
                    <div class="col-md-6">
                        <h3>Kotelot</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sodales neque sodales ut etiam. Molestie nunc non blandit massa enim. Tellus molestie nunc non blandit massa enim nec. Sollicitudin ac orci phasellus egestas. Iaculis urna id volutpat lacus laoreet non</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-0">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12 spacing-frontpage">
    </div>
</div>



<?php get_footer(); ?>

