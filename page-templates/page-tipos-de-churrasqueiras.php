<?php
  /**
   * Template Name: Tipos de churrasqueiras
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
            $churrasqueiras = get_field('churrasqueira_tipos',$post->ID);
            foreach ($churrasqueiras as $churrasqueira):
          ?>
          <!-- churrasqueira -->
          <div class="shop-item small-12 left">

            <figure class="shop-front small-12 medium-8 right bg-cover shop-info" data-thumb="<?php echo $churrasqueira['ch_foto']; ?>"></figure>

            <div class="small-12 medium-4 right shop-info bg-white rel">
              <hgroup class="small-12">
                <div class="divide-20"></div>
                <h4 class="font-low no-margin"><?php echo $churrasqueira['ch_tipo']; ?></h4>
              </hgroup>

              <a href="#" class="display-product-data button small-12 abs p-bottom p-left text-low font-xlarge no-margin" title="Ver agora">Ver agora <span class="icon-chevron-circle-right font-medium"></a>
            </div>

            <div class="product-info-box small-12 left bg-oil">
              <div class="product-info-container white">
                <ul class="white">
                  <?php
                    $features = $churrasqueira['ch_caracteristicas'];
                    foreach ($features as $feature):
                  ?>
                  <li><?php echo $feature['ch_caracteristica']; ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
          <!-- // churrasqueira -->
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
