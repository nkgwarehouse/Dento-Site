<?php
//______________________________________
function my_activity(){     
                                 //____
register_widget('Activity');     //____
}
//______________________________________

  add_action( 'widgets_init', 'my_activity' );

class Activity extends WP_Widget{
   public function __construct() {
        parent::__construct(
            'activity', //Base ID
            esc_html__('Activity','dento'), //Name
            array('description' => __('Displays your latest listings. Outputs the post thumbnail, title and date per listing','dento'),)
        );
        
    }


function update($new_instance, $old_instance) {
    $instance = $old_instance;
    $instance['title'] = strip_tags($new_instance['title']);
    $instance['numberOfPosts'] = strip_tags($new_instance['numberOfPosts']);
    return $instance;
}



function form($instance) {
    if($instance){
        $title = esc_attr($instance['title']);
        $numberOfPosts = esc_attr($instance['numberOfPosts']);
    }else{
        $title = '';
        $numberOfPosts = '';
    }
    ?>
     <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'activity' ); ?></label> 
        <input class="widefat" id="<?php echo esc_html__($this->get_field_id( 'title' )); ?>" name="<?php echo esc_html__($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
                          
        <p>
        <label for="<?php echo $this->get_field_id( 'numberOfPosts' ); ?>"><?php _e( 'Number Of Posts:', 'activity' ); ?></label> 
        <select id="<?php echo esc_html__($this->get_field_id( 'numberOfPosts' )); ?>" name="<?php echo esc_html__($this->get_field_name( 'numberOfPosts' )); ?>">

        <?php for($x=1; $x<=10; $x++): ?>
            <option <?php echo $x == $numberOfPosts ? 'selected="selected"': '';?> value="<?php echo $x;?> "><?php echo $x; ?> </option>
        <?php endfor;?>
        </select>
        </p>
        <?php 
    }

    function widget($args, $instance){
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);
        $numberOfPosts = $instance['numberOfPosts'];
        echo $args['before_widget'];
        if (! empty($title)){
            echo $args['before_title'] . $title . $args ['after_title'];
        }
        // if(!empty($numberOfPosts)){
        //     echo $numberOfPosts;
        // }
        $this-> getActivityListings($numberOfPosts);
        echo $after_widget;

    }

    function getActivityListings($numberOfPosts){
        global $post;
        add_image_size ('realty_widget_size', 100, 65, false);
        $listings= new WP_Query();
        $listings-> query('post_type=new&post_per_page=' . $numberOfPosts);

        if($listings -> found_posts >0){
            while ($listings->have_posts()) :
                            $listings->the_post();
            echo '<div class ="single-news-area d-flex align-items-center"><div class ="blog-thumbnail">';
            
                ?>
                
                    <?php
                    $image = (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail($post->ID, 'realty_widget_size') : '<div class="noThumb"></div>';
                    $listItem = $image;
                    $listItem .= '</div><div class="blog-content">';
                    
                    ?>
                    <?php
                    $listItem .= '<a href="#" class="post-title">' . get_the_title() . '</a>';
                    $listItem .= '<span>' . get_the_date() . '</span></div></div>';
                    echo $listItem;
                
            
            // echo '</div>';
            ?>  <?php 
            endwhile;
            
            wp_reset_postdata();
        }else{
            echo '<p style="padding:25px;">No Listing found</p>';

        }
  
    }
}
?>