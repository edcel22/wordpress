<?php 


function awesome_scripts_enqueue(){

	wp_enqueue_style( 'customcss', get_template_directory_uri().'/css/awesome.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri().'/js/awesome.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts','awesome_scripts_enqueue' );