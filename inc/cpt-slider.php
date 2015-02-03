<?php
/**
 * Post type : Artigos
 */
function slider_init() {
  $labels = array(
    'name'               => 'Destaques',
    'singular_name'      => 'Destaque',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo Destaque',
    'edit_item'          => 'Editar Destaque',
    'new_item'           => 'Novo Destaque',
    'all_items'          => 'Todos os Destaques',
    'view_item'          => 'Ver Destaque',
    'search_items'       => 'Buscar Destaques',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Destaques'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    //'rewrite'            => array( 'slug' => 'destaques' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 5,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_init' );

?>