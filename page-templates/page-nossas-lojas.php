<?php
  /**
   * Template Name: Nossas lojas
   *
   * @package WordPress
   * @subpackage home_grill
   * @since home & GRILL 1.0
  */

  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');
?>
  
  <div class="row">
    
    <section id="blog-content" class="small-12 left data-panel">

      <header class="small-12 columns post-header">
        <h2 class="no-margin lh-normal text-low"><?php the_title(); ?></h2>
        <div class="divide-20"></div>

        <?php  get_template_part('content-share'); ?>

      </header><!-- //post-header -->
      
      <section class="small-12 columns">
        <nav id="shop-list" class="small-12 left">
          
          <?php
            $args = array( 'posts_per_page' => -1, 'post_type' => 'lojas' );
            $produtos_posts = get_posts( $args );
            foreach ($produtos_posts as $post): setup_postdata( $post );
              global $post;
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large' );
          ?>
          <!-- loja -->
          <div class="shop-item small-12 left">
    
            <figure class="shop-front small-12 medium-8 right bg-cover shop-info" data-thumb="<?php echo $thumb[0]; ?>"></figure>

            <div class="small-12 medium-4 right shop-info bg-white rel">
              <hgroup class="small-12">
                <div class="divide-20"></div>
                <h4 class="font-low no-margin"><?php the_title(); ?></h4>
                <h5 class="divide-10 font-lite"><?php echo get_field('loja_telefone',$post->ID); ?></h5>
                <h6 class="font-lite font-medium"><?php echo get_field('loja_email',$post->ID); ?></h6>
              </hgroup>

              <a href="#" class="display-shop-data button small-12 abs p-bottom p-left text-low font-xlarge no-margin" title="Ver agora">Ver agora <span class="icon-chevron-circle-right font-medium"></a>
            </div>

            <div class="small-12 left full-shop-data bg-oil">
              
              <div class="small-12 medium-8 right shop-map geo-component">
                <?php echo get_field('loja_mapa',$post->ID); ?>
              </div>

              <div class="small-12 medium-4 right bg-oil shop-address geo-component d-table">
                <div class="divide-20"></div>
                <div class="d-table-cell small-12">
                  <h5 class="white font-lite no-margin"><?php echo get_field('loja_endereco',$post->ID); ?></h5>
                  <h5 class="white font-lite no-margin"><?php echo get_field('loja_cidade',$post->ID); ?></h5>
                  <h5 class="white font-lite no-margin">Cep <?php echo get_field('loja_cep',$post->ID); ?></h5>

                  <nav class="small-12 left">

                    <div class="divide-20"></div>
                    <ul class="small-block-grid-3">
                      <?php
                        $gallery = get_field('loja_galeria',$post->ID);
                        foreach($gallery as $pic):
                          $small = wp_get_attachment_image_src( $pic['loja_foto'], 'produto-mini-thumb' );
                          $large = wp_get_attachment_image_src( $pic['loja_foto'], 'full' );
                      ?>
                      <li>
                        <a href="<?php echo $large[0]; ?>" class="d-block" data-lightbox="shop-gallery">
                          <img src="<?php echo $small[0]; ?>" alt="">
                        </a>
                      </li>
                      <?php endforeach; ?>

                    </ul>

                  </nav>
                </div>
              </div>

            </div><!-- // row -->
            
            <div class="divide-20"></div>
          </div>
          <!-- // loja -->
          <?php endforeach; ?>
          
          <div class="divide-20"></div>
        </nav>
      </section>

      <?php  get_template_part('content-share'); ?>

    </section>

  </div><!-- // row -->

<?php
  //footer
  get_footer();
?>
