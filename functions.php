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

    <?php
 // Add this to all your php files for added security

 if (!defined('ABSPATH'))
     exit; 
     // Exit if accessed directly. 
     // Ex: Not being called up directly by index.php or some other theme PHP file
 
 // FOR COLLEGE NETWORK SECURITY
 // FORCE AUTO-UPDATE EVERYTHING (WP CORE, PLUGINS AND THEMES)
 add_filter( 'allow_minor_auto_core_updates', '__return_true' );         // ENABLE MINOR UPDATES
 add_filter( 'allow_major_auto_core_updates', '__return_true' );         // ENABLE MAJOR UPDATES
 add_filter( 'auto_update_plugin', '__return_true' );                    // UPDATE PLUGINS
 add_filter( 'auto_update_theme', '__return_true' );                     // UPDATE THEMES 

 /*
 * Proper way to enqueue scripts and styles.
 */
 function billypoppins_theme_scripts() {
     wp_enqueue_style( 'billypoppins', get_stylesheet_uri() );
 }
 add_action( 'wp_enqueue_scripts', 'billypoppins_theme_scripts' );

 // END STEP 2.9