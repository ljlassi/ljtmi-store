/* Query(document).ready(function() {
    jQuery( ".tofadein-first" ).animate({
        opacity: 1.0,
    }, 2000 );
}); */

jQuery(document).ready(function() {

    /* Every time the window is scrolled ... */
    jQuery(window).scroll( function(){

        /* Check the location of each desired element */
        jQuery('.tofadein-second').each( function(i){

            var bottom_of_object = jQuery(this).offset().top;
            var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();

            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){

                jQuery(this).animate({'opacity':'1'},3000);
                jQuery('.tofadein-first').animate({'opacity':'1'},1500);

            }

        });

    });

});

/* Every time the window is scrolled ... */
jQuery(document).ready(function() {

    /* Check the location of each desired element */
    jQuery('.tofadein-second').each( function(i){

        var bottom_of_object = jQuery(this).offset().top;
        var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            jQuery(this).animate({'opacity':'1'},3000);
            jQuery('.tofadein-first').animate({'opacity':'1'},1500);

        }

    });

});