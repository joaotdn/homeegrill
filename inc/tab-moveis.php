    <!-- inicio tab prdutos (moveis) -->
    <nav id="showroom-tab" class="small-12 left bg-white">

      <div class="row">
        <div class="small-12 columns">

          <ul class="inline-list tab-options tab-moveis">
            <?php
              $moveis = get_term_by( 'name', 'moveis', 'categoria-produto' );
              $terms = get_terms('categoria-produto','hide_empty=0&child_of='.$moveis->term_id);
            ?>
            <li>
              <h4 class="font-large"><a href="#" class="d-block text-low" title="Mais recentes" data-product-type="<?php echo $moveis->slug; ?>">Recentes</a></h4>
            </li>
            <?php
              foreach ($terms as $term):
                $term_link = get_term_link( $term );
            ?>
            <li>
              <h4 class="font-large"><a href="#" class="d-block text-low" title="<?php printf('Mais recentes em %s',$term->name); ?>" data-product-term="<?php echo $term->slug; ?>" data-product-type="<?php echo $moveis->slug; ?>"><?php echo $term->name; ?></a></h4>
            </li>
            <?php
              endforeach;
            ?>
          </ul>

          <div class="ajax-loader-mac p-list small-12 text-center abs p-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" alt="">
          </div>

          <div id="showroom-carousel" class="carousel-moveis small-12 left owl-carousel owl-theme owl-responsive-1000 owl-loaded">
            
            <?php
              $args = array( 'posts_per_page' => 6, 'post_type' => 'produtos', 'taxonomy' => 'categoria-produto', 'term' => 'moveis' );
              $produtos_posts = get_posts( $args );
              foreach ($produtos_posts as $post): setup_postdata( $post );
            ?>
            <div class="item rel">
              <figure class="small-12 left rel showroom-thumb">
                <a href="<?php the_permalink(); ?>" class="d-block small-12 left text-center" title="<?php the_title(); ?>">
                  <img src="<?php getThumbUrl('medium'); ?>" alt="<?php the_title(); ?>">
                </a>
              </figure>

              <article class="infocap abs small-12">
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
              </article>
            </div>
            <?php
              endforeach;
            ?>
          </div> <!-- fim do carrossel -->

          <!-- controles do carrossel -->
          <div class="small-12 left showroom-controls">
            <ul class="inline-list no-margin">
              <li>
                <a href="#" class="btn d-table prev-movel">
                  <span class="icon-arrow-left d-table-cell"></span>
                </a>
              </li>

              <li>
                <a href="#" class="btn d-table next-movel">
                  <span class="icon-uniE603 d-table-cell"></span>
                </a>
              </li>

              <li>
                <h5 class="text-low"><a href="<?php echo esc_html(get_term_link($moveis)); ?>" title="Ver todas os móveis">Ver todos os móveis</a></h5>
              </li>
            </ul>
          </div>

        </div><!-- // coluna -->
      </div><!-- // row -->
    </nav>
    <!-- fim tab prdutos (moveis) -->