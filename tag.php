<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');
  ?>
  
  <div class="row">
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal text-low"><?php echo single_tag_title(); ?></h2>
      <div class="divide-20"></div>

      <?php  get_template_part('content-share'); ?>

    </header><!-- //post-header -->
    
    <section class="small-12 left">
      <div class="tiny-12 small-6 medium-4 columns footer-newsletter">
        <form action="<?php bloginfo('home'); ?>/" class="small-12 left" method="GET">
          <label class="no-margin small-8 left">
            <input type="text" class="small-12 left bg-white" placeholder="O que você procura?" name="s" id="s">
          </label>
            
          <label class="no-margin small-4 left">
            <input type="submit" value="buscar" class="button small-12 text-center">
          </label>
        </form>

        <div class="divide-20"></div>
      </div>

      <div class="tiny-12 small-6 medium-4 columns end select-writter">
        <nav class="small-12 left rel">
          <h5 class="no-margin small-12 left font-medium" data-dropdown="list-writters" aria-controls="list-writters" aria-expanded="false">
            <span class="">todos os colunistas</span>
            <i class="icon-arrow-down right white font-bold"></i>
          </h5>

          <ul id="list-writters" class="f-dropdown bg-white small" data-dropdown-content aria-hidden="true" tabindex="-1">
            <?php
              $terms = get_terms( 'colunista', 'hide_empty=0' );
              foreach ($terms as $term):
                $name = $term->name;
                $archive = get_term_link( $term, 'colunista' );
            ?>
            <li><a href="<?php echo $archive; ?>" title="<?php echo $name; ?>" class="font-medium small-12"><?php echo $name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
        <div class="divide-20"></div>
      </div> <!-- // colunistas -->

      <div class="divide-20"></div>
    </section>

    <nav id="nav-posts" class="small-12 left" role="navigation">
      
      <?php
        if (have_posts()) : while (have_posts()) : the_post();
      ?>
       
      <!-- item -->
      <div class="tiny-12 small-6 medium-4 columns">
        <figure class="small-12 left rel">
          <a href="<?php get_first_category_link(); ?>" title="<?php get_first_category_name(); ?>" class="d-block abs bg-white block-url text-low font-bold get-cat"><?php get_first_category_name(); ?></a>
          <div class="small-12 left container-thumb">
            <a href="<?php the_permalink(); ?>" class="blog-thumb d-block small-12 left bg-cover" title="<?php the_title(); ?>" data-thumb="<?php getThumbUrl('medium'); ?>"></a>
          </div>
        </figure>

        <article class="post-title fix small-12 left block-url bg-white d-table">
          <h2 class="font-large no-margin d-table-cell">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
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
        <div class="divide-20"></div>
      </div>

      <?php endwhile; else: ?>
        <h3 class="small-12 columns"><?php _e('Sem resultados...'); ?></h3>
      <?php endif; ?>

    </nav>

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
