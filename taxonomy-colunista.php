<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');

  $obj = get_queried_object();

  $foto = get_field('colunista_foto',$obj);
  $avatar = get_field('colunista_avatar',$obj);
  $site = get_field('colunista_site',$obj);
  $tel = get_field('colunista_telefone',$obj);
  $social = get_field('colunista_social',$obj);
  $name = $obj->name;
  $profissao = get_field('colunista_profissao',$obj);
  $descricao = $obj->description;
  $autor_id = $obj->term_id;
  ?>
  
  <div class="row">
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal text-low"><?php echo single_cat_title(); ?></h2>
      <div class="divide-20"></div>

      <?php  get_template_part('content-share'); ?>
    </header><!-- //post-header -->

    <aside id="sidebar" class="small-12 medium-4 columns right">
      
      <!-- widget: sobre o colunista corrente -->
      <section id="hg-widget" class="divide-20 post-author inner">
        <figure class="small-12 left">
            <a href="<?php echo $archive; ?>" class="small-12 left d-block author-thumb bg-cover" title="<?php echo $name; ?>" data-thumb="<?php echo $foto; ?>"></a>

            <figcaption class="small-12 left">
              <h5 class="lh-small font-large no-margin"><a href="#" title="Rubens Maia"><?php echo $name; ?></a></h5>
              <?php if ($profissao): ?>
                <p class="lh-small font-medium"><?php echo $profissao; ?></p>
              <?php endif; ?>

              <?php if ($descricao): ?>
                <p class="no-margin font-medium"><strong>Resumo do perfil:</strong></p>
                <p class="lh-normal font-medium"><?php echo $descricao; ?></p>
              <?php endif; ?>
              
              <?php if ($site): ?>
                <h6 class="no-margin">Site: <a href="<?php echo $site; ?>" target="_blank" title=""><?php echo $site; ?></a></h6>
              <?php endif; ?>

              <?php if ($tel): ?>
                <h6 class="no-margin">Telefone: <span class="font-lite"><?php echo $tel; ?></span></h6>
              <?php endif; ?>

              <?php 
                if ($social): 
                echo '<h6 class="no-margin author-social-links">Redes sociais:';
                foreach ($social as $network):
              ?>
                <a href="<?php echo $network['colunista_social_link']; ?>" target="_blank" title="<?php echo $network['colunista_social_nome']; ?>"><?php echo $network['colunista_social_nome']; ?></a>
              <?php 
                endforeach; 
                echo "</h6>";
                endif; 
              ?>
            </figcaption>
        </figure>
      </section>

    </aside>
    
    <section class="small-12 medium-8 right">

      <div class="tiny-12 small-6 columns footer-newsletter">
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

      <div class="tiny-12 small-6 columns end select-writter">
        <nav class="small-12 left rel">
          <h5 class="no-margin small-12 left font-medium" data-dropdown="list-writters" aria-controls="list-writters" aria-expanded="false">
            <span class="">todos os colunistas</span>
            <i class="icon-arrow-down right white font-bold"></i>
          </h5>

          <ul id="list-writters" class="f-dropdown bg-white small" data-dropdown-content aria-hidden="true" tabindex="-1">
            <?php
              $terms = get_terms( 'colunista', 'hide_empty=0' );
              foreach ($terms as $term):
                $_name = $term->name;
                $archive = get_term_link( $term, 'colunista' );
            ?>
            <li><a href="<?php echo $archive; ?>" title="<?php echo $_name; ?>" class="font-medium small-12"><?php echo $_name; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </nav>
      </div> <!-- // colunistas -->

      <div class="divide-20"></div>

      <nav id="nav-posts" class="small-12 left" role="navigation">
        
        <?php
          if (have_posts()) : while (have_posts()) : the_post();
        ?>

        <!-- item -->
        <div class="small-12 medium-6 columns left">
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
          <a href="#" class="d-block small-12 left author-link">
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
    </section>

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
