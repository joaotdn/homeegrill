<?php
/**
 * Requisita posts para o carrossel a partir do slug do termo 
 * requisitado
 *
 * @package WordPress
 * @subpackage home_grill
 * @since home & GRILL 1.0
 */

add_action( 'wp_ajax_nopriv_req_posts_list', 'req_posts_list' );
add_action( 'wp_ajax_req_posts_list', 'req_posts_list' );

function req_posts_list() {
  $term = $_GET['term'];
	$term_id = $_GET['term_id'];

  if ($term) {
    $args = array( 'posts_per_page' => 6, 'taxonomy' => 'category', 'term' => $term );
  } else {
    $args = array( 'posts_per_page' => 6, 'taxonomy' => 'category' );
  }
  
  $posts = get_posts( $args );
  foreach ($posts as $post): setup_postdata( $post );
    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );

    $category = get_the_category($post->ID);
  ?>
    <div class="item">
      <figure class="small-12 left rel">
        <a href="<?php echo get_category_link( $category[0]->term_id ); ?>" title="<?php echo $category[0]->name; ?>" class="d-block abs bg-white block-url text-low font-bold get-cat"><?php echo $category[0]->name; ?></a>
        <div class="small-12 left container-thumb">
          <a href="<?php echo get_permalink($post->ID); ?>" class="blog-thumb d-block small-12 left bg-cover" title="<?php echo $post->post_title; ?>" data-thumb="<?php echo $thumb[0]; ?>"></a>
        </div>
      </figure>

      <article class="post-title fix small-12 left block-url bg-white d-table">
        <h2 class="font-large no-margin d-table-cell">
          <a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>"><?php echo $post->post_title; ?></a>
        </h2>
      </article>
              
      <!-- autor -->
      <?php
        $terms = get_the_terms($post->ID, 'colunista');
        $i = 0;
        foreach ($terms as $term) {
          $i++;
          if(1 == $i) {
            $avatar = get_field('colunista_avatar',$term);
            $name = $term->name;
            $profissao = get_field('colunista_profissao',$term);
            $archive = get_term_link( $term, 'colunista' );
          }
        }
      ?>
      <a href="<?php echo esc_html($archive); ?>" class="d-block small-12 left author-link">
        <div class="small-4 left author-avatar bg-cover" data-thumb="<?php echo $avatar; ?>"></div>

        <div class="author-name small-8 large-6 left d-table">
          <div class="small-12 d-table-cell">
            <h3 class="yellow font-large no-margin"><?php echo $name; ?></h3>
            <p class="no-margin white font-small"><?php echo $profissao; ?></p>
          </div>
        </div>

        <div class="small-2 left show-for-large-up full-height">
          <span class="small-12 d-table left go-post">
            <span class="icon-chevron-circle-right d-table-cell text-center"></span>
          </span>
        </div>
      </a>

    </div>
  <?php
  endforeach;

	exit();
}

?>