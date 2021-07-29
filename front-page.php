<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php bloginfo('description'); ?>" />
  <meta name="url" content="<?php bloginfo('wpurl'); ?>" />
  <meta name="keywords" content="website keywords, website keywords" />
  <link rel="icon" href="img/core-img/favicon.ico">
  <title>
      <?php bloginfo('name'); ?>
  </title>
  <?php wp_head(); ?>
</head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
<!-- Preloader -->



<body <?php body_class(); ?> >

  <?php wp_body_open(); ?>
  
  <div class="preloader"></div>
<!-- <div id="preloader">
  <div id="status">&nbsp;</div>
</div>

<img width="100%" src='https://unsplash.it/3000/3000/?random' /> -->


  
<!-- <div id="preloader">
  <div class="preload-content">
    <div id="dento-load"></div>
  </div>
</div> -->

  <header class="header-area">

    <div class="top-header-area">
      <div class="container h-100">
        <div class="row h-100 align-items-center">

          <div class="col-6 col-md-9 col-lg-8">
            <div class="top-header-content">
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="28 Jackson Street, Chicago, 7788569 USA"><i class="fa fa-map-marker"></i> <span>28 Jackson Street, Chicago, 7788569 USA</span></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="info.dento@gmail.com"><i class="fa fa-envelope"></i> <span><span class="__cf_email__" data-cfemail="6f06010900410b0a011b002f08020e0603410c0002">[email&#160;protected]</span></span></a>
            </div>
          </div>

          <div class="col-6 col-md-3 col-lg-4">
            <div class="top-header-social-info text-right">
              <!-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"> -->
          
                <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                  <?php
                  wp_nav_menu(
                  array(
                    'theme_location' => 'secondary',
                    'depth' => 1,
                    'menu' => 'social nav menu',      
                 
                    
                    'container' => 'div', 
                    'container_class' => 'top-header-social-info text-right',
                    'container_id'    => 'dentoNav',
                    'add_li_class'    => '#menu-social-nav-menu li.menu-item-type-custom',
                    // 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    // 'walker'            => new WP_Bootstrap_Navwalker(),
                    // 'before'            => "", // (string) Text before the link markup.
                    // 'after'             => ""
                    
                    )
                  );
                ?>
                <?php endif ?>   
                      
              <!-- <i class="fa fa-facebook"></i></a> -->
              <!-- <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
              <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a> -->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="main-header-area">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">

          <nav class="classy-navbar justify-content-between" id="dentoNav">

            <a class="nav-brand" href="http://localhost/nikhilwp/home/"><img src="..\wp-content\themes\dento\img\core-img\logo.png" alt=""></a>

            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <div class="classy-menu">

              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>

              <div class="classynav">

                <?php if ( has_nav_menu( 'primary' ) ) : ?>
                  <?php
                  wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'menu' => 'classynav classy-navbar-toggler navbarToggler dropdown ',      
                    'menu_class' => 'classynav classy-navbar-toggler dropdown',
                    'menu_id' => 'nav',
                    'container' => 'div', 
                    'container_class' => 'classy-navbar dropdown',
                    'container_id'    => 'dentoNav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                    // 'before'            => "", // (string) Text before the link markup.
                    // 'after'             => ""
                    
                    )
                  );
                ?>
                          <?php endif ?>   
  
              </div>

            </div>

              <a href="#" class="btn dento-btn booking-btn">Booking Now</a>
          </nav>
        </div>
      </div>
    </div>
  </header>




<!-- ____________________ Carousel ______________________________-->
<section class="welcome-area">

  <div class="welcome-slides owl-carousel">

    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(wp-content/themes/dento/img/bg-img/1.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">

            <div class="welcome-text text-center">
              <h2 data-animation="fadeInUp" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
              <p data-animation="fadeInUp" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to offer you.</p>
                <div class="welcome-btn-group">
                  <a href="#" class="btn dento-btn mx-2" data-animation="fadeInUp" data-delay="500ms">Get Started</a>
                  
                  <a href="http://localhost/nikhilwp/about/" class="btn dento-btn mx-2 active" data-animation="fadeInUp" data-delay="700ms">Contact Us</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="welcome-welcome-slide bg-img bg-gradient-overlay jarallax" style="background-image: url(../wp-content/themes/dento/img/bg-img/2.jpg);">
      <div class="container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12">

            <div class="welcome-text text-center">
              <h2 data-animation="fadeInDown" data-delay="100ms">We Believe Everyone Should Have Easy Access To Great Dental Care</h2>
              <p data-animation="fadeInDown" data-delay="300ms">As a leading industry innovator, Dento is opening up exciting new opportunities for dental professionals, investors, employees & suppliers. Contact us to find out what we have to offer you.</p>
              <div class="welcome-btn-group">
                <a href="#" class="btn dento-btn mx-2" data-animation="fadeInDown" data-delay="500ms">Get Started</a>
                <a href="#" class="btn dento-btn mx-2 active" data-animation="fadeInDown" data-delay="700ms">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--____________________ About Us ________________________________-->
<section class="dento-about-us-area section-padding-100-0">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-12 col-md-6">
        <div class="about-us-thumbnail mb-50">
          <img src="wp-content/themes/dento/img/bg-img/15.jpg" alt="">
        </div>
      </div>

      <div class="col-12 col-md-6">
        <div class="about-us-content mb-50">

          <div class="section-heading">
            <h2>About Us</h2>
            <div class="line"></div>
          </div>
          
          <p>Vestibulum condimentum, risus sedones honcus rutrum, salah lacus mollis zurna, nec finibusmi velit advertisis. Proin vitae odin quis magna aliquet laciniae. Etiam auctor, nisi vel. Pellentesque ultrices nisl quam iaculis, nec pulvinaraugue.</p>

          <div class="single-skills-area mt-30">
            <h6>Experience Dentist</h6>
            <div id="bar1" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="80"></span>
            </div>
          </div>

          <div class="single-skills-area mt-30">
            <h6>Modern Equipment</h6>
            <div id="bar2" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="65"></span>
            </div>
          </div>

          <div class="single-skills-area mt-30">
            <h6>Friendly Staff</h6>
            <div id="bar3" class="barfiller">
              <span class="tip"></span>
              <span class="fill" data-percentage="85"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ____________________ Counter ______________________________-->
<div class="container">
  <div class="dento-border clearfix"></div>
</div>

<section class="dento-cta-area">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_genius"></i>
          <h2><span class="counter">20</span></h2>
          <h5>Years Of Experience</h5>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_heart_alt"></i>
          <h2><span class="counter">700</span>+</h2>
          <h5>Happy Patients</h5>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_book_alt"></i>
          <h2><span class="counter">120</span></h2>
          <h5>Certificate</h5>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_id"></i>
          <h2><span class="counter">40</span>+</h2>
          <h5>Dentist</h5>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- _________________ Our Services ________________________________-->
<section class="dento-service-area section-padding-100-0 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('wp-content/themes/dento/img/bg-img/13.jpg');">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-12 col-lg-6">
        <div class="service-content mb-30">

          <div class="section-heading white">
            <h2>Our Services</h2>
            <div class="line"></div>
          </div>
          <div class="row">

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s1.png" alt="">
                <h6>Teeth Whitening</h6>
              </div>
            </div>  

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s2.png" alt="">
                  <h6>Missing Teeth</h6>
              </div>
            </div>

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s3.png" alt="">
                <h6>Teeth Whitening</h6>
              </div>
            </div>

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s4.png" alt="">
                <h6>Cosmetic Dentistry</h6>
              </div>
            </div>

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s5.png" alt="">
                <h6>Examination</h6>
              </div>
            </div>

            <div class="col-6 col-md-4">
              <div class="single-service mb-70">
                <img src="wp-content/themes/dento/img/core-img/s1.png" alt="">
                <h6>Teeth Pain</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6">
        <div class="dento-video-area mb-100">
          <img src="wp-content/themes/dento/img/bg-img/14.jpg" alt="">

          <a href="#" class="video-play-button"><i class="fa fa-play" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- _________________ Pricing __________________________________-->
<section class="dento-pricing-table-area section-padding-100">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <div class="section-heading text-center">
        <h2>Pricing</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="dento-price-table table-responsive">
          <table class="table table-borderless mb-0">
            <thead>
              <tr>
                <th scope="col">Service Names</th>
                <th scope="col">Stage</th>
                <th scope="col">Price</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">Teeth Whitening Service at home</th>
                    <td>1 times</td>
                    <td>$115.00</td>
                </tr> 
                <tr>
                  <th scope="row">Teeth Whitening Service at Dental Clinic</th>
                    <td>1 times</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                  <th scope="row">Ceramic crowns and fillings Dental porcelain</th>
                    <td>1 times</td>
                    <td>$99.00</td>
                </tr>
                <tr>
                  <th scope="row">Remove crowns, bridges Service</th>
                    <td>1 tooth</td>
                    <td>$50.00</td>
                </tr>
                <tr>
                  <th scope="row">Covering the recession of the gums</th>
                    <td>1 times</td>
                    <td>$400.00</td>
                </tr>
                <tr>
                  <th scope="row">Consultation, impressions and preparation of models</th>
                    <td>1 times</td>
                    <td>$35.00</td>
                </tr>
                <tr>
                  <th scope="row">Removal of an old inlay, old crown</th>
                    <td>1 times</td>
                    <td>$99.00</td>
                </tr>
                <tr>
                  <th scope="row">Overlay teeth whitening ( 2 arches)</th>
                    <td>1 times</td>
                    <td>$170.00</td>
                </tr>
                <tr>  
                  <th scope="row">Standard porcelain and zirconium crown on implant</th>
                    <td>1 tooth</td>
                    <td>$499.00</td>
                </tr>
                <tr>
                  <th scope="row">Implantation of an implant (price depends on system used)</th>
                    <td>1 tooth</td>
                    <td>$600.00</td>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-12">
        <div class="more-btn text-center mt-50">
          <a href="#" class="btn dento-btn">Read More <i class="fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!--__________________ Book An Apointment ________________________-->
<section class="book-an-oppointment-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('wp-content/themes/dento/img/bg-img/12.jpg');">
  <div class="container">
    <div class="row">

      <div class="col-12">
        <div class="section-heading text-center white">
          <h2>Book An Apointment</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">

        <div class="appointment-form">
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" name="your-name" class="form-control" placeholder="Your Name" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" name="your-phone" class="form-control" placeholder="Your Phone" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="email" name="your-email" class="form-control" placeholder="Your Email" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <input type="text" name="your-address" class="form-control" placeholder="Your Address">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <select name="your-scheldule" class="form-control">
                    <option value="Choose Your Scheldule">Choose Your Scheldule</option>
                    <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                    <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                    <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                    <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group mb-30">
                  <select name="your-time" class="form-control">
                    <option value="Choose Your Time">Choose Your Scheldule</option>
                    <option value="9 AM to 10 AM">9 AM to 10 AM</option>
                    <option value="11 AM to 12 PM">11 AM to 12 PM</option>
                    <option value="2 PM to 4 PM">2 PM to 4 PM</option>
                    <option value="8 PM to 10 PM">8 PM to 10 PM</option>
                  </select>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group mb-30">
                  <textarea name="your-message" class="form-control" placeholder="Your Message"></textarea>
                </div>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn dento-btn">Booking Now</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!--__________________ Our Dentist ________________________-->
<section class="dentist-area section-padding-100-0">
  <div class="container">

    <div class="row">

      <div class="col-12">
        <div class="section-heading text-center">
          <h2>Our Dentist</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>
    
    <div class="row">


    <?php
    $loop = new WP_Query( array( 'post_type' => 'doctor', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'posts_per_page' => 3  ) );
    
    
    if ( $loop->have_posts() ) :
       while ( $loop->have_posts()  ) : $loop->the_post(); ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
      
        <?php if ( has_post_thumbnail() ) { ?>
        <div class="single-dentist-area mb-100">
          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        

          <div class="dentist-content">
              <?php $custom_post_type01= get_post_meta(get_the_ID(), 'custom_input_04', true);?>
              <?php $custom_post_type02= get_post_meta(get_the_ID(), 'custom_input_05', true);?>
              <?php $custom_post_type03= get_post_meta(get_the_ID(), 'custom_input_06', true);?>

            <div class="dentist-social-info">
                
              <?php if($custom_post_type01 != null ){
                  echo "<a href='$custom_post_type01' target='_blank'><i class='fa fa-facebook'></i></a>";
                    } 
                ?> 
                  
              <?php if($custom_post_type02 != null ){
                  echo "<a href='$custom_post_type02' target='_blank'><i class='fa fa-twitter'></i></a>";
                    } 
              ?>         
              
              <?php if($custom_post_type03 != null ){
                  echo "<a  href='$custom_post_type03' target='_blank'><i class='fa fa-google-plus'></i></a>";
                    } 
                ?>
                
            </div>
              
              <?php } ?>
              
            <div class="dentist-info bg-gradient-overlay">
                <h5><?php the_title(); ?></h5>
                <?php $custom_post_type= get_post_meta(get_the_ID(), 'custom_input_03', true);
                                        ?>
                <p><?php print_r( $custom_post_type); ?></p>
            </div>

          </div>
        </div>
      </div>

        <?php endwhile;
        endif; 
        wp_reset_postdata();
        wp_reset_query();
        ?>



    </div>
  </div>
</section>

<!--__________________ Testimonials ________________________-->
<section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('../wp-content/themes/dento/img/bg-img/7.jpg');">
  <div class="container">
    <div class="row">

      <?php
        $loop = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Patient', 'ignore_sticky_posts' => 1, 'paged' => $paged, 'posts_per_page' => 3  ) );
          if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-12">

        <div class="testimonials-slides owl-carousel">

          <?php if ( has_post_thumbnail() ) { ?>
          <div class="single-testimonial-slide d-flex align-items-center">

            <div class="testimonial-thumb">

              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        
            </div>
              <?php } ?>

            <div class="testimonial-content">
              <h5><?php the_content(); ?> </h5>
              <h6><?php the_title(); ?></h6>
              <?php $custom_post_type= get_post_meta(get_the_ID(), 'custom_input_02', true);
                            ?>
              <p><?php print_r( $custom_post_type); ?></p>
            </div>
    
          </div>

          <?php endwhile;
          endif; 
          wp_reset_postdata();
          ?>

        </div>
      </div>
    </div>
  </div>
</section>

<!--__________________ latest News ________________________-->
<section class="dento-blog-area section-padding-100-0 clearfix">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-heading text-center">
          <h2>The Latest News</h2>
          <div class="line"></div>
        </div>
      </div>
    </div>
    
    <div class="row">
        <?php
            $loop = new WP_Query( array( 'post_type' => 'new', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
            if ( $loop->have_posts() ) :
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

      <div class="col-12 col-sm-6 col-md-4 col-lg-4">
        <?php if ( has_post_thumbnail() ) { ?>
          <div class="single-blog-item mb-100">          
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        <?php } ?>

            <div class="blog-content">
                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                <p><?php the_content(); ?> </p>
              <div class="post-meta">
                <a href="#"><i class="icon_clock_alt"></i>&nbsp&nbsp<?php the_date(); ?></a>
                <a href="#"><i class="icon_chat_alt"></i>&nbsp&nbsp<?php echo get_comments_number(); ?></a>
              </div>
            </div>
          </div>

            
      </div>
      <?php endwhile;
            endif; 
            wp_reset_postdata();
            ?>  
            
    </div>
  </div>
</section>



<?php get_footer(); ?>
