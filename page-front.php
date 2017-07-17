<?php
/* Template Name: Front */
     get_header();
 ?>
 <!-- Site banner -->
    <div class="banner">
        <div class="container subcontainer">

          <div class="floating_title">
            <h1>GIVE YOUR<br> BUSINESS A BOOST</h1>
            <h5>Get a new website and grow your business.</h5>
            <!--<h5>. . . A web design company where we work in parallel to give you the best choices.</h5>-->

            <button class="btn btn-default btn-lg" type="button">
            Find the right plan for you.
            </button>
          </div><!--end floating_title-->
          <div class="floating_title">
            <img src="/uploads/2017/07/port-graphic.1.png" alt="ParallelDesign" height="100" width="100" >
            <p><?php echo get_template_directory(); ?></p>
          </div>
        </div>
    </div>

<!-- Middle content section -->
  <div class="gradient_container">
    <div class="middle">
        <div class="container">
            <div class="col-md-4 content focuslist">
              <div class="box_info row">
                    <span class="dashicons dashicons-networking fp-icons"></span>
                    <h2 class="middletitle">What is your vision?</h2>
                    <p>We'll help you build it.
                    </p>



              </div><!--box_info-->
            </div><!--col-md-4 content"-->
            <div class="col-md-4 content focuslist">
              <div class="box_info">
                <span class="dashicons dashicons-location-alt fp-icons"></span>
                <h2 class="middletitle">Consider your strategy.</h2>
                <p>Next steps: blog, app, or email accounts.</p>

                    <!--https://developer.wordpress.org/resource/dashicons/#clock-->

                </div><!--box_info-->
            </div><!--col-md-4 content"-->


            <div class="col-md-4 content focuslist">
              <div class="box_info">
                <span class="dashicons dashicons-groups fp-icons"></span>
                <h2 class="middletitle">Plan for the future.</h2>
                <p>Get your social media and SEO results.</p>

              </div><!--box_info-->
            </div><!--col-md-4 content-->
          </div><!--container-->
        </div><!--"middle"-->
<?php get_footer(); ?>
