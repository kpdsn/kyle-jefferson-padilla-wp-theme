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
    // START STEP 2.5 BUILD FOOTER
    // Add this to all your php files for added security

        if (!defined('ABSPATH'))
          exit; 
             // Exit if accessed directly. 
             // Ex: Not being called up directly by index.php or some other theme PHP file
         ?>

      <footer>
     <!-- START STEP 2.21 ADD FOOTER MENUS -->
 <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'footer-menu', 
         'container_class' => 'footer-nav' 
         ) ); ?>
 </nav>

 <nav>
     <?php wp_nav_menu( array( 
         'theme_location' => 'social-menu', 
         'container_class' => 'footer-social' 
         ) ); ?>
 </nav>


 <p class="copyright">&copy; <?php echo bloginfo('name') ?>, <?php echo date("Y"); ?></p>
 <!-- END STEP 2.21 ADD FOOTER MENUS -->
      </footer>
    
    <!-- START STEP 2.7 WP_FOOTER CONTENT -->


    <?php wp_footer(); ?>
        <?php // this functions loads the footer content ?>   


    <!-- END STEP 2.7 WP_FOOTER CONTENT -->
     
    </body>
    </html><?php // END STEP 2.5 BUILD FOOTER ?>