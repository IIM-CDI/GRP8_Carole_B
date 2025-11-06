<?php 
function caroleb_ressources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'caroleb_ressources');
