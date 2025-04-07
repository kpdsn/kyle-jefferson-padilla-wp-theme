<?php  // START STEP 2.3
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?><!--  START WORDPRESS GET_HEADER CONTENT IN INDEX.PHP -->
    <?php get_header(); ?>
    <?php // this function loads the header.php file ?>


    <!--  END WORDPRESS GET_HEADER CONTENT IN INDEX.PHP -->
    <!-- STEP 2.3 ENDS HERE -->

    <?php // START BUILDING SIDEBAR
        // Add this to all your php files for added security

        if (!defined('ABSPATH'))
            exit;

        if ( is_active_sidebar('widget_1')  ) : ?>
                <aside class="sidebar widget-area" role="complementary">
                <?php dynamic_sidebar( 'widget_1' ); ?>
        </aside>
        <?php endif; 
    // END BUILDING SIDEBAR ?>