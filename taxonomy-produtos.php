<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');
  ?>
  
  <div class="row">
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal text-low"><?php echo single_cat_title(); ?></h2>
      <div class="divide-20"></div>

      <?php  get_template_part('content-share'); ?>

    </header><!-- //post-header -->

    <div id="showroom-carousel" class="small-12 left products-archive-list">
      
      <?php
        if (have_posts()) : while (have_posts()) : the_post();
      ?>            
      <!-- item -->
      <div class="item rel tiny-12 small-6 medium-4 large-4 columns left">
        <figure class="small-12 left rel showroom-thumb">
          <a href="<?php the_permalink(); ?>" class="d-block small-12 left text-center" title="<?php the_title(); ?>">
            <img src="<?php getThumbUrl('medium'); ?>" alt="<?php the_title(); ?>">
          </a>
        </figure>

        <article class="infocap inner abs small-12">
          <div class="small-12 left fix-bg">
            <div class="container ghost small-12 left">
                    
              <header class="small-12 left d-table">
                <hgroup class="small-12 d-table-cell">
                  <h3 class="font-lite no-margin lh-normal"><?php get_first_tag(); ?></h3>
                  <h3 class="font-bold no-margin lh-normal"><?php the_title(); ?></h3>
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
                    
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button small-12 left font-xlarge font-bold no-margin">ver detalhes <span class="icon-chevron-circle-right font-large"></span></a>
            </div>
          </div>
        </article>
      </div>
      <?php endwhile; else: ?>
        <h3 class="small-12 columns"><?php _e('Sem resultados...'); ?></h3>
      <?php endif; ?>
            
    </div> <!-- fim da listagem -->

    <!-- paginação -->
    <div class="small-12 columns showroom-controls">
      <?php 
        if(function_exists('wp_paginate')) {
          wp_paginate();
        }
      ?> 
      <div class="divide-30"></div>
    </div>

  </div><!-- // row -->

<?php
  //footer
 get_footer();
?>
