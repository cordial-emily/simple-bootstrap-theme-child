<?php
/* Template Name: Front */
     get_header();
 ?>
 <!-- Site banner -->
    <div class="banner">
        <div class="container subcontainer">

          <div class="col-xs-12 col-sm-6 col-lg-8 bannertext">
            <h1>GIVE YOUR<br> BUSINESS A BOOST</h1>
            <h5>Get a custom, responsive website and grow your business.</h5>
            <!--<h5>. . . A web design company where we work in parallel to give you the best choices.</h5>-->

            <button class="btn btn-default btn-lg" type="button" data-toggle="modal" data-target="#myPlan">
            Find the right plan for you.
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myPlan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Learn about our plans:</h4>
                  </div>
                  <div class="modal-body">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>
                            <h3>Budget Site</h3>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><th>Premade theme</th></tr>
                        <tr><th>4 pages</th></tr>
                      </tbody>
                    </table>
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>
                            <h3>Custom Theme</h3>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><th>Design Site</th></tr>
                        <tr><th>User Stories</th></tr>
                        <tr><th>Email</th></tr>
                      </tbody>
                    </table>

                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>
                            <h3>Branding Package +</h3>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><th>Design Site</th></tr>
                        <tr><th>Email</th></tr>
                        <tr><th>Logo</th></tr>
                        <tr><th>Company style guide</th></tr>
                        <tr><th>User Stories</th></tr>
                        <tr><th>Usability Tests and Surveys</th></tr>
                        <tr><th>Social Media</th></tr>
                        <tr><th>SEO services</th></tr>
                      </tbody>
                    </table>
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>
                            <h3>Retainer Services</h3>
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr><th>Hosting</th></tr>
                        <tr><th>Email</th></tr>
                        <tr><th>Social Media</th></tr>
                        <tr><th>SEO services</th></tr>
                        <tr><th>Site Updates</th></tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
            <!-- end modal -->
          </div><!--end floating_title-->
          <div class="col-xs-12 col-sm-10 col-lg-10 col-md-offset-3 col-sm-offset-4 graphic">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-banner-graphic.1.png" alt="ParallelDesign" height="auto" width="100%" >

          </div>
        </div>
    </div>

<!-- Middle content section -->
  <div class="main jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 style="color: #009b9b;">Does your website reflow responsively?</h2>
          <h5>Is it optimized for different devices?</h5>
          <h2>WE CAN HELP.</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="main jumbotron info-icons" style="background-color: #f4f5f9;">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-location fp-icons"></span>
            <h5>Goals</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>With mindful of communication,<br>
              <hr>
            and empathy for users,<br>
              <hr>
            our goal is to make websites <br>
            that meet the business needs <br>
            of our clients <strong>profoundly</strong>.</li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-portfolio fp-icons"></span>
            <h5>Services</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>Parallel Design offers<br>
               services from:<br>
               <hr>
               budget blogs with <br>
               features chosen <i>A La Carte</i><br>
               <hr>
               to corporate branding packages,<br>
               <hr>
               and retainer services.<br>
               <hr>
               To recieve a quote,<br>
               send a message about your project to: <br>
               <strong>Contact@<br>ParallelDesign.net</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-admin-appearance fp-icons"></span>
            <h5>Design</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>We work with <br>
               clients to <br>
               design visuals <br>
               that communicate: <br>
               <hr>
               identity, <br>
               <hr>
               products, <br>
               <hr>
               & services.

            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-editor-contract fp-icons"></span>
            <h5>Testing</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>We can help you <br>
               reach your <br>
               customers more <br>
               effectively with: <br>
               <hr>
               usability tests,<br>
               <hr>
               & surveys.<br>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-update fp-icons"></span>
            <h5>Iterations</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>We build our <br>
               themes in-house,
               <hr>
               and know each<br>
               project is a<br>
               collaboration.
               <hr>
               You always have <br>
               the option of <br>
               another iteration. <br>
               <hr>
               <a href="<?php echo get_stylesheet_directory_uri(); ?>/websites-that-satisfy/">Learn more <br>
               about our build<br>
               process.</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2 col-sm-3 col-xs-6 text-center dropup">
          <div class="icons-fp dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="dashicons dashicons-megaphone fp-icons"></span>
            <h5>Launch</h5>
          </div>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li>We can provide in-depth <br>
               SEO (Search Engine <br>
               Optimization)<br>
               services.
               <hr>
               We can optimize <br>
               your site,
               <hr>
               improve visibility, <br>
               <hr>
               and use social media <br>
               to promote your <br>
               business.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h3 style="color: #009b9b;">Two designs.</h2>
            <img longdesc="https://paralleldesign.net/2017/08/08/called-parallel-design/" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/bulbs.png" alt="ParallelDesign-ideas" height="auto" width="30%" >
          <h5>Choose the best ideas in each design.</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="main jumbotron" style="background-color: #f4f5f9; margin-bottom: 0px; padding-bottom: 0px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 text-center overlay">
          <h3 class="text-vert-cent">Then we<br> build your site<br> from the ground up.</h3>
        </div>
        <div class="col-sm-6 text-center">
          <img class="img-fluid" longdesc="https://paralleldesign.net/2017/08/08/called-parallel-design/" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/people-building-site.1.png" alt="ParallelDesign" height="auto" width="100%" >
        </div>
      </div>
    </div>
  </div>
  <div class="main jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/images/icons/parallel-iterative-process.2.png" alt="ParallelDesign-ideas" height="auto" width="100%" >
          <h5>Choose when your website is ready to be launched.</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="main jumbotron tutorials" style="background-color: #f4f5f9;">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-offset-3 col-sm-offset-1 text-center">
          <div class="bubble">
          <p>Emily at Parallel Design did an exceptional job!<br>
            Her attention to detail, ability to listen and understand all our desires, organization of the site, produce a successful and concise tutorial, and grasp of all the technical details are qualities I constantly look for when hiring.<br>-Jennifer Mezick <br><strong>Historic Knoxville<br> Properties</strong></p>
          </div>
        </div>
      </div>
      <h3 class="text-center">Testimonial</h3>
    </div>
  </div>
  <div class="main jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 bannertext">
          <h1>BUSINESS IS <br>ABOUT TO <br>
            GET BUSY</h1>
          <h5>Call us today and get a quote.</h5>
          <button class="btn btn-default btn-lg" type="button">
          Contact Us!
          </button>
        </div>
        <div class="col-sm-6">
          <div class="jumbotron" style="background-color: #f4f5f9;">
            <?php echo do_shortcode('[si-contact-form form="2"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="background-color: #f4f5f9;">

<?php get_footer(); ?>
