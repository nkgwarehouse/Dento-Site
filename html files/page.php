

<?php get_header(); ?>

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/12.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
            <h2 class="title">page.php</h2>
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
                        <li class="breadcrumb-item active" aria-current="page">Blog</li> -->
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>


<section class="dento-blog-area mt-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
               
                <?php
                if(have_posts()): while(have_posts()) :  the_post();
                    the_content();
                    endwhile;
                endif;
                ?>
            
            </div>
           
        </div>
    </div>
</section>

<?php get_footer(); ?>