

<?php

    if(! isset($content_width)){
        $content_width = 660;
    }


    function themwp_setup(){
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support( 'woocommerce' );
        add_theme_support( "custom-background", $args );
        require_once get_template_directory(). '/util/class-wp-bootstrap-navwalker.php';
        register_nav_menus( array(
            'primary' => __('Main header menu', 'velvet'),
            'footer' => __('Footer menu', 'velvet'),
        ));
    }

    add_action('after_setup_theme', 'themwp_setup');


    function  erza_scripts(){

        wp_enqueue_style('bootsrtap-core', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style('custom', get_template_directory_uri().'/style.css');

        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), null, true);

        if( is_singular() && comments_open() && get_option('thread_comments')){
            wp_enqueue_script('comment-reply');
        }
    }
    add_action('wp_enqueue_scripts', 'erza_scripts');



    function new_excerpt_text(){
        return '...';
    }

    add_filter('excerpt_more', 'new_excerpt_text');



    function featureText(){
        if( is_front_page()){
            _e("FULLY RESPONSIVE <br>
             PREMIUM COSMETICS STORE THEME <br>
             FOR WORDPRESS", 'velvet');
        }elseif(is_home() || is_single()){
            _e("ERZA OFFICIAL BLOG", 'velvet');
        }elseif(is_search()){
            _e("ERZA OFFICIAL BLOG", 'velvet');
            _e("<br>", 'velvet');
            printf(__('Search results for: %s', 'velvet'), get_search_query());
        }elseif( is_404()){
            _e("Woops, we're a little lost <br>
            <em> Let's get back on track</em>", 'velvet');
        }
        else{
            _e("FULLY RESPONSIVE <br> PREMIUM COSMETICS STORE THEME <br> FOR WORDPRESS", 'velvet');
        }
    }



    function arphabet_widgets_init() {

        register_sidebar( array(
            'name'          => 'Home right sidebar',
            'id'            => 'home_right_1',
            'before_widget' => '<div class="py-3">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="font-italic">',
            'after_title'   => '</h4>',
        ) );
    
    }
    add_action( 'widgets_init', 'arphabet_widgets_init' );


    add_editor_style($stylesheet = 'editor-style.css' );



    function add_footer_menu_class($classes, $item, $args){
        if($args->theme_location == 'footer'){
            $classes[] = 'list-group-item';
        }
        return $classes;
    }

    add_filter('nav_menu_css_class','add_footer_menu_class', 10, 3);


    $headerimage = array(
        'default-image'          => get_template_directory_uri() . '/assets/images/back6.jpg',
        'width'                  => 1946,
        'height'                 => 200,
        'flex-height'            => true,
        'flex-width'             => true,
        'uploads'                => true,
        'random-default'         => false,
        'header-text'            => true,
    );

    add_theme_support('custom-header', $headerimage);

    register_default_headers( array(
        'default-image' => array(
            'url'           => get_template_directory_uri() . '/assets/images/lake.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/lake.jpg',
            'description'   => __( 'Lake 1', 'velvet' )
        ),

    ) );



?>