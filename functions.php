

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



    
    function tranquil_scripts(){

        // wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
        // wp_enqueue_style('stylesheet');

        wp_enqueue_style('bootsrtap-core', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style('custom', get_template_directory_uri().'/style.css');

        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), null, true);

        if( is_singular() && comments_open() && get_option('thread_comments')){
            wp_enqueue_script('comment-reply');
        }
    }

    add_action('wp_enqueue_scripts', 'tranquil_scripts');

    function new_excerpt_text(){
        return '...';
    }

    add_filter('excerpt_more', 'new_excerpt_text');

    function featureText(){
        if( is_front_page()){
            esc_html_e("FULLY RESPONSIVE <br> PREMIUM COSMETICS STORE THEME <br> FOR WORDPRESS", 'velvet');
        }elseif(is_home() || is_single()){
            _e("VELVET OFFICIAL BLOG", 'velvet');
        }elseif(is_search()){
            _e("VELVET OFFICIAL BLOG", 'velvet');
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

    function add_footer_menu_class($classes, $item, $args){
        if($args->theme_location == 'footer'){
            $classes[] = 'list-group-item';
        }
        return $classes;
    }

    add_filter('nav_menu_css_class','add_footer_menu_class', 10, 3);


    add_editor_style( array|string $stylesheet = 'editor-style.css' );

    $args = array(
        'width' => 2600,
        'height' => 650,
        'default-image' => get_template_directory_uri() . '/assets/images/lake.jpg',
        'uploads' => true
    );

    add_theme_support('custom-header', $args);

    register_default_headers(array(
        'lake1' => array(
            'url' => get_template_directory_uri() . '/assets/images/lake.jpg',
            'thumbnail_url' => get_template_directory_uri() . '/assets/images/lake.jpg', 
            'description' => __('Lake 1', 'velvet') ),
            'lake2' => array(
                'url' => get_template_directory_uri() . '/assets/images/lake2.jpg',
                'thumbnail_url' => get_template_directory_uri() . '/assets/images/lake2.jpg', 
                'description' => __('Lake 2', 'velvet') ),
            ));


?>