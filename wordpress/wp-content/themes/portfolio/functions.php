<?php

add_action( 'widgets_init', 'portfolio_sidebars' );
add_action( 'after_setup_theme', 'portfolio_setup' );
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

if( !function_exists('portfolio_sidebars') ) :

	function portfolio_sidebars() {
	
		register_sidebar( array(
			'name' => __( 'primary' ),
			'id' => 'primary',
			'description' => __( 'Première sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	
		register_sidebar( array(
			'name' => __( 'secondary' ),
			'id' => 'secondary',
			'description' => __( 'Première sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => "</div>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
	}

endif;




if ( ! function_exists( 'portfolio_setup' ) ):

	function portfolio_setup() {
		add_theme_support("post-thumbnails");
		add_theme_support("post-formats", array('aside', 'link', 'gallery', 'status', 'quote', 'image'));
		add_theme_support('automatic-feed-links');
		
		register_nav_menu('header-menu', __('Header Menu', 'portfolio'));
		
		/* Crée une version supplémentaire (miniature) des images qu'on upload */
		if( function_exists('add_image_size') )
		{
			add_image_size('folio-work', 640, 480, false); // not cropped)
		}
	}

endif;


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
							) );
	}

endif;

