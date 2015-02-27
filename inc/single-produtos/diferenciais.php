<!-- diferenciais -->
  <div id="list-features" class="small-12 left data-panel bg-oil">
    <div class="row">
       <header class="columns">
        <h5 class="white no-margin lh-normal">Diferenciais que só a home & GRILL tem!</h5>
        <h6 class="font-lite no-margin">A Churrasqueira home & GRILL utiliza aço inoxidável de alta qualidade em seus componentes, pois foram feitas para durar. Projetada e fabricada com o máximo de atenção em todos os detalhes, elas são sinônimos de qualidade e tecnologia.</h6>
      </header>

      <nav id="nav-features" class="small-12 left cycle-slideshow"
        data-cycle-fx="scrollHorz"
        data-cycle-timeout="0"
        data-cycle-prev=".prev-features"
        data-cycle-next=".next-features"
        data-cycle-slides="> div"
        data-cycle-swipe="true"
        data-cycle-swipe-fx="scrollHorz"
      >
        
        <!-- slide -->
        <div class="small-12 left">
          <?php
            $args = array( 'posts_per_page' => 6, 'post_type' => 'diferencial' );
            $diferenciais = get_posts( $args );
            foreach ($diferenciais as $post): setup_postdata( $post );
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
          ?>
          <figure class="tiny-12 small-6 medium-4 columns">
            <div class="feature-thumb small-12 left rel">
              <a href="#" title="<?php the_title(); ?>" class="d-block rel small-12 bg-cover rel" data-thumb="<?php echo $thumb[0]; ?>">
              </a>
              <span class="show-capiton d-block abs p-right p-bottom icon-add show-more"></span>

              <figcaption class="small-12 abs p-top p-left">
                <p class="font-small white"><?php the_excerpt(); ?></p>
              </figcaption>
            </div>
            <h3 class="font-large no-margin">
              <a href="#" title="<?php the_title(); ?>" class="button-white small-12 lef text-center"><?php the_title(); ?></a>
            </h3>
          </figure>
          <?php endforeach; ?>
        </div>
        <!-- // slide -->

        <!-- slide -->
        <div class="small-12 left">
          <?php
            $args = array( 'posts_per_page' => 6, 'post_type' => 'diferencial', 'offset' => 6 );
            $produtos_posts = get_posts( $args );
            foreach ($produtos_posts as $post): setup_postdata( $post );
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
          ?>
          <figure class="tiny-12 small-6 medium-4 columns">
            <div class="feature-thumb small-12 left rel">
              <a href="#" title="<?php the_title(); ?>" class="d-block rel small-12 bg-cover rel" data-thumb="<?php echo $thumb[0]; ?>">
              </a>
              <span class="show-capiton d-block abs p-right p-bottom icon-add show-more"></span>

              <figcaption class="small-12 abs p-top p-left">
                <p class="font-small white"><?php the_excerpt(); ?></p>
              </figcaption>
            </div>
            <h3 class="font-large no-margin">
              <a href="#" title="<?php the_title(); ?>" class="button-white small-12 lef text-center"><?php the_title(); ?></a>
            </h3>
          </figure>
          <?php endforeach; ?>
        </div>
        <!-- // slide -->

        <!-- slide -->
        <div class="small-12 left">
          <?php
            $args = array( 'posts_per_page' => 6, 'post_type' => 'diferencial', 'offset' => 12 );
            $produtos_posts = get_posts( $args );
            foreach ($produtos_posts as $post): setup_postdata( $post );
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
          ?>
          <figure class="tiny-12 small-6 medium-4 columns">
            <div class="feature-thumb small-12 left rel">
              <a href="#" title="<?php the_title(); ?>" class="d-block rel small-12 bg-cover rel" data-thumb="<?php echo $thumb[0]; ?>">
              </a>
              <span class="show-capiton d-block abs p-right p-bottom icon-add show-more"></span>

              <figcaption class="small-12 abs p-top p-left">
                <p class="font-small white"><?php the_excerpt(); ?></p>
              </figcaption>
            </div>
            <h3 class="font-large no-margin">
              <a href="#" title="<?php the_title(); ?>" class="button-white small-12 lef text-center"><?php the_title(); ?></a>
            </h3>
          </figure>
          <?php endforeach; ?>
        </div>
        <!-- // slide -->

      </nav>

      <!-- controles do carrossel -->
      <div class="small-12 columns showroom-controls">
        <ul class="inline-list no-margin">
          <li>
            <a href="#" class="btn d-table prev-features">
              <span class="icon-arrow-left d-table-cell"></span>
            </a>
          </li>

          <li>
            <a href="#" class="btn d-table next-features">
              <span class="icon-uniE603 d-table-cell"></span>
            </a>
          </li>

          <li>
            <!--
            esse link soh devera aparecer na single do produto
            <h5 class="text-low"><a href="#" title="Ver todas as churrasqueiras">Veja como funciona a churrasqueira home & GRILL</a></h5>
            -->
          </li>

        </ul>
      </div>
    </div>
  </div>
  <!-- // diferenciais -->