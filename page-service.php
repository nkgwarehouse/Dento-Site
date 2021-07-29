<?php get_header(); ?>

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/12.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <h2 class="title">Service</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Service</li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="dento-services-area mt-50 mb-50">
    <div class="container">
        <div class="row">
            <?php
              $loop = new WP_Query( array( 'post_type' => 'service', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
              if ( $loop->have_posts() ) :
              while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
         
                
                <div class="single-service--area text-center mb-50">
                    <?php if ( has_post_thumbnail() ) { ?>
                    <div class="icon--">
                    <a href="<?php the_permalink(); the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                        <!-- <img src="../wp-content/themes/dento/img/core-img/s6.png" alt=""> -->
                    </div>
                    <?php } ?>
                  
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_content(); ?></p>
                </div>

                 

            </div>
             <?php endwhile;
                      endif; 
                      wp_reset_postdata();
                      ?> 
        </div>
    </div>
</section>


<!--__________________ Testimonials ________________________-->
<section class="testimonials-area section-padding-100 bg-img bg-gradient-overlay jarallax clearfix" style="background-image: url('../wp-content/themes/dento/img/bg-img/7.jpg');">
  <div class="container">
    <div class="row">

      <?php
        $loop = new WP_Query( array( 'post_type' => 'testimonial', 'category_name' => 'Patient', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
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

<?php get_footer();?>