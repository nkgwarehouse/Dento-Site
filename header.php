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
