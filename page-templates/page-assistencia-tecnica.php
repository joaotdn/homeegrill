<?php
  /**
   * Template Name: Assistência
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

      <section class="small-12 left">
        <div class="tiny-12 small-6 medium-4 columns end select-writter">
          <nav class="small-12 left">
            <h5 class="no-margin small-12 left font-medium" data-dropdown="list-states" aria-controls="list-states" aria-expanded="false">
              <span class="">Todos os estados</span>
              <i class="icon-arrow-down right white font-bold"></i>
            </h5>
            
            <div class="small-12 columns">
              <ul id="list-states" class="f-dropdown bg-white small" data-dropdown-content aria-hidden="true" tabindex="-1">
                <li><a href="#" title="Todos" class="font-medium small-12 primary" data-select-state="todos">Todos os estados</a></li>
              </ul>
            </div>
          </nav>

          <div class="divide-20"></div>
        </div>

      </section><!-- seleciona o estado -->
      
      <section class="small-12 columns">
        <nav id="shop-list" class="small-12 left">
          
          <?php
            $args = array( 'posts_per_page' => -1, 'post_type' => 'assistencia' );
            $produtos_posts = get_posts( $args );
            foreach ($produtos_posts as $post): setup_postdata( $post );
              global $post;
          ?>
          <!-- loja -->
          <div class="shop-item rel small-12 left market-item" data-state="<?php echo get_field('assis_estado',$post->ID); ?>">

            <figure class="shop-front shop-map-point bg-white small-12 medium-8 right sale-point full-height">
              <?php echo get_field('assis_mapa',$post->ID); ?>
            </figure>

            <div class="small-12 medium-4 left bg-white rel full-height sale-point fix">
              <hgroup class="small-12">
                <h4 class="no-margin"><?php the_title(); ?></h4>
                <?php if (get_field('assis_cidade',$post->ID)): ?>
                  <h4 class="divide-20 font-lite"><?php echo get_field('assis_cidade',$post->ID); ?></h4>      
                <?php endif ?>

                <?php if (get_field('assis_telefone',$post->ID)): ?>
                  <p class="divide-10 font-lite font-medium"><?php echo get_field('assis_telefone',$post->ID); ?></p>      
                <?php endif ?>

                <?php if (get_field('assis_endereco',$post->ID)): ?>
                  <p class="divide-10 font-lite font-medium no-margin"><?php echo get_field('assis_endereco',$post->ID); ?></p>      
                <?php endif ?>
              </hgroup>
            </div>

          </div>
          <!-- // loja -->
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
  //footer
  get_footer();
?>
