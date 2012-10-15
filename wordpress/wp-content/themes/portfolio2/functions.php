<?php

function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}

add_theme_support( 'post-thumbnails' ); 


add_action( 'init', 'register_my_menus' );
add_action( 'init', 'create_post_type' );
add_action( 'init', 'add_taxonomies' );

function add_taxonomies(){
	register_taxonomy("techniques", "travaux", array(
					'label'  => "Techniques utilisées", 
					"hierarchical" => true,
					"query_var" => true,
					"rewrite" => true
					)
				);
	
}



if ( ! function_exists( 'create_post_type' ) ) :

	function create_post_type() {
		register_post_type( 'travaux', 
							array(
									'labels' => array(
														'name' => __( 'Travaux' ),
														'singular_name' => __( 'Travail' ),
													),
									'supports' => array(
														'title', 'editor', 'post-formats', 'thumbnail'
													),
									'public' => true,
									'has_archive' => true
							));
		register_post_type( 'News', 
							array(
									'labels' => array(
														'name' => __( 'News' ),
														'singular_name' => __( 'News' ),
													),
									'supports' => array(
														'title', 'editor', 'post-formats', 'thumbnail'
													),
									'public' => true,
									'has_archive' => true
							));
		register_post_type( 'Sociaux', 
							array(
									'labels' => array(
														'name' => __( 'Sociaux' ),
														'singular_name' => __( 'Social' ),
													),
									'supports' => array(
														'title', 'editor', 'post-formats', 'thumbnail', 'custom-fields'
													),
									'public' => true,
									'has_archive' => true
							));
		register_post_type( 'Books', 
							array(
									'labels' => array(
														'name' => __( 'Books' ),
														'singular_name' => __( 'Book' ),
													),
									'supports' => array(
														'title', 'editor', 'post-formats', 'thumbnail', 'custom-fields'
													),
									'public' => true,
									'has_archive' => true
							));
	}

endif;
