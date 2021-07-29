<div class="col-12 col-lg-4">
                <div class="dento-sidebar">

                    <div class="single-widget-area search-widget form">

                
 <?php // the_post();
                get_search_form();
                // echo "<h3 style='margin-top:25px;'>All Blog</h3>";
                $loop = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish'));
                while($loop->have_posts()){
                    $loop->the_post();
                    ?>
                    
                    <!-- <p class="single-widget-area search-widget form">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                    </p> -->
                    <?php
                }
            
            ?> 

                        <!-- <form action="#" method="post">
                        <input type="search" name="search" class="form-control" placeholder="Search ...">
                        <button type="submit"><i class="icon_search"></i></button>
                        </form> -->
                    </div>

                    <div class="single-widget-area catagories-widget">
                    <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-2' ); ?>
                      <?php endif; 
                      ?>

                        <!-- <h5 class="widget-title">Categories</h5>

                            <ul class="catagories-list">
                                <li><a href="#">Dentistry Articles</a></li>
                                <li><a href="#">Oral Health</a></li>
                                <li><a href="#">Dental Technology</a></li>
                                <li><a href="#">Kids Care Dental</a></li>
                                <li><a href="#">Healthy Smiles, Inside &amp; Out</a></li>
                            </ul> -->
                    </div>

                    <div class="single-widget-area news-widget">
                    <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-3' ); ?>
                      <?php endif; 
                      ?>
                    </div>
                    <!-- <h5 class="widget-title">Recent News</h5>

                        <div class="single-news-area d-flex align-items-center">
                            <div class="blog-thumbnail">
                                <img src="../wp-content/themes/dento/img/bg-img/21.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-title">Tooth decay: why good dental hygiene is important</a>
                                    <span class="post-date">28 Sep 2018</span>
                            </div> -->
                       <!--  </div>
                
                        <div class="single-news-area d-flex align-items-center">
                        
   
                         <div class="blog-thumbnail">
                                <img src="../wp-content/themes/dento/img/bg-img/22.jpg" alt="">
                            </div>  
                            <div class="blog-content">
                                <a href="#" class="post-title">Six reasons your breath might smell like poop</a>
                                    <span class="post-date">28 Sep 2018</span>
                            </div> 
                        </div>-->

                      <!--  <div class="single-news-area d-flex align-items-center">
                            <div class="blog-thumbnail">
                                <img src="../wp-content/themes/dento/img/bg-img/23.jpg" alt="">
                            </div>
                            <div class="blog-content">
                                <a href="#" class="post-title">Everything you need to know about sinus infection</a>
                                    <span class="post-date">28 Sep 2018</span>
                            </div> 
                        </div> -->
                    

                    <div class="single-widget-area adds-widget">
                    <?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
                          <?php dynamic_sidebar( 'sidebar-4' ); ?>
                      <?php endif; 
                      ?>
   
                    <!-- <a href="#"><img class="w-100" src="../wp-content/themes/dento/img/bg-img/adds.png" alt=""></a> -->
                    </div>
                </div>
            </div>