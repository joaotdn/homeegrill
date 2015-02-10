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
	$_post_type = $_GET['thistype'];
	$_term = $_GET['thisterm'];
	
	if($_term) {

		$args = array( 'posts_per_page' => 6, 'post_type' => 'produto', 'taxonomy' => 'produtos', 'term' => $_term );
	
  } else {
	
  	$args = array( 'posts_per_page' => 6, 'post_type' => 'produto', 'taxonomy' => 'produtos', 'orderby' => 'rand', 'term' => $_post_type );
	
  }

    $produtos_posts = get_posts( $args );

    foreach ($produtos_posts as $post): setup_postdata( $post );
    	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
    	?>
			<div class="item rel">
              <figure class="small-12 left rel showroom-thumb">
                <a href="<?php echo get_permalink($post->ID); ?>" class="d-block small-12 left text-center" title="<?php echo $post->post_title; ?>">
                  <img src="<?php echo $thumb[0]; ?>" alt="<?php echo $post->post_title; ?>">
                </a>
              </figure>

              <article class="infocap abs small-12">
                <div class="container ghost small-12 left">
                  
                  <header class="small-12 left d-table">
                    <hgroup class="small-12 d-table-cell">
                      <?php $posttags = wp_get_post_tags( $post->ID ); ?>
                      <h3 class="font-lite no-margin lh-normal"><?php echo $posttags[0]->name; ?></h3>
                      <h3 class="font-bold no-margin lh-normal"><?php echo $post->post_title; ?></h3>
                    </hgroup>
                  </header>

                  <p class="d-table font-small small-12 left no-margin">
                    <span class="d-table-cell small-12">
                      <?php
                        $feats = get_field('produto_destaques',$post->ID);
                        foreach ($feats as $feat):
                      ?>
                      <span class="small-12 left">• <?php echo $feat['produto_destaque']; ?></span>
                      <?php endforeach; ?>
                    </span>
                  </p>
                  
                  <a href="<?php echo get_permalink($post->ID); ?>" title="<?php echo $post->post_title; ?>" class="button small-12 left font-xlarge font-bold no-margin">ver detalhes <span class="icon-chevron-circle-right font-large"></span></a>
                </div>
              </article>
            </div>
    	<?php
    endforeach;

	exit();
}

?>