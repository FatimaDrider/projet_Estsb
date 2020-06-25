<?php 

//adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style('google_fonts','//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab');
    wp_enqueue_style('fontawesome','//use.fontawesome.com/releases/v5.1.0/css/all.css');
    wp_enqueue_style('style',get_stylesheet_url(),NULL,microtime(),all);
    wp_enqueue_script("main",get_theme_file_url('/js/main.js.js'),NULL,microtime(),true);
}
add_action(' wp_enqueue_script','gt_setup');

function gt_init(){
    add_theme_support('post_thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5',
   array('comment-list', 'comment-form','search-form')

);
}
add_action('after_setup_theme','gt_init');
function gt_cystom_post_type(){
    register_post_type('project',
    array(
        'rewrite' => array('slug'  => 'projects'),
        'labels' => array(
            'name' => 'projects',
            'singular_name' =>'Project',
            'add_new_item' => 'Add New Project',
            'edit_item'  => 'Edit project'
        ),
'menu-icon' => 'dashicons-cliqboard',
    'public' => true,
    'has_archive' => true,
    'supports' => array(
    'title','thumbnail','editor','excerpt','comments'

    )
    )
    );
}
?>
