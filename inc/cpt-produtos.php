<?php
/**
 * Post type : Artigos
 */
function produtos_init() {
  $labels = array(
    'name'               => 'Produtos',
    'singular_name'      => 'Produto',
    'add_new'            => 'Adicionar Novo',
    'add_new_item'       => 'Adicionar novo Produto',
    'edit_item'          => 'Editar Produto',
    'new_item'           => 'Novo Produto',
    'all_items'          => 'Todos os Produtos',
    'view_item'          => 'Ver Produto',
    'search_items'       => 'Buscar Produtos',
    'not_found'          => 'N&atilde;o encontrado',
    'not_found_in_trash' => 'N&atilde;o encontrado',
    'parent_item_colon'  => '',
    'menu_name'          => 'Produtos'
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'taxonomies'        => array('post_tag'),
    'exclude_from_search' => false,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'produto' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => true,
    'menu_position'      => 4,
    'supports'           => array( 'title', 'thumbnail' )
  );

  register_post_type( 'produto', $args );

  $labels = array(
    'name'              => __( 'Categorias'),
    'singular_name'     => __( 'Categoria'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usadas' ),
    'all_items'         => __( 'Todas as categorias' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Adicionar nova' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar nova categoria' ),
    'new_item_name'     => __( 'Nova' )
    );

  register_taxonomy("produtos", array("produto"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Categoria", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar nova categoria",
    "new_item_name"     => "Nova categoria",
  ));
}
add_action( 'init', 'produtos_init' );

?>