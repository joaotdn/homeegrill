<?php
/**
 * Post type : Lojas
 */
function pontos_init() {
  $labels = array(
    'name'               => 'Pontos de venda',
    'singular_name'      => 'Ponto de venda',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo Ponto de venda',
    'edit_item'          => 'Editar Ponto de venda',
    'new_item'           => 'Novo Ponto de venda',
    'all_items'          => 'Todos os Pontos de venda',
    'view_item'          => 'Ver Ponto de venda',
    'search_items'       => 'Buscar Pontos de venda',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Pontos de venda'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => false,
    'exclude_from_search' => true,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    //'rewrite'            => array( 'slug' => 'pontos' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'pontos', $args );
}
add_action( 'init', 'pontos_init' );

?>