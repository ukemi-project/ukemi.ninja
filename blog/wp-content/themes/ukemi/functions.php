<?php
/* enqueue styles and scripts */
function jpen_enqueue_assets() {
  
  /* theme's primary style.css file */
  wp_enqueue_style( 'main' , get_stylesheet_uri() );

    /* template's css file */
  wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css' );
  wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts-icons.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_style( 'helper', get_template_directory_uri() . '/css/helper.css');

  /* boostrap resources from theme files */
  wp_enqueue_script( 'jquery' , get_template_directory_uri() . '/js/jquery.min.js' , array( 'jquery' ) , false , true );
  wp_enqueue_script( 'plugins' , get_template_directory_uri() . '/js/plugins.js' , array( 'jquery' ) , false , true );
  wp_enqueue_script( 'app' , get_template_directory_uri() . '/js/app.js' , array( 'jquery' ) , false , true );
}
add_action( 'wp_enqueue_scripts' , 'jpen_enqueue_assets' );

function add_widget_support() {
  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '<section id="%1$s" class="widget %2$s mb-40 blog-widget">',
    'after_widget'  => '</section>',
		'before_title'  => '<h6 class="text-black text-uppercase fw-7">',
		'after_title'   => '</h6> <hr>',
  ));
}

add_filter( 'widget_tag_cloud_args', 'smack_widget_tag_cloud_args' );
function smack_widget_tag_cloud_args( $args ) {
	$args['largest'] = 170;
	$args['smallest'] = 90;
	$args['unit'] = '%';
  return $args;
}

add_action( 'widgets_init', 'add_widget_support' );

function wpdocs_custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

add_theme_support( 'post-thumbnails' );

?>