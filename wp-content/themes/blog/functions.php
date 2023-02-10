<?php 

//theme support
function adv_theme_support(){
    add_theme_support('post-thumbnails');
    //nav menus
    register_nav_menus(array(
        "primary" =>  __('Primary'),
        'footer' => __('Footer'),
    ));
}
add_action('after_setup_theme', adv_theme_support());

/* functions.php Add bootstrap support to the Wordpress theme*/
function add_scripts_and_styles(){
  //register style, icons and scripts

    wp_register_style('bootstrap_style',get_template_directory_uri().  "/css/main.min.css");
  
    wp_register_style('bootstrap_icons',get_template_directory_uri().  "/node_modules/bootstrap-icons/font/bootstrap-icons.css");
   
    wp_register_script('bootstrap_js', get_template_directory_uri().   "/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js", array(), '0.1', true);

    // enqueue styles 
    wp_enqueue_style('bootstrap_style');
    wp_enqueue_style('bootstrap_icons');
    wp_enqueue_script('bootstrap_js');
}
add_action('wp_enqueue_scripts', 'add_scripts_and_styles');

//excerpt length
function set_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'set_excerpt_length');

//widgets
//widgets locations
function init_widgets($id){
    register_sidebar(array(
        'name' => 'Card One',
        'id' => 'card1',
         'before_widget' => '<div class ="side-widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3>',
         'after_title' => '</h3>'
    ));
     register_sidebar(array(
        'name' => 'Card Two',
        'id' => 'card2',
         'before_widget' => '<div class ="side-widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3">',
         'after_title' => '</h3>'
    ));
    register_sidebar(array(
        'name' => 'Card Three',
        'id' => 'card3',
         'before_widget' => '<div class ="side-widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3">',
         'after_title' => '</h3>'
    ));
}
add_action('widgets_init', 'init_widgets');

?>