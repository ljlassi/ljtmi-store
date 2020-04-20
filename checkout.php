<?php
/*
 * Template Name: Kassasivu
 */
?>

<?php get_header(); ?>

    <div class="row">
        <div class="col-md-1 col-sm-0 spacing-sides">
        </div>
        <div class="col-md-10 col-sm-12">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 spacing-frontpage">
                        </div>
                    </div>

                    <div class="main p-3 d-flex justify-content-center content-main">
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
                </div>
            </div>
            <div class="row">
                <div class="col-12 spacing-frontpage">
                </div>
            </div>
        </div>
        <div class="col-md-1 col-sm-0 spacing-sides">
        </div>
    </div>


<?php get_footer(); ?>
