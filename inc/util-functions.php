<?php

  //Retorna url do thumbnail
  function getThumbUrl($size) {
    global $post;
    if(!$size) {
         $size = 'full';
    }
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), $size );
    echo $thumb[0];
  }

  //Nome da 1a categoria de uma postagem em um loop
  function get_first_category_name() {
      $category = get_the_category(); 
      if($category[0]){
          echo $category[0]->cat_name;
      }
  }

  //Link da 1a categoria de uma postagem em um loop
  function get_first_category_link() {
      $category = get_the_category(); 
      if($category[0]){
          echo get_category_link( $category[0]->term_id );
      }
  }

  //Pegar url da categoria pelo nome
  function echo_url_category($cat_name) {
      $category_id = get_cat_ID( $cat_name );
      $category_link = get_category_link( $category_id );
      echo esc_url( $category_link );
  }

  //Retorna a primeira tag de uma postagem em um loop 
  function get_first_tag() {
      $posttags = get_the_tags();
      $count=0;
      if ($posttags) {
          foreach($posttags as $tag) {
              $count++;
              if (1 == $count) {
                  echo $tag->name . ' ';
              }
          }
      } else {
          get_first_category_name();
      }
  }

  //Mensagem de erros
  function doer_of_stuff() {
    return new WP_Error( 'broke', __( "Houve algum erro interno. Tente novamente.", "home_e_grill" ) );
  }
?>