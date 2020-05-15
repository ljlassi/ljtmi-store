<?php

/**
 * Template for displaying a single post.
 */

?>


<?php get_header(); ?>

<?php
if ( has_post_thumbnail() ) {
    echo '<div class="row">
            <div class="col-12 spacing-featured-image">
            </div>
            </div>';
}
else {
    echo '<div class="row">
            <div class="col-12 spacing-main">
            </div>
            </div>';
}
?>

    <div class="row">
        <div class="col-xl-2 col-lg-0">
        </div>
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="main p-3 content-main">
                        <?php

                        /**
                         * The post loop, call get the template for displaying page if there is a page to display.
                         */


                        if ( have_posts() ) {
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content/content', 'post' );
                            endwhile;
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-1 col-md-0"></div>
                <div class="col-lg-4 col-md-12">
                    <div class="p-3 sidebar-right content-main">
                        <?php if ( is_active_sidebar( 'right-side-bar' ) ) : ?>
                            <?php dynamic_sidebar( 'right-side-bar' ); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-2 col-md-0">
        </div>

    </div>
<?php get_footer(); ?>