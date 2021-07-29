

<?php get_header(); ?>

<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(../wp-content/themes/dento/img/bg-img/12.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
            <h2 class="title">Blog</h2>
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
            <div class="col-12 col-lg-8">
               
                <?php
                $loop = new WP_Query( array( 'post_type' => 'post', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
                if ( $loop->have_posts() ) :
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                
                <div class="single-blog-item style-2 d-flex flex-wrap align-items-center mb-50"> 
           

                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="blog-thumbnail">
                        <a href="<?php the_permalink(); the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
                       
                    </div>
                    <?php } ?>

                    <div class="blog-content">
                        <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                     
                        <?php my_excerpt(15); ?>
                        <div class="post-meta">
                            <a href="#"><i class="icon_clock_alt"></i>&nbsp&nbsp<?php the_date(); ?></a>
                            <a href="#"><i class="icon_chat_alt"></i>&nbsp&nbsp<?php echo get_comments_number(); ?></a>
                        </div>
                    </div>
                    
                </div>
                <?php endwhile;
                    endif; 
                    wp_reset_postdata();
                    ?> 

                <nav class="dento-pagination mb-100">
                    <ul class="pagination">
                <li class="page-item active"><a class="page-link" href="<?php the_permalink();?>"><i class="fa fa-angle-left" aria-hidden="true"></i><?php previous_posts_link( 'Older posts' ); ?></a></li>
                <?php posts_nav_link(); ?>

                <li class="page-item active"><a class="page-link" href="<?php the_permalink();?>"><i class="fa fa-angle-right" aria-hidden="true"></i><?php next_posts_link( 'Newer posts' ); ?></a></li>

                    <!-- 
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li> -->
                    </ul>
                </nav>
            
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>