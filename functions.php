<?php

function resources(){
	wp_enqueue_style('style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','resources');

register_nav_menus(array(
	'primary'=>__('Primary Menu'),
	'footer' =>__('Footer Menu'),
));

function wp_nav_menu_no_ul()
{
    $options = array(
        'echo' => false,
        'container' => false,
        'theme_location' => 'primary',
        'fallback_cb'=> 'default_page_menu'
    );

    $menu = wp_nav_menu($options);
    echo preg_replace(array(
        '#^<ul[^>]*>#',
        '#</ul>$#'
    ), '', $menu);

}


function default_page_menu() {
   wp_list_pages('title_li=');
} 

?>