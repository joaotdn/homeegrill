<?php
  /**
   * Template Name: Como funciona
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
            $list = get_field('manual_topicos',$post->ID);
            foreach($list as $item):
          ?>
          <!-- aprenda -->
          <div class="shop-item small-12 left">

            <figure class="shop-front small-12 medium-8 right bg-cover shop-info" data-thumb="<?php echo $item['manual_img']; ?>"></figure>

            <div class="small-12 medium-4 right shop-info bg-white rel">
              <hgroup class="small-12">
                <div class="divide-20"></div>
                <h4 class="font-low no-margin"><?php echo $item['manual_etapa']; ?></h4>
                <p class="no-margin font-lite font-large"><?php echo $item['manual_descricao']; ?></p>
              </hgroup>

              <a href="#" class="display-product-data button small-12 abs p-bottom p-left text-low font-xlarge no-margin" title="Ver agora">Ver agora <span class="icon-chevron-circle-right font-medium"></a>
            </div>

            <div class="product-info-box small-12 left bg-oil">
              <div class="product-info-container white">
                <p><?php echo $item['manual_texto']; ?></p>
              </div>
            </div>
          </div>
          <!-- // aprenda -->
          <?php endforeach; ?>

          <div class="divide-20"></div>
        </nav>
      </section>

      <div class="small-12 columns">
        <?php  get_template_part('content-share'); ?>
      </div>

    </section>

  </div><!-- // row -->

<?php
  /*
   Diferenciais
  */
  require get_template_directory() . "/inc/single-produtos/diferenciais.php";
  
  //footer
  get_footer();
?>
