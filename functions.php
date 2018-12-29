<?php


function jupiter_files(){
	wp_enqueue_script('boostrap_js', get_theme_file_uri('/js/bootstrap.js'), NULL, '1.0', true);
	wp_enqueue_style('font_google', '//fonts.googleapis.com/css?family=Playfair+Display:700,900');

	wp_enqueue_style('jupiter_main_styles', get_stylesheet_uri());
}


add_action('wp_enqueue_scripts','jupiter_files');


function jupiter_features(){

	add_theme_support('title-tag');
}
add_action('after_setup_theme','jupiter_features');