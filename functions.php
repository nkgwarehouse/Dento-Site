<?php

function pp_enqueue_scripts()
{
        wp_register_script('my_custom_js01', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);    
        wp_register_script('my_custom_js02', get_template_directory_uri() . '/js/popper.min.js', array(), null, true);
        wp_register_script('my_custom_js03', get_template_directory_uri() . '/js/bootstrap.min.js', array(), null, true);
        wp_register_script('my_custom_js04', get_template_directory_uri() . '/js/dento.bundle.js', array(), null, true); 
        wp_register_script('my_custom_js05', get_template_directory_uri() . '/js/googletagmanager.min.js', array(), null, true); 
        wp_register_script('my_custom_js06', get_template_directory_uri() . '/js/default-assets/active.js', array(), null, true);     

               wp_enqueue_script('my_custom_js01');
               wp_enqueue_script('my_custom_js02'); 
               wp_enqueue_script('my_custom_js03');
               wp_enqueue_script('my_custom_js04');
               wp_enqueue_script('my_custom_js05');
               wp_enqueue_script('my_custom_js06');
        // online CDN scripts below for bootstrap, poppins, jquery etc.

}
    add_action('wp_enqueue_scripts','pp_enqueue_scripts');

    function pp_enqueue_styles()
{
        wp_register_style('style02', get_stylesheet_directory_uri() . '/css/animate.css', array(), false, );
        wp_enqueue_style('style02');
        
        wp_register_style('style03', get_stylesheet_directory_uri() . '/style.css', array(), false, );
        wp_enqueue_style('style03'); 
        
        wp_register_style('style04', get_stylesheet_directory_uri() . '/css/font-awesome.min.css', array(), false, );
        wp_enqueue_style('style04');      

        wp_register_style('style05', get_stylesheet_directory_uri() . '/css/magnific-popup.min.css', array(), false, );
        wp_enqueue_style('style05');      

        wp_register_style('style06', get_stylesheet_directory_uri() . '/css/owl.carousel.min.css', array(), false, );
        wp_enqueue_style('style06');      
} 
add_action('wp_enqueue_scripts','pp_enqueue_styles');

//_________________________adding theme supoort and register nav menu__________________________________________________________

function temp_menu_theme_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support( 'post-formats', array( 'aside', 'link' ) );
	
	register_nav_menus( 
        array(
	            'primary' => __( 'Primary Menu', 'dento' ),
                'secondary' => __('Secondary Menu', 'dento')
            ) 
    );
}
add_action( 'after_setup_theme', 'temp_menu_theme_setup' );
//------------------adding anchor class in wp nav menu------
add_filter( 'nav_menu_link_attributes', function($atts) {
    $atts['class'] = "nav-link";
    return $atts;
}, 100, 1 );

//--------------- adding li class in wp nav menu------
function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory().'/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

//_____________________changing excerpt length____________

class Excerpt {

    // Default length (by WordPress)
    public static $length = 55;
  
    // So you can call: my_excerpt('short');
    public static $types = array(
        'short' => 25,
        'regular' => 55,
        'long' => 100
      );
  
    /**
     * Sets the length for the excerpt,
     * then it adds the WP filter
     * And automatically calls the_excerpt();
     *
     * @param string $new_length 
     * @return void
     * @author Baylor Rae'
     */
    public static function length($new_length = 55) {
      Excerpt::$length = $new_length;
  
      add_filter('excerpt_length', 'Excerpt::new_length');
  
      Excerpt::output();
    }
  
    // Tells WP the new length
    public static function new_length() {
      if( isset(Excerpt::$types[Excerpt::$length]) )
        return Excerpt::$types[Excerpt::$length];
      else
        return Excerpt::$length;
    }
  
    // Echoes out the excerpt
    public static function output() {
      the_excerpt();
    }
  
  }
  
  // An alias to the class
  function my_excerpt($length = 55) {
    Excerpt::length($length);
  }


/*________________________________creating meta box_______________________________*/
  add_action('admin_init','my_custom_meta_box');
            
  function my_custom_meta_box(){
      $post_types_01 = array( 'post', 'page');
            $post_types_011 = array( 'post', 'page');
            $post_types_012= array( 'post', 'page');
            $post_types_013 = array( 'post', 'page');

      $post_types_02 = array( 'testimonial');
      $post_types_03 = array( 'doctor'); /*always here singluar name is written*/
      /* meta boxes for social sites */
      $post_types_04 = array( 'doctor');
      $post_types_05 = array( 'doctor');
      $post_types_06 = array( 'doctor');

      $post_types_07 = array( 'doctor');
      $post_types_08 = array( 'doctor');
      $post_types_09 = array( 'doctor');
      $post_types_10 = array( 'doctor');

      /* meta boxes for latest news*/
    //   $post_types_07 = array( 'new');
    //   $post_types_08 = array( 'new');

      add_meta_box('custom-mb-01', 'Add Facebook profile of the Doctor', 'custom_context_01', $post_types_01,'normal', 'low');
        add_meta_box('custom-mb-011', 'Add Twitter profile of the Doctor', 'custom_context_011', $post_types_011,'normal', 'low');
        add_meta_box('custom-mb-012', 'Add Google+ profile of the Doctor', 'custom_context_012', $post_types_012,'normal', 'low');
        add_meta_box('custom-mb-013', 'Add Pinterest profile of the Doctor', 'custom_context_013', $post_types_013,'normal', 'low');
        //_____________________Social Site Meta box for blogs |

      add_meta_box('custom-mb-02', 'Add kind of the Patient Opertaion', 'custom_context_02', $post_types_02,'normal', 'low');
      add_meta_box('custom-mb-03', 'Add expertise of the Doctor', 'custom_context_03', $post_types_03,'normal', 'low');
      add_meta_box('custom-mb-04', 'Add Facebook profile of the Doctor', 'custom_context_04', $post_types_04,'normal', 'low');
      add_meta_box('custom-mb-05', 'Add Twitter profile of the Doctor', 'custom_context_05', $post_types_05,'normal', 'low');
      add_meta_box('custom-mb-06', 'Add Google+ profile of the Doctor', 'custom_context_06', $post_types_06,'normal', 'low');
    //   add_meta_box('custom-mb-07', 'Add Date of the Doctor', 'custom_context_06', $post_types_06,'normal', 'low');
  }
  
  function custom_context_01(){
      global $post;
   
      $data_01 = get_post_custom($post->ID);
      $val_01 = isset($data_01['custom_input_01']) ? esc_attr($data_01['custom_input_01'][0]) : 'no value';
      
      echo '<input type="text" name="custom_input_01" id="custom_input_01" value="'.$val_01.'" />';
  }

        function custom_context_011(){
            global $post;
        
            $data_011 = get_post_custom($post->ID);
            $val_011 = isset($data_011['custom_input_011']) ? esc_attr($data_011['custom_input_011'][0]) : 'no value';
            
            echo '<input type="text" name="custom_input_011" id="custom_input_011" value="'.$val_011.'" />';
        }

        function custom_context_012(){
            global $post;
         
            $data_012 = get_post_custom($post->ID);
            $val_012 = isset($data_012['custom_input_01']) ? esc_attr($data_012['custom_input_012'][0]) : 'no value';
            
            echo '<input type="text" name="custom_input_012" id="custom_input_012" value="'.$val_012.'" />';
        }

        function custom_context_013(){
            global $post;
         
            $data_013 = get_post_custom($post->ID);
            $val_013 = isset($data_013['custom_input_013']) ? esc_attr($data_013['custom_input_013'][0]) : 'no value';
            
            echo '<input type="text" name="custom_input_013" id="custom_input_013" value="'.$val_013.'" />';
        }
 
  function custom_context_02(){
    global $post;
 
    $data_02 = get_post_custom($post->ID);
    $val_02 = isset($data_02['custom_input_02']) ? esc_attr($data_02['custom_input_02'][0]) : '';
    
    echo '<input type="text" name="custom_input_02" id="custom_input_02" value="'.$val_02.'" />';
}

function custom_context_03(){
    global $post;
 
    $data_03 = get_post_custom($post->ID);
    $val_03 = isset($data_03['custom_input_03']) ? esc_attr($data_03['custom_input_03'][0]) : '';
    
    echo '<input type="text" name="custom_input_03" id="custom_input_03" value="'.$val_03.'" />';
}

function custom_context_04(){
    global $post;
 
    $data_04 = get_post_custom($post->ID);
    $val_04 = isset($data_04['custom_input_04']) ? esc_attr($data_04['custom_input_04'][0]) : '';
    
    echo '<input type="text" name="custom_input_04" id="custom_input_04" value="'.$val_04.'" />';
}

function custom_context_05(){
    global $post;
 
    $data_05 = get_post_custom($post->ID);
    $val_05 = isset($data_05['custom_input_05']) ? esc_attr($data_05['custom_input_05'][0]) : '';
    
    echo '<input type="text" name="custom_input_05" id="custom_input_05" value="'.$val_05.'" />';
}

function custom_context_06(){
    global $post;
 
    $data_06 = get_post_custom($post->ID);
    $val_06 = isset($data_06['custom_input_06']) ? esc_attr($data_06['custom_input_06'][0]) : '';
    
    echo '<input type="text" name="custom_input_06" id="custom_input_06" value="'.$val_06.'" />';
}


  add_action("save_post","save_detail");
  
  function save_detail(){
      global $post;
      
      if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
        return $post->ID;
        
          
      }
    
    update_post_meta($post->ID, "custom_input_01", $_POST["custom_input_01"]);
            update_post_meta($post->ID, "custom_input_011", $_POST["custom_input_011"]);
            update_post_meta($post->ID, "custom_input_012", $_POST["custom_input_012"]);
            update_post_meta($post->ID, "custom_input_013", $_POST["custom_input_013"]);
    update_post_meta($post->ID, "custom_input_02", $_POST["custom_input_02"]);
    update_post_meta($post->ID, "custom_input_03", $_POST["custom_input_03"]);
    update_post_meta($post->ID, "custom_input_04", $_POST["custom_input_04"]);
    update_post_meta($post->ID, "custom_input_05", $_POST["custom_input_05"]);
    update_post_meta($post->ID, "custom_input_06", $_POST["custom_input_06"]);
  }

//_____________________ Custom Post Type - Testimonial ___________________________________________________________

        function my_custom_post_testimonials() {
        $labels = array(
        'name'               => _x( 'testimonials', 'post type general name' ),
        'singular_name'      => _x( 'testimonial', 'post type singular name' ),
        'menu_name'          => __('testimonials'),
        'add_new'            => _x( 'Add New', 'book' ),
        'add_new_item'       => __( 'Add New testimonial' ),
        'edit_item'          => __( 'Edit testimonial' ),
        'new_item'           => __( 'New testimonial' ),
        'all_items'          => __( 'All testimonials' ),
        'view_item'          => __( 'View testimonial' ),
        'search_items'       => __( 'Search testimonials' ),
        'not_found'          => __( 'No testimonials found' ),
        'not_found_in_trash' => __( 'No testimonials found in the Trash' ), 
        'parent_item_colon'  => '’',
        
        );
        $args = array(
        'labels'        => $labels,
        'description'   => 'Holds our testimonials and testimonial specific data',
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
        'show_in_rest'        => true,
         
        // This is where we add taxonomies to our CPT
        'taxonomies'          => array( 'category' ),
        );
    
        register_post_type( 'testimonial', $args ); 
                }
    
        add_action( 'init', 'my_custom_post_testimonials' );




        //_____________________ Custom Post Type - Doctor ___________________________________________________________

        function my_custom_post_doctors() {
            $labels02 = array(
            'name'               => _x( 'doctors', 'post type general name' ),
            'singular_name'      => _x( 'doctor', 'post type singular name' ),
            'menu_name'          => __('doctors'),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New doctor' ),
            'edit_item'          => __( 'Edit doctor' ),
            'new_item'           => __( 'New doctor' ),
            'all_items'          => __( 'All doctors' ),
            'view_item'          => __( 'View doctor' ),
            'search_items'       => __( 'Search doctors' ),
            'not_found'          => __( 'No doctors found' ),
            'not_found_in_trash' => __( 'No doctors found in the Trash' ), 
            'parent_item_colon'  => '’',
            
            );
            $args02 = array(
            'labels'        => $labels02,
            'description'   => 'Holds our doctors and doctor specific data',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
             
            // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'category' ),
            );
        
            register_post_type( 'doctor', $args02 ); 
                    }
        
            add_action( 'init', 'my_custom_post_doctors' );



               //_____________________ Custom Post Type - Latest News ___________________________________________________________

        function my_custom_post_news() {
            $labels03 = array(
            'name'               => _x( 'news', 'post type general name' ),
            'singular_name'      => _x( 'new', 'post type singular name' ),
            'menu_name'          => __(' Latest News'),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New new' ),
            'edit_item'          => __( 'Edit new' ),
            'new_item'           => __( 'New new' ),
            'all_items'          => __( 'All news' ),
            'view_item'          => __( 'View new' ),
            'search_items'       => __( 'Search news' ),
            'not_found'          => __( 'No news found' ),
            'not_found_in_trash' => __( 'No news found in the Trash' ), 
            'parent_item_colon'  => '’',
            
            );
            $args03 = array(
            'labels'        => $labels03,
            'description'   => 'Holds our news and new specific data',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
             
            // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'category' ),
            );
        
            register_post_type( 'new', $args03 ); 
                    }
        
            add_action( 'init', 'my_custom_post_news' );


                   //_____________________ Custom Post Type - Services ___________________________________________________________

        function my_custom_post_services() {
            $labels02 = array(
            'name'               => _x( 'services', 'post type general name' ),
            'singular_name'      => _x( 'service', 'post type singular name' ),
            'menu_name'          => __('services'),
            'add_new'            => _x( 'Add New', 'book' ),
            'add_new_item'       => __( 'Add New service' ),
            'edit_item'          => __( 'Edit service' ),
            'new_item'           => __( 'New service' ),
            'all_items'          => __( 'All services' ),
            'view_item'          => __( 'View service' ),
            'search_items'       => __( 'Search services' ),
            'not_found'          => __( 'No services found' ),
            'not_found_in_trash' => __( 'No services found in the Trash' ), 
            'parent_item_colon'  => '’',
            
            );
            $args02 = array(
            'labels'        => $labels02,
            'description'   => 'Holds our services and service specific data',
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 4,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            'show_in_rest'        => true,
             
            // This is where we add taxonomies to our CPT
            'taxonomies'          => array( 'category' ),
            );
        
            register_post_type( 'service', $args02 ); 
                    }
        
            add_action( 'init', 'my_custom_post_services' );

//_________________________CUSTOM INTERACTION MESSAGES___________________________________________________________
        function my_updated_messages( $messages ) {
        global $post, $post_ID;
        $messages['testimonial'] = array(
        0 => '’', 
        1 => sprintf( __('testimonial updated. <a href="%s">View testimonial</a>'), esc_url( get_permalink($post_ID) ) ),
        2 => __('Custom field updated.'),
        3 => __('Custom field deleted.'),
        4 => __('testimonial updated.'),
        5 => isset($_GET['revision']) ? sprintf( __('testimonial restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
        6 => sprintf( __('testimonial published. <a href="%s">View testimonial</a>'), esc_url( get_permalink($post_ID) ) ),
        7 => __('testimonial saved.'),
        8 => sprintf( __('testimonial submitted. <a target="_blank" href="%s">Preview testimonial</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
        9 => sprintf( __('testimonial scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview testimonial</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
        10 => sprintf( __('testimonial draft updated. <a target="_blank" href="%s">Preview testimonial</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
                );
        return $messages;
        }
        add_filter( 'post_updated_messages', 'my_updated_messages' );


    //_________________________CONTEXTUAL HELP___________________________________________________________

    //    function my_contextual_help( $contextual_help, $screen_id, $screen ) { 
    //     if ( 'testimonial' == $screen->id ) {

    //       $contextual_help = '<h2>testimonials</h2>
    //       <p>testimonials show the details of the items that we sell on the website. You can see a list of them on this page in reverse chronological order - the latest one we added is first.</p> 
    //       <p>You can view/edit the details of each testimonial by clicking on its name, or you can perform bulk actions using the dropdown menu and selecting multiple items.</p>';

    //     } elseif ( 'edit-testimonial' == $screen->id ) {

    //       $contextual_help = '<h2>Editing testimonials</h2>
    //       <p>This page allows you to view/modify testimonial details. Please make sure to fill out the available boxes with the appropriate details (testimonial image, price, brand) and <strong>not</strong> add these details to the testimonial description.</p>';

    //     }
    //     return $contextual_help;
    //   }
    //   add_action( 'contextual_help', 'my_contextual_help', 10, 3 ); 

  //_____________________________________building Widgets ___________________________________________________________________
  /**
  *Register widget with WordPress.
  *//*public*/ 
  
  function load_new_widget() {
      register_widget( 'my_widget_01');
      /* array( 
          'name' => __( 'my_widget_01', 'dento' ),
          'id' => 'my_widget_01',  // Base ID
          'myTitle' => esc_html__( 'Widget Title', 'dento' ), // Name
          'description' => esc_html__( 'input your Skill name and add description about it.', 'dento' ) 
          )
      ); */
  }
  add_action( 'widgets_init', 'load_new_widget' );

  
  // Creating the construct
  //_____________________________________________________________________________//    
  class my_widget_01 extends WP_Widget {

      public function __construct() {
          parent::__construct(
              'my_widget_01', // Base ID
              esc_html__( 'Widget Title', 'dento' ), // Name
              array( 'description' => esc_html__( 'input your Skill name and add description about it.', 'dento' ), ) // Args
          );
      }
      
      // function __construct() {
          // parent::__construct(
              
              // // Base ID of your widget
              // 'my_widget_01', 
              
              // // Widget name will appear in UI
              // __('Newly made Widget ', 'dento'), 
              
              // // Widget description
              // array( 'description' => __( 'Sample widget that could display any text on the post/page screen', 'dento' ), ) 
              // );
              // }
              //_____________________________________________________________________________________//
              
              // public function __construct() {
                  //     $widget_ops = array( 
                      //         'classname' => 'my_widget_01',
                      //         'description' => 'My Widget is awesome',
                      //     );
                      //     parent::__construct( 'my_widget_01', 'My Widget', $widget_ops );
                      // }
                      
                      // /**
                      //  * Outputs the content of the widget
                      //  *
                      //  * @param array $args
                      //  * @param array $instance
                      //  */
//_____________________________________________________________________________//    
                      // Creating widget front-end
                      
        public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $desc = apply_filters('widget_description', $instance['desc']);  
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ){
                echo $args['before_title'] . $title . $args['after_title'];
                }
                // This is where you run the code and display the output
                if ( !empty( $desc )){
                echo $desc;
                }
                          
                //echo esc_html__( '', 'dento' );
                echo $args['after_widget'];
        }
                      
//_____________________________________________________________________________//             
        // Widget Backend 
                      
public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) )
        {
        $title = $instance[ 'title' ];
        } else  {
         $title = __( 'New title', 'dento' );
        }
                          
        if ( isset( $instance[ 'desc' ] ) )
        {
        $desc = $instance[ 'desc' ];
        } else  {
        $desc = __( 'Add Description', 'dento' );
        }
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'dento' ); ?></label> 
        <input class="widefat" id="<?php echo esc_html__($this->get_field_id( 'title' )); ?>" name="<?php echo esc_html__($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
                          
        <p>
        <label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e( 'Description:', 'dento' ); ?></label> 
        <textarea class="widefat" id="<?php echo esc_html__($this->get_field_id( 'desc' )); ?>" name="<?php echo esc_html__($this->get_field_name( 'desc' )); ?>"><?php echo esc_attr( $desc ); ?>
        </textarea>
        </p>
        <p>
        <label for="<?php echo $this->get_field_id( 'desc' ); ?>"><?php _e( 'Description:', 'dento' ); ?></label> 
        <?php wp_dropdown_categories(); ?>
        </p>
        <?php 
        }
//_____________________________________________________________________________//              
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? sanitize_text_field( $new_instance['title'] ) : '';
        $instance['desc'] = ( ! empty( $new_instance['desc'] ) ) ? sanitize_text_field( $new_instance['desc'] ) : '';
        return $instance;
        }
                      
                      // Class wpb_widget ends here
        } 
                  
                  
                  // // Register and load the widget
                  // function wpb_load_widget() {
                      //     register_widget( 'wpb_widget' );
                      // }
                      // add_action( 'widgets_init', 'wpb_load_widget' );
                      //_____________________________________________________________________________//     
                      //   function allinone($update, $form, $widget){
                          //     $update =   widget();
                          //     $form =   form();
                          //      $widget =    update();
                          
                          //   } 
                          //   add_action('widgits_init','allinone');

//--------------------------------------------------//
/*custom post*/
require get_stylesheet_directory() . '/activity.php';

/* creating the widget*/
require get_stylesheet_directory() . '/widgets.php';
//___________________________Sidebar ________________________________________________________

    function temp_widgets_init() 
    {
        register_sidebar(
            array(
                'name'          => __( 'Search', 'dento' ),
                'id'            => 'sidebar-1',
                'description'   => __( 'Search from your Blog', 'dento' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s form-control" style="border:1px;">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="form-control">',
                'after_title'   => '</h2>',
                )
            );
            
        register_sidebar(
        array(
            'name'          => __( 'Categories', 'dento' ),
            'id'            => 'sidebar-2',
            'description'   => __( 'List down the Categories', 'dento' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s catagories-list" style="border:1px;">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title ">',
            'after_title'   => '</h2>',
            )
        );

        register_sidebar(
            array(
                'name'          => __( 'Recent News', 'dento' ),
                'id'            => 'sidebar-3',
                'description'   => __( 'Latest News ', 'dento' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
                )
            );

        register_sidebar(
            array(
                'name'          => __( 'Advice Banner', 'dento' ),
                'id'            => 'sidebar-4',
                'description'   => __( 'Latest News ', 'dento' ),
                'before_widget' => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
                'after_widget'  => '</section>',
                'before_title'  => '<h2 class="adds-widget">',
                'after_title'   => '</h2>',
                )
            );
//------------------------------- counter widgets--------------
        register_sidebar(
            array(
                'name'          => __( 'Years Of Experience', 'dento' ),
                'id'            => 'sidebar-5',
                'description'   => __( 'Years Of Experience ', 'dento' ),
                'before_title' => '<h2 class="adds-widget counter">',
                'after_title'  => '</h2>',
                'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
                'after_widget'   => '</section>',
                )
            );
    
        register_sidebar(
            array(
                'name'          => __( 'Happy Patients', 'dento' ),
                'id'            => 'sidebar-6',
                'description'   => __( 'Happy Patients', 'dento' ),
                'before_title' => '<h2 class="adds-widget counter">',
                'after_title'  => '</h2>',
                'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
                'after_widget'   => '</section>',
                )
            );
            
        register_sidebar(
            array(
                'name'          => __( 'Certificate', 'dento' ),
                'id'            => 'sidebar-7',
                'description'   => __( 'Certificate', 'dento' ),
                'before_title' => '<h2 class="adds-widget counter">',
                'after_title'  => '</h2>',
                'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
                'after_widget'   => '</section>',
                )
            );           

        register_sidebar(
            array(
                'name'          => __( ' Dentist', 'dento' ),
                'id'            => 'sidebar-8',
                'description'   => __( ' Dentist', 'dento' ),
                'before_title' => '<h2 class="adds-widget counter">',
                'after_title'  => '</h2>',
                'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
                'after_widget'   => '</section>',
                )
            ); 
// //---------------- Footer Widgets -----------------------
            register_sidebar(
                array(
                    'name'          => __( 'Company Whereabout', 'dento' ),
                    'id'            => 'sidebar-9',
                    'description'   => __( 'How to reach Company ', 'dento' ),
                    'before_widget' => '<section id="%1$s" class="widget %2$s footer-contact" style="border:1px;">',
                    'after_widget'  => '</section>',
                    'before_title'  => '<h5 class="adds-widget">',
                    'after_title'   => '</h5>',
                    )
                ); 

            register_sidebar(
                array(
                    'name'          => __( 'Opening Hours', 'dento' ),
                    'id'            => 'sidebar-10',
                    'description'   => __( 'Opening Hours', 'dento' ),
                    'before_title' => '<h2 class="adds-widget widget-title">',
                    'after_title'  => '</h2>',
                    'before_widget'  => '<section id="%1$s" class="widget %2$s single-footer-widget opening-hours" style="border:1px;">',
                    'after_widget'   => '</section>',
                    )
                ); 

            register_sidebar(
                array(
                    'name'          => __( 'Quick Link', 'dento' ),
                    'id'            => 'sidebar-11',
                    'description'   => __( 'Quick Link', 'dento' ),
                    'before_title' => '<h2 class="adds-widget widget-title">',
                    'after_title'  => '</h2>',
                    'before_widget'  => '<section id="%1$s" class="widget %2$s single-footer-widget" style="border:1px;">',
                    'after_widget'   => '</section>',
                    )
                ); 

            // register_sidebar(
            //     array(
            //         'name'          => __( 'Cosmetic Dentistry', 'dento' ),
            //         'id'            => 'sidebar-12',
            //         'description'   => __( 'Cosmetic Dentistry', 'dento' ),
            //         'before_title' => '<h2 class="adds-widget ">',
            //         'after_title'  => '</h2>',
            //         'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
            //         'after_widget'   => '</section>',
            //         )
            //     ); 

            register_sidebar(
                array(
                    'name'          => __( 'Newsletter', 'dento' ),
                    'id'            => 'sidebar-13',
                    'description'   => __( 'Newsletter', 'dento' ),
                    'before_title' => '<h2 class="adds-widget widget-title">',
                    'after_title'  => '</h2>',
                    'before_widget'  => '<section id="%1$s" class="widget %2$s " style="border:1px;">',
                    'after_widget'   => '</section>',
                    )
                ); 

            register_sidebar(
                array(
                    'name'          => __( 'Copyright', 'dento' ),
                    'id'            => 'sidebar-14',
                    'description'   => __( 'Copyright', 'dento' ),
                    'before_title' => '<h2 class="adds-widget widget-title">',
                    'after_title'  => '</h2>',
                    'before_widget'  => '<section id="%1$s" class="widget %2$s copywrite-content" style="border:1px;">',
                    'after_widget'   => '</section>',
                    )
               ); 
    //----------------------- header social sites sidebars--------

    register_sidebar(
        array(
            'name'          => __( 'facebook link', 'dento' ),
            'id'            => 'sidebar-15',
            'description'   => __( 'facebook link', 'dento' ),
            // 'before_title' => '<h2 class="adds-widget counter">',
            // 'after_title'  => '</h2>',
            // 'before_widget'  => '<section id="%1$s" class="widget %2$s" style="border:1px;">',
            // 'after_widget'   => '</section>',
            )
        ); 
    }
    
        add_action( 'widgets_init', 'temp_widgets_init' );


        //_______________Hansel and gretel breadcrumbs____________

        function get_hansel_and_gretel_breadcrumbs()
{
    // Set variables for later use
    $here_text        = __( 'You are currently here!' );
    $home_link        = home_url('/');
    $home_text        = __( 'Home' );
    $link_before      = '<span typeof="v:Breadcrumb">';
    $link_after       = '</span>';
    $link_attr        = ' rel="v:url" property="v:title"';
    $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
    $delimiter        = ' &raquo; ';              // Delimiter between crumbs
    $before           = '<span class="current">'; // Tag before the current crumb
    $after            = '</span>';                // Tag after the current crumb
    $page_addon       = '';                       // Adds the page number if the query is paged
    $breadcrumb_trail = '';
    $category_links   = '';

    /** 
     * Set our own $wp_the_query variable. Do not use the global variable version due to 
     * reliability
     */
    $wp_the_query   = $GLOBALS['wp_the_query'];
    $queried_object = $wp_the_query->get_queried_object();

    // Handle single post requests which includes single pages, posts and attatchments
    if ( is_singular() ) 
    {
        /** 
         * Set our own $post variable. Do not use the global variable version due to 
         * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
         */
        $post_object = sanitize_post( $queried_object );

        // Set variables 
        $title          = apply_filters( 'the_title', $post_object->post_title );
        $parent         = $post_object->post_parent;
        $post_type      = $post_object->post_type;
        $post_id        = $post_object->ID;
        $post_link      = $before . $title . $after;
        $parent_string  = '';
        $post_type_link = '';

        if ( 'post' === $post_type ) 
        {
            // Get the post categories
            $categories = get_the_category( $post_id );
            if ( $categories ) {
                // Lets grab the first category
                $category  = $categories[0];

                $category_links = get_category_parents( $category, true, $delimiter );
                $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
                $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
            }
        }

        if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
        {
            $post_type_object = get_post_type_object( $post_type );
            $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

            $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
        }

        // Get post parents if $parent !== 0
        if ( 0 !== $parent ) 
        {
            $parent_links = [];
            while ( $parent ) {
                $post_parent = get_post( $parent );

                $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

                $parent = $post_parent->post_parent;
            }

            $parent_links = array_reverse( $parent_links );

            $parent_string = implode( $delimiter, $parent_links );
        }

        // Lets build the breadcrumb trail
        if ( $parent_string ) {
            $breadcrumb_trail = $parent_string . $delimiter . $post_link;
        } else {
            $breadcrumb_trail = $post_link;
        }

        if ( $post_type_link )
            $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

        if ( $category_links )
            $breadcrumb_trail = $category_links . $breadcrumb_trail;
    }

    // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
    if( is_archive() )
    {
        if (    is_category()
             || is_tag()
             || is_tax()
        ) {
            // Set the variables for this section
            $term_object        = get_term( $queried_object );
            $taxonomy           = $term_object->taxonomy;
            $term_id            = $term_object->term_id;
            $term_name          = $term_object->name;
            $term_parent        = $term_object->parent;
            $taxonomy_object    = get_taxonomy( $taxonomy );
            $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
            $parent_term_string = '';

            if ( 0 !== $term_parent )
            {
                // Get all the current term ancestors
                $parent_term_links = [];
                while ( $term_parent ) {
                    $term = get_term( $term_parent, $taxonomy );

                    $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

                    $term_parent = $term->parent;
                }

                $parent_term_links  = array_reverse( $parent_term_links );
                $parent_term_string = implode( $delimiter, $parent_term_links );
            }

            if ( $parent_term_string ) {
                $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
            } else {
                $breadcrumb_trail = $current_term_link;
            }

        } elseif ( is_author() ) {

            $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

        } elseif ( is_date() ) {
            // Set default variables
            $year     = $wp_the_query->query_vars['year'];
            $monthnum = $wp_the_query->query_vars['monthnum'];
            $day      = $wp_the_query->query_vars['day'];

            // Get the month name if $monthnum has a value
            if ( $monthnum ) {
                $date_time  = DateTime::createFromFormat( '!m', $monthnum );
                $month_name = $date_time->format( 'F' );
            }

            if ( is_year() ) {

                $breadcrumb_trail = $before . $year . $after;

            } elseif( is_month() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

                $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

            } elseif( is_day() ) {

                $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
                $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

                $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
            }

        } elseif ( is_post_type_archive() ) {

            $post_type        = $wp_the_query->query_vars['post_type'];
            $post_type_object = get_post_type_object( $post_type );

            $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

        }
    }   

    // Handle the search page
    if ( is_search() ) {
        $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
    }

    // Handle 404's
    if ( is_404() ) {
        $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
    }

    // Handle paged pages
    if ( is_paged() ) {
        $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
        $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
    }

    $breadcrumb_output_link  = '';
    $breadcrumb_output_link .= '<div class="breadcrumb">';
    if (    is_home()
         || is_front_page()
    ) {
        // Do not show breadcrumbs on page one of home and frontpage
        if ( is_paged() ) {
            $breadcrumb_output_link .= $here_text . $delimiter;
            $breadcrumb_output_link .= '<a href="' . $home_link . '">' . $home_text . '</a>';
            $breadcrumb_output_link .= $page_addon;
        }
    } else {
        $breadcrumb_output_link .= $here_text . $delimiter;
        $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title">' . $home_text . '</a>';
        $breadcrumb_output_link .= $delimiter;
        $breadcrumb_output_link .= $breadcrumb_trail;
        $breadcrumb_output_link .= $page_addon;
    }
    $breadcrumb_output_link .= '</div><!-- .breadcrumbs -->';

    return $breadcrumb_output_link;
}

// add_filter('pre_get_posts', 'limit_doctor_posts');
// function limit_doctor_posts($query){
//     get_post_type();
//     if('doctor' == get_post_type()) {
//     if ($query->is_doctor) {
//         $query->set('posts_per_page', 2);
//     }
//     return $query;
// };
// };
//___________posts/cpt per section _____
$query = new WP_Query($args);
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('post_type' => array( 'doctor',),
              'posts_per_page' => 2,
              'paged'=>$paged,
               'tax_query' => array(
                                array(
                                  'taxonomy' => 'doctor',
                                  'field' => 'doctor',
                                  'terms' => ''
                                    )
                           )
                                );



//_______________search sidebar logic_____________
function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
      if ($query->is_search) {
        $query->set('post_type', 'post');
      }
    }
  }
  
  add_action('pre_get_posts','search_filter');

// function SearchFilter($query) {
//     if ($query->is_search) {
//         $query->set('post_type', 'post');
//     }
//     return $query;
// }
// add_filter('pre_get_posts','SearchFilter');

 ?>
