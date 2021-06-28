<?php 
/**
 * Author: Ryszard Jaklewicz
 * Ryszard Jaklewicz functions
 * Plik zawiera funkcjonalność motywu
 */

require get_template_directory() . '/inc/template-tags.php';
 
// Handle SVG icons.
require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

function ryszard_jaklewicz_setup(){
  // Custom logo
  add_theme_support( 'custom-logo', array(
    'height'      => 50,
    'width'       => 67,
    'flex-width'  => true,
    'flex-height' => false,
  ) );
  
  // Custom header
  //Okreslamy ze np plikiem graficznym mozliwym w naglowku motywu bedzie:
  // includes/img/grafika_glowna_ryszard_jaklewicz.jpg'
  add_theme_support( 'custom-header', array(
		'default-image'          => get_template_directory_uri() . '/includes/img/grafika_glowna_ryszard_jaklewicz.jpg',
		'header-text'            => false,
		'width'                  => 2000,
		'height'                 => 280,
    'flex-height'            => true,
  ) );
  
  // Register default header
  register_default_headers( array(
		'rain' => array(
			'url'           => '%s/includes/img/grafika_glowna_ryszard_jaklewicz.jpg',
      'thumbnail_url' => '%s/includes/img/grafika_glowna_ryszard_jaklewicz.jpg',
      'description'   => 'Rain',
    ),
    'face' => array(
		  'url'           => '%s/includes/img/default-header-face.jpg',
      'thumbnail_url' => '%s/includes/img/default-header-face.jpg',
      'description'   => 'Face',
		),
  ) );

  // Register nav menu
  //Ustawiamy jakie menu moze zawierac szablon RyszardJaklewicz
  register_nav_menus( array(
    'main-menu' => 'Primary',
    'footer-menu' => 'Secondary'
  ) );
  
}
add_action('after_setup_theme', 'ryszard_jaklewicz_setup');

/**
 * Enqueue scripts and styles.
 */
function ryszardjaklewicz_scripts() {
  // Fonts
  wp_enqueue_style( 'ryszardjaklewicz-font', 'https://fonts.googleapis.com/css?family=Open+Sans:400%7CPoppins:600,700' );
  // CSS
  wp_enqueue_style( 'ryszardjaklewicz-style', get_stylesheet_uri() );
 
  // JS
	wp_enqueue_script( 'ryszardjaklewicz-script', get_template_directory_uri() . '/js/ryszard_jaklewicz.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'ryszardjaklewicz_scripts' );
