

<?php

    if(! isset($content_width)){
        $content_width = 660;
    }


    function themwp_setup(){
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        require_once get_template_directory(). '/util/class-wp-bootstrap-navwalker.php';
        register_nav_menus( array(
            'primary' => __('Main header menu', 'erza'),
        ));
    }

    add_action('after_setup_theme', 'themwp_setup');



    
    function tranquil_scripts(){

        // wp_register_style('stylesheet', get_template_directory_uri(). '/style.css', '', 1, 'all');
        // wp_enqueue_style('stylesheet');

        wp_enqueue_style('bootsrtap-core', get_template_directory_uri().'/assets/css/bootstrap.min.css');
        wp_enqueue_style('custom', get_template_directory_uri().'/style.css');

        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), null, true);
    }

    add_action('wp_enqueue_scripts', 'tranquil_scripts');

    function new_excerpt_text(){
        return '...';
    }

    add_filter('excerpt_more', 'new_excerpt_text');

?>