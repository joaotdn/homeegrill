<?php
/**
 * Requisita produtos para o carrossel a partir do slug do termo 
 * requisitado
 *
 * @package WordPress
 * @subpackage home_grill
 * @since home & GRILL 1.0
 */

add_action( 'wp_ajax_nopriv_req_products_list', 'req_products_list' );
add_action( 'wp_ajax_req_products_list', 'req_products_list' );

function req_products_list() {
	
}

?>