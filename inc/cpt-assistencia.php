<?php
/**
 * Post type : Assistência
 */
function assistencia_init() {
  $labels = array(
    'name'               => 'Assistência',
    'singular_name'      => 'Assistência',
    'add_new'            => 'Adicionar Nova',
    'add_new_item'       => 'Adicionar nova Assistência',
    'edit_item'          => 'Editar Assistência',
    'new_item'           => 'Nova Assistência',
    'all_items'          => 'Todas as Assistências',
    'view_item'          => 'Ver Assistência',
    'search_items'       => 'Buscar Assistência',
    'not_found'          => 'N&atilde;o encontrada',
    'not_found_in_trash' => 'N&atilde;o encontrada',
    'parent_item_colon'  => '',
    'menu_name'          => 'Assistência'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => false,
    'exclude_from_search' => true,
    'publicly_queryable' => false,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'assistencia' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 4,
    'supports'           => array( 'title' )
  );

  register_post_type( 'assistencia', $args );
}
add_action( 'init', 'assistencia_init' );

?>