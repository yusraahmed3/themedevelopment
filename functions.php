<?php  /*

function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript(){
    wp_register_script('custom', get_template_directory_uri(). '/assets/js/app.js', 'jquery', 1, true);
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'load_javascript');

add_theme_support('menus');

function rt_custom_menu(){
    register_nav_menus(
        array(
            'top-nav' => __('Primary Menu'),
            'footer-nav' => __('Footer Menu')
        )
    );
}

add_action('init', 'rt_custom_menu');

function rt_add_sidebar(){
    register_sidebar(
        array(
            'name' => __('Sidebar one', 'erza'),
            'id' => 'sidebar-1',
        )
        );

        register_sidebar(
            array(
                'name' => __('Sidebar two', 'erza'),
                'id' => 'sidebar-2',
            )
            );
}

add_action('widgets_init', 'rt_add_sidebar');

function rt_load_css(){
    wp_register_style('style1', get_template_directory_uri(). '/assets/css/style1.css', array(), false, 'all');
    wp_enqueue_style('style1');
    //print(get_template_directory_uri());
}

add_action('wp_enqueue_scripts','rt_load_css');

function rt_register_navwalker(){
    require_once get_template_directory(). '/util/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'rt_register_navwalker');

*/?>

<?php

    if(! isset($content_width)){
        $content_width = 660;
    }

    function themwp_setup(){
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
    }

    add_action('after_setup_theme', 'themwp_setup');

?>