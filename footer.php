
<footer class="footer-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/3.jpg);">

<div class="container">
    <div class="row">

        <div class="col-12 col-sm-6 col-lg-4">
            <div class="single-footer-widget">
            <?php (is_active_sidebar('sidebar-9')) ?>
            <?php dynamic_sidebar( 'sidebar-9' ); ?>
                <!-- <a href="index.html" class="d-block mb-4"><img src="img/core-img/logo.png" alt=""></a>
                <p>Etiam sutor risus, dapibus act elefend katen, lacinia sitamet denim. Mauris sagittis kansa interdum dignissim.</p>
                <div class="footer-contact">
                    <p><i class="icon_pin"></i> 28 Jackson Street, Chicago, 7788569 USA</p>
                    <p><i class="icon_phone"></i> +84. 2252. 2250. 122</p>
                    <p><i class="icon_mail"></i> <a href="https://preview.colorlib.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="3950575f56175d5c574d56795e54585055175a5654">[email&#160;protected]</a></p> 
                </div>-->
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget">

            <?php (is_active_sidebar('sidebar-10')) ?>
            <?php dynamic_sidebar( 'sidebar-10' ); ?>
                <!-- <h5 class="widget-title">Opening Hours</h5>

                <ul class="opening-hours">
                    <li><span>Mon-Wed</span> <span>8.00-18.00</span></li>
                    <li><span>Thu-Fri</span> <span>8.00-17.00</span></li>
                    <li><span>Sat</span> <span>9.00-17.00</span></li>
                    <li><span>Sun</span> <span>10.00-17.00</span></li>
                    <li><span>Holiday</span> <span>Closed</span></li>
                </ul> -->
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget">

            <?php (is_active_sidebar('sidebar-11')) ?>
            <?php dynamic_sidebar( 'sidebar-11' ); ?>
                <!-- <h5 class="widget-title">Quick Link</h5>

                <nav>
                    <ul class="quick-links">
                        <li><a href="#">About</a></li>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Advisors</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Dentist</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Legals</a></li>
                    </ul>
                </nav> -->
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget">
            <?php (is_active_sidebar('sidebar-13')) ?>
            <?php dynamic_sidebar( 'sidebar-13' ); ?>
                <!-- <h5 class="widget-title">Newsletter</h5>
                <p>We will send out weekly newest article and some great offers</p> -->

                <div class="footer-newsletter-form">
                    <form action="#" method="post">
                        <input type="email" name="nl-email" value="" placeholder="Email Address">
                        <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                    </form>
                </div>

                <div class="footer-social-info">
                        <?php if ( has_nav_menu( 'secondary' ) ) : ?>
                        <?php
                        wp_nav_menu(
                        array(
                            'theme_location' => 'secondary',
                            'depth' => 1,
                            'menu' => 'social nav menu',      
                        
                            
                            'container' => 'div', 
                            'container_class' => 'footer-social-info',
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
                    <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="copywrite-content">
            <?php (is_active_sidebar('sidebar-14')) ?>
            <?php dynamic_sidebar( 'sidebar-14' ); ?>
            <!-- <p>Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/" target="_blank">Colorlib</a>
            </p> -->
            </div>
        </div>
    </div>
</div>
</footer>
    <?php wp_footer();?>
    <script>$(window).load(function() {
   $('.preloader').fadeOut('slow');
});</script>
</body>
</html>