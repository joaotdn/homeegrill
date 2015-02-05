    <!-- inicio tab colunistas -->
    <nav id="showroom-tab" class="small-12 left bg-oil">
      <div class="row">
        <div class="small-12 columns rel">
          <?php
            $blog = get_cat_ID('Blog');
            $category_link = get_category_link( $blog );
            $categories = get_terms('category','child_of=' . $blog);
          ?>
          <ul class="inline-list tab-options tab-blog">
            <li>
              <h4 class="font-large"><a href="#" class="d-block silver text-low active" title="">Últimos posts</a></h4>
            </li>
            <?php
              foreach($categories as $category):
            ?>
            <li>
              <h4 class="font-large"><a href="#" class="d-block silver text-low" title="<?php echo $category->name; ?>" data-category="<?php echo $category->slug; ?>" data-category-id="<?php echo $category->term_id; ?>"><?php echo $category->name; ?></a></h4>
            </li>
            <?php endforeach; ?>
          </ul>

          <div class="ajax-loader-mac blob-loader p-list small-12 text-center abs p-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" alt="">
          </div>

          <div id="nav-posts" class="small-12 left carousel">
            <?php
              $args = array( 'posts_per_page' => 6, 'taxonomy' => 'category' );
              $_posts = get_posts( $args );
              foreach ($_posts as $post): setup_postdata( $post );
            ?>
            <div class="item">
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

            </div>
            <?php endforeach; ?>
          </div>
          
          <!-- controles do carrossel -->
          <div class="small-12 left showroom-controls">
            <ul class="inline-list no-margin">
              <li>
                <a href="#" class="btn d-table prev-posts">
                  <span class="icon-arrow-left d-table-cell"></span>
                </a>
              </li>

              <li>
                <a href="#" class="btn d-table next-posts">
                  <span class="icon-uniE603 d-table-cell"></span>
                </a>
              </li>

              <li>
                <h5 class="text-low"><a href="<?php echo esc_url( $category_link ); ?>" title="Ver todas as postagens">Ver todos os posts</a></h5>
              </li>
            </ul>
          </div>
        </div><!-- coluna -->
      </div><!-- row -->
    </nav>
    <!-- fim tab colunistas -->