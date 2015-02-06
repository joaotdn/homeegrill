<?php
/**
 * Post type : Diferenciais
 */
function diferenciais_init() {
  $labels = array(
    'name'               => 'Diferenciais',
    'singular_name'      => 'Diferencial',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo Diferencial',
    'edit_item'          => 'Editar Diferencial',
    'new_item'           => 'Novo Diferencial',
    'all_items'          => 'Todos os Diferenciais',
    'view_item'          => 'Ver Diferencial',
    'search_items'       => 'Buscar Diferenciais',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Diferenciais'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'exclude_from_search' => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    //'rewrite'            => array( 'slug' => 'di' ),
    //'menu_icon'           => get_stylesheet_directory_uri() . '/images/works.png',
    'capability_type'    => 'post',
    'has_archive'        => false,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'thumbnail', 'excerpt' )
  );

  register_post_type( 'diferencial', $args );
}
add_action( 'init', 'diferenciais_init' );

?>