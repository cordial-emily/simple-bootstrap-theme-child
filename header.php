<?php
/* Header template */

 ?>
 <html lang="en">
 <head>
     <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Favicons -->
 <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/favicon.ico" type="image/x-icon">

     <!-- Meta tags -->
 <meta property="og:title" content="<?php bloginfo('name') ?>">
 <meta property="og:description" content="<?php bloginfo('description') ?>">
 <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-banner-graphic.1.png">
 <meta property="og:url" content="<?php bloginfo('wpurl') ?>">
 <meta name="twitter:card" content="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-banner-graphic.1.png">

     <!--[if gte IE 9]>
   <style type="text/css">
     .gradient {
        filter: none;
     }
   </style>
 <![endif]-->
 <script type="text/javascript">

 </script>
 <?php wp_head(); ?>
 </head>
 <body>
 <!-- Site header and navigation -->
     <header class="top" role="header">
         <div class="container">
            <div class="row">
                <div class="col-xs-10">
                 <?php get_template_part( 'logo'); ?>
                </div>
                <div class="col-xs-1 quote">
                <!-- Button trigger modal -->
                <button type="button" class="btn parallel-light" data-toggle="modal" data-target="#myModal">GET A QUOTE</button>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">GET A QUOTE</h4>
                      </div>
                      <div class="modal-body">
                        <?php echo do_shortcode('[si-contact-form form="1"]'); ?>

                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end modal -->
                </div>
               <div class="parallel-nav col-xs-1">
                 <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                     <span class="glyphicon glyphicon-align-justify"></span>
                 </button>
                 <div class="navbar-collapse collapse" role="navigation">

                     <?php wp_nav_menu( array(
                      'theme_location' 	  => 'primary',
                      'container' 		    => 'ul',
                      'menu_class'      	=> 'navbar-nav nav pull-right'
                      )); ?>

                 </div>
               </div>

           </div> <!-- end row -->

         </div>
     </header>
