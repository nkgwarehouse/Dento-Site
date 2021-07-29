<?php
get_header();
?>
<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/12.jpg);">
   <div class="container h-100">
      <div class="row h-100 align-items-center">
         <div class="col-12">
            <h2 class="title">Blog Details</h2>
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
                  <li class="breadcrumb-item active" aria-current="page">Blog Details</li> -->
               </ol>
            </nav>
         </div>
      </div>
   </div>
</div>

<section class="dento--blog-area mt-50">
   <div class="container">
      <div class="row">

      <?php

         if ( have_posts() ) :
         while ( have_posts() ) : the_post(); ?>

         <div class="col-12 col-lg-8 mb-100">


            <?php if ( has_post_thumbnail() ) { ?>

            <div class="blog-details-area">

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

               <h2 class="post-title"><?php the_title(); ?></h2>
               <div class="post-meta">
                  <a href="#"><i class="icon_clock_alt"></i>&nbsp&nbsp<?php the_date(); ?></a>
                  <a href="#"><i class="icon_chat_alt"></i>&nbsp&nbsp<?php echo get_comments_number(); ?></a>
               </div>
               <?php the_content(); ?>
            </div>




            <div class="post-share-area mb-30">

               <?php $custom_post_type01= get_post_meta(get_the_ID(), 'custom_input_01', true);?>
               <?php $custom_post_type011= get_post_meta(get_the_ID(), 'custom_input_011', true);?>
               <?php $custom_post_type012= get_post_meta(get_the_ID(), 'custom_input_012', true);?>
               <?php $custom_post_type013= get_post_meta(get_the_ID(), 'custom_input_013', true);?>

               <?php if($custom_post_type01 != null ){
                     echo "<a href='$custom_post_type01'class='facebook' target='_blank'><i class='fa fa-facebook'></i>Share</a>";
                     }
               ?>

               <?php if($custom_post_type011 != null ){
                  echo "<a href='$custom_post_type011' class='tweet' target='_blank'><i class='fa fa-twitter'></i>Tweet</a>";
                     }
               ?>

               <?php if($custom_post_type012 != null ){
                  echo "<a  href='$custom_post_type012' class='google-plus' target='_blank'><i class='fa fa-google-plus'></i>Share</a>";
                     }
                  ?>
               <?php if($custom_post_type013 != null ){
               echo "<a  href='$custom_post_type013' class='pinterest' target='_blank'><i class='fa fa-pinterest'></i>Share</a>";
                  }
               ?>
            </div>

               <p class=""> <?php _e('posted in'); ?> <?php the_category(','); ?></p>
               <?php
               if (comments_open() || get_comments_number() ):
                  comments_template();
               endif;
               ?>







            <div class="contact-form mt-30">
               <!-- <h5 class="mb-30">Leave A Reply</h5> -->
               <form action="#" method="post">
                  <div class="row">

                     <!-- <div class="col-lg-6">
                        <input type="text" name="message-name" class="form-control mb-30" placeholder="Your Name">
                     </div>
                     <div class="col-lg-6">
                        <input type="email" name="message-email" class="form-control mb-30" placeholder="Your Email">
                     </div>
                     <div class="col-12">
                        <textarea name="message" class="form-control mb-30" placeholder="Your Message"></textarea>
                     </div>
                     <div class="col-12">
                        <button type="submit" class="btn dento-btn">Reply</button>
                     </div> -->
                  </div>
               </form>
            </div>
         </div>
         <?php } ?>
            <?php endwhile;
            endif;
            wp_reset_postdata();
            ?>




<?php get_sidebar();?>





      </div>
   </div>
</section>


<?php
get_footer();
?>