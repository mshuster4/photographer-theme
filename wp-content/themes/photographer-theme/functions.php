<?php
function My_Styles_enqueue() 
{
    wp_register_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css', false, null, 'all');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('core', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'My_Styles_enqueue');

function My_Scripts_enqueue()
{
    wp_register_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), null, true);
    wp_register_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper-js');
    wp_enqueue_script('bootstrap-js');
}
add_action('wp_enqueue_scripts', 'My_Scripts_enqueue');