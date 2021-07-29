  <?php get_header(); ?>

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/12.jpg);">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12">
        <h2 class="title">About Us</h2>
      </div>
    </div>
  </div>
</div>
<div class="breadcumb--con">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
          <?php echo get_hansel_and_gretel_breadcrumbs(); ?>
            <!-- <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About Us</li> -->
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>

<!--_______________________________ About Us ________________________________-->
<section class="dento-about-us-area section-padding-100-0">
  <div class="container">
    <div class="row align-items-center">

      <div class="col-12 col-md-6">
        <div class="about-us-thumbnail mb-50">
          <img src="../wp-content/themes/dento/img/bg-img/15.jpg" alt="">
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

<!-- ______________________________ Counter ______________________________-->
<div class="container">
  <div class="dento-border clearfix"></div>
</div>

<section class="dento-cta-area">
  <div class="container">
    <div class="row">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_genius"></i>

           <?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-5' ); ?>
                      <?php endif; 
                      ?>
<!-- 
          <h2><span class="counter">20</span></h2>
          <h5>Years Of Experience</h5> -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_heart_alt"></i>
          <?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-6' ); ?>
                      <?php endif; 
                      ?>
          <!-- <h2><span class="counter">700</span>+</h2>
          <h5>Happy Patients</h5> -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_book_alt"></i>
          <?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-7' ); ?>
                      <?php endif; 
                      ?>
          <!-- <h2><span class="counter">120</span></h2>
          <h5>Certificate</h5> -->
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="single-cta text-center mt-50 mb-100">
          <i class="icon_id"></i>
          <?php if ( is_active_sidebar( 'sidebar-8' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-8' ); ?>
                      <?php endif; 
                      ?>
          <!-- <h2><span class="counter">40</span>+</h2>
          <h5>Dentist</h5> -->
        </div>
      </div>
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
        while ( $loop->have_posts() ) : $loop->the_post(); ?>

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
        ?>



    </div>
  </div>
</section>


<?php get_footer(); ?>