<?php
/* Header template */

 ?>
 <html lang="en">
 <head>
     <meta charset="utf-8">
 <!-- Set the viewport so this responsive site displays correctly on mobile devices -->
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Favicons -->
 <link rel="shortcut icon" href="<?php bloginfo('template_url') ?>images/icons/favicon.ico" type="image/x-icon">
 <link rel="icon" href="images/icons/favicon.ico" type="image/x-icon">
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


                 <?php get_template_part( 'logo'); ?>



               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                   <span class="glyphicon glyphicon-align-justify"></span>
               </button>
               <div class="navbar-collapse collapse" role="navigation">

                   <?php wp_nav_menu( array(
                    'theme_location' 	  => 'primary',
                    'container' 		    => 'ul',
                    'menu_class'      	=> 'navbar-nav nav'
                    )); ?>

               </div>
               <button type="button" class="btn parallel-light">GET A QUOTE</button>

         </div>
     </header>
