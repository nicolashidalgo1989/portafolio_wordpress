<?php

/* include scripts y css */

function portafolio_script_enqueue () {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all'); 
    wp_enqueue_script('app', get_template_directory_uri() . '/assets/js/app.js', array(), '1.0.0', true);
    wp_enqueue_script('fontawesome', get_template_directory_uri() . '/assets/js/fontawesome-all.min.js', array(), '1.0.0', true);
    //wp_enqueue_script('vue', get_template_directory_uri() . '/assets/js/vue.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'portafolio_script_enqueue');

/* Activar menus */

function portafolio_theme_setup(){
    add_theme_support('menus'); 
    register_nav_menu('primary', 'primary header navigation');
    register_nav_menu('secondary', 'footer navigation');
}

add_action('init', 'portafolio_theme_setup');

/* theme supports */

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');

add_theme_support('post-formats', array('aside','image','video'));

/* sidebar */

function portafolio_widget_setup() {

    register_sidebar(
        array(
            'name'          =>  'Sidebar',
            'id'            =>  'sidebar-1',
            'class'         =>  'custom',
            'description'   =>  'Standard sidebar',
            'before_widget' =>  '<aside id="%1&s" class="widget %2$s">',
            'after_widget'  =>  '</aside>',
            'before_title'  =>  '<h1 class="widget-title">',
            'after_title'   =>  '</h1>',  
        )
    ); 

}

add_action('widgets_init','portafolio_widget_setup');