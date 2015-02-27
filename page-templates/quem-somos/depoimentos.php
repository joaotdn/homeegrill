    <!-- inicio tab colunistas -->
    <nav id="showroom-tab" class="small-12 left bg-oil">
      <div class="row">
        <div class="small-12 columns rel">
          <ul class="inline-list tab-options tab-blog">
            <li>
              <h4 class="font-large"><span class="d-block silver text-low active">Depoimentos</span></h4>
            </li>
          </ul>

          <div class="ajax-loader-mac blob-loader p-list small-12 text-center abs p-left">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ajax-loader.gif" alt="">
          </div>

          <div id="nav-posts" class="small-12 left carousel">
            <?php
              $args = array( 'posts_per_page' => 6, 'taxonomy' => 'category', 'term' => 'cliente' );
              $_posts = get_posts( $args );
              foreach ($_posts as $post): setup_postdata( $post );
            ?>
            <div class="item">
              <figure class="small-12 left rel">
                <div class="small-12 left container-thumb">
                  <a href="<?php the_permalink(); ?>" class="blog-thumb d-block small-12 left bg-cover" title="<?php the_title(); ?>" data-thumb="<?php getThumbUrl('medium'); ?>"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
              </article>

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
            </ul>
          </div>
        </div><!-- coluna -->
      </div><!-- row -->
    </nav>
    <!-- fim tab colunistas -->