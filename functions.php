<?php
/**
 * Funções e definições para o site home & GRILL
 *
 * @package WordPress
 * @subpackage home_grill
 * @since home & GRILL 1.0
 */

//Versão do tema
define('HG_VERSION', '1.2.4');

if ( ! function_exists( 'ac_setup' ) ) :
	function hg_setup() {
		/**
		 * Suporte a miniaturas e miniaturas personalidas para o tema
		 * 
		 * @since home & GRILL 1.0
		 */
		add_theme_support( 'post-thumbnails' );

		if ( function_exists( 'add_image_size' ) ) { 
		  	add_image_size( 'destaques-thumb', 587, 380, true ); //miniatura para o slide de destaques
		}
		
		// Menus personalizados
		register_nav_menus( array(
			'main_menu' => __( 'Menu principal', 'home_e_grill' ),
		) );
	}
endif;

add_action('after_setup_theme','hg_setup');

/*
 * Incluir scripts essenciais
 */
function hg_load_scripts() {
	
	/*
		modernizr
	 */
	wp_enqueue_script( 
		'modernizr', 
		'//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', 
		array(), 
		HG_VERSION 
	);

	/*
		jQuery
	 */
	wp_enqueue_script( 
		'ac-jquery', 
		'//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js', 
		array(), 
		HG_VERSION 
	);

	/*
		Scripts essenciais minificados em
		um arquivo unico e essenciais para 
		o funcionamento do lado cliente
	 */
	wp_enqueue_script( 
		'scripts', 
		get_stylesheet_directory_uri() . '/scripts.js', 
		array(), 
		HG_VERSION,
		true 
	);
	
}
add_action( 'wp_footer', 'hg_load_scripts' );

/*
 * Incluir folha de estilo para o tema
 */
function hg_load_styles() {

	wp_enqueue_style( 
		'aberto_concursos', 
		get_stylesheet_directory_uri() . '/style.css', 
		array(), 
		HG_VERSION, 
		'screen' 
	);

}
add_action( 'wp_enqueue_scripts', 'hg_load_styles' );


/**
 * Implementa opções para o tema
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/theme-options.php';
?>