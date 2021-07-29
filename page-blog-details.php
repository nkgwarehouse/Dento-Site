<?php get_header();?>
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
      $loop = new WP_Query( array( 'post_type' => 'service', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
              if ( $loop->have_posts() ) :
              while ( $loop->have_posts() ) : $loop->the_post(); ?>

         <div class="col-12 col-lg-8 mb-100">

         <?php if ( has_post_thumbnail() ) { ?>
            <div class="blog-details-area">
               <!-- <img src="../wp-content/themes/dento/img/bg-img/24.jpg" alt=""> -->
               <a href="<?php the_permalink(); the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
               <h2 class="post-title"><?php the_title(); ?></h2>
               <div class="post-meta">
                  <a href="#"><i class="icon_clock_alt"></i>&nbsp&nbsp<?php the_date(); ?></a>
                  <a href="#"><i class="icon_chat_alt"></i>&nbsp&nbsp<?php echo get_comments_number(); ?></a>
               </div>
               <p><?php the_content(); ?>
               </p>
               <blockquote cite="" class="dento-blockquote d-flex">
                  <div class="icon">
                     <i class="fa fa-quote-left"></i>
                  </div>
                  <div class="text">
                     <h5>Good dental care doesn't make you a good student, but if your tooth hurts, it's hard to be a good student</h5>
                     <h6>Geoffrey Canada / <span>Social Activist</span></h6>
                  </div>
               </blockquote>
               <p>Proin venenatis elementum pretium. Vivamus mollis iaculis mi, a efficitur turpis maximus non. Sed felis sapien, aliquam eu nunc in, tempus interdum turpis. In in porta nulla. Maecenas ut elit nec nibh vehicula auctor eget felis. Nulla
                  finibus dictum augue ullamcorper. Integer nuamcorper lorem sit down amet dignissim tincidunt.
                  Utsu risus feugiat, scelerisque turpis eu, suscipit orci. Fusce indo diam ipsum. Nulla facilisi class aptent taciti
                  litora torquent per conubia nostra, per inceptos himenaeos.
               </p>
               <img src="../wp-content/themes/dento/img/bg-img/25.jpg" alt="">
               <p>Nunc vitae nisl porttitor, consectetur sapien vel, vulputate orci. Sed viverra, neque action lacinia hendrerit, lectus purus pellentesque dui, eu porttitor enim neque vitae magna. Nunc nec eros nonta risus vestibulum feugiat. In
                  semper tempor sem, eget porttitor dolor convallis sit amet. Praesent ut justo augue. Curabitur id elit nisi. Vivamus varius lacus sit amet nisi lacinia, sed pulvinar odio rhoncus. In sagittis aliquet tellus. Nulla pellentesque, risus
                  vitae porta iaculis, metus tortor cursus felis, at porta odio lorem nonsa mauris. Nullam mattis nulla blandit sapien cursus, quis luctus ex volutpat. Vestibulum santa dui nulla, sed feugiat felis hendrerit euro. Praesent in lobortis
                  orci, vitae finibus tortor. Aliquam nisl sapien, posuere ac accumsan scelerisque, eleifend quis dui, quisque cursus congue nibh pretium blandit.
               </p>
            </div>
            <div class="post-share-area mb-30">
               <a href="#" class="facebook"><i class="fa fa-facebook"></i> Share</a>
               <a href="#" class="tweet"><i class="fa fa-twitter"></i> Tweet</a>
               <a href="#" class="google-plus"><i class="fa fa-google-plus"></i> Share</a>
               <a href="#" class="pinterest"><i class="fa fa-pinterest"></i> Share</a>
            </div>
            <div class="comment_area clearfix">
               <h5 class="title">3 Comments</h5>
               <ol>
                  <li class="single_comment_area">
                     <div class="comment-content d-flex">
                        <div class="comment-author">
                           <img src="../wp-content/themes/dento/img/bg-img/26.jpg" alt="author">
                        </div>
                        <div class="comment-meta">
                           <a href="#" class="post-author">Tom Hardy / <span>28 Sep 2018 at 10:00 am</span></a>
                           <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
                           <a href="#" class="comment-reply">Reply</a>
                        </div>
                     </div>
                     <ol class="children">
                        <li class="single_comment_area">
                           <div class="comment-content d-flex">
                              <div class="comment-author">
                                 <img src="../wp-content/themes/dento/img/bg-img/27.jpg" alt="author">
                              </div>
                              <div class="comment-meta">
                                 <a href="#" class="post-author">Samantha Harvey / <span>28 Sep 2018 at 10:30 am</span></a>
                                 <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
                                 <a href="#" class="comment-reply">Reply</a>
                              </div>
                           </div>
                        </li>
                     </ol>
                  </li>
                  <li class="single_comment_area">
                     <div class="comment-content d-flex">
                        <div class="comment-author">
                           <img src="../wp-content/themes/dento/img/bg-img/28.jpg" alt="author">
                        </div>
                        <div class="comment-meta">
                           <a href="#" class="post-author">Jonny Evans / <span>28 Sep 2018 at 11:00 am</span></a>
                           <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sitdown ameto, consectetur, adipisci velit, sed quiata non numqua eius modi tempor incidunt ut labore.</p>
                           <a href="#" class="comment-reply">Reply</a>
                        </div>
                     </div>
                  </li>
               </ol>
            </div>
            <div class="contact-form mt-30">
               <h5 class="mb-30">Leave A Reply</h5>
               <form action="#" method="post">
                  <div class="row">
                     <div class="col-lg-6">
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
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-12 col-lg-4">
            <div class="dento-sidebar">
               <div class="single-widget-area search-widget">
                  <form action="#" method="post">
                     <input type="search" name="search" class="form-control" placeholder="Search ...">
                     <button type="submit"><i class="icon_search"></i></button>
                  </form>
               </div>
               <div class="single-widget-area catagories-widget">
                  <h5 class="widget-title">Categories</h5>
                  <ul class="catagories-list">
                     <li><a href="#">Dentistry Articles</a></li>
                     <li><a href="#">Oral Health</a></li>
                     <li><a href="#">Dental Technology</a></li>
                     <li><a href="#">Kids Care Dental</a></li>
                     <li><a href="#">Healthy Smiles, Inside &amp; Out</a></li>
                  </ul>
               </div>
               <div class="single-widget-area news-widget">
                  <h5 class="widget-title">Recent News</h5>
                  <div class="single-news-area d-flex align-items-center">
                     <div class="blog-thumbnail">
                        <img src="../wp-content/themes/dento/img/bg-img/21.jpg" alt="">
                     </div>
                     <div class="blog-content">
                        <a href="#" class="post-title">Tooth decay: why good dental hygiene is important</a>
                        <span class="post-date">28 Sep 2018</span>
                     </div>
                  </div>
                  <div class="single-news-area d-flex align-items-center">
                     <div class="blog-thumbnail">
                        <img src="../wp-content/themes/dento/img/bg-img/22.jpg" alt="">
                     </div>
                     <div class="blog-content">
                        <a href="#" class="post-title">Six reasons your breath might smell like poop</a>
                        <span class="post-date">28 Sep 2018</span>
                     </div>
                  </div>
                  <div class="single-news-area d-flex align-items-center">
                     <div class="blog-thumbnail">
                        <img src="../wp-content/themes/dento/img/bg-img/23.jpg" alt="">
                     </div>
                     <div class="blog-content">
                        <a href="#" class="post-title">Everything you need to know about sinus infection</a>
                        <span class="post-date">28 Sep 2018</span>
                     </div>
                  </div>
               </div>
               <div class="single-widget-area adds-widget">
                  <a href="#"><img class="w-100" src="../wp-content/themes/dento/img/bg-img/adds.png" alt=""></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer();?>