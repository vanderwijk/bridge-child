<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);

// Load translation files from your child theme instead of the parent theme
function verometal_child_theme_locale() {
	load_child_theme_textdomain( 'verometal', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'verometal_child_theme_locale' );

function verometal_strings() {
	__('coating','verometal');
}