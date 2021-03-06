<?php
/**
 * Post type : Lojas
 */
function lojas_init() {
  $labels = array(
    'name'               => 'Lojas',
    'singular_name'      => 'Loja',
    'add_new'            => 'Adicionar Nova',
    'add_new_item'       => 'Adicionar nova Loja',
    'edit_item'          => 'Editar Loja',
    'new_item'           => 'Nova Loja',
    'all_items'          => 'Todas as Lojas',
    'view_item'          => 'Ver Loja',
    'search_items'       => 'Buscar Lojas',
    'not_found'          => 'N&atilde;o encontrada',
    'not_found_in_trash' => 'N&atilde;o encontrada',
    'parent_item_colon'  => '',
    'menu_name'          => 'Lojas'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => false,
    'exclude_from_search' => true,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'lojas' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'lojas', $args );
}
add_action( 'init', 'lojas_init' );

?>