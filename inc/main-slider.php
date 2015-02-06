    <!-- inicio slider de destaques -->
    <?php
      $args = array( 'posts_per_page' => 5, 'post_type' => 'slider' );
      $features = get_posts( $args );
    ?>

    <section id="main-slider" class="small-12 left rel">
      
      <div class="small-12 left text-center loader d-table abs">
        <div class="d-table-cell">
          <img src="<?php echo get_template_directory_uri(); ?>/images/loader.png" alt="" class="zigzag">
        </div>
      </div>
      
      <?php
        /*
          Slide de imagens
        */
      ?>
      <nav class="slider-thumbs small-12 medium-9 large-9 abs"
        data-cycle-swipe="true"
        data-cycle-swipe-fx="scrollHorz"
      >
        <?php
          foreach ($features as $post): setup_postdata( $post );
            global $post;
            $link = get_field('slider_link',$post->ID);
        ?>
        <figure class="small-12 left bg-cover" data-thumb="<?php getThumbUrl('full'); ?>">
          <a href="<?php echo $link; ?>" title="<?php the_title(); ?>" class="d-block abs anchor-mask"></a>
        </figure>
        <?php
          endforeach;
        ?>
      </nav>

      <div class="row rel row-small-full">
        
        <?php
          /*
            [FIX] Mascaras com links para os destaques
                  (necessario devido a sobreposição do container
                  no slide de imagens)
           */
        ?>
        <nav class="slide-info masks small-12 abs show-for-medium-up">
          <?php
            foreach ($features as $post): setup_postdata( $post );
              $link = get_field('slider_link',$post->ID);
          ?>
          <article class="item small-12 left">
            <a href="<?php echo $link; ?>" title="<?php the_title(); ?>" class="d-block abs anchor-mask"></a>
          </article>
          <?php
            endforeach;
          ?>
        </nav>
        <?php //mascaras com links ?>
        
        <div class="small-row">
          <nav class="small-12 medium-5 medium-uncentered large-4 columns rel nav-info">
            
            <?php
              /*
                Slide de informações
               */
            ?>
            <div class="small-12 left slide-info">
              <?php
                foreach ($features as $post): setup_postdata( $post );
                  $intro = get_field('slider_chamada',$post->ID);
                  $excerpt = get_field('slider_resumo',$post->ID);
                  $link = get_field('slider_link',$post->ID);
              ?>
              <article class="item small-12 left">
                <header class="small-12 left d-table">
                  <hgroup class="d-table-cell">
                    <h3 class="font-lite no-margin lh-normal"><?php echo $intro; ?></h3>
                  </hgroup>
                </header>
                <p class="no-margin d-table lh-normal font-large">
                  <span class="d-table-cell"><?php echo $excerpt; ?></span>
                </p>
                <a href="<?php echo $link; ?>" title="<?php the_title(); ?>" class="button text-left small-12 left font-xlarge font-bold no-margin">saiba mais <span class="icon-chevron-circle-right font-large"></span></a>
              </article>
              <?php
                endforeach;
              ?>
            
            </div><!-- slider container -->

            <!-- slider controls -->
            <div class="slide-controls small-4 medium-8 large-10 left">
              <a href="#" id="prev-slide" title="Anterior" class="button-smoke small-6 left no-margin">
                <span class="icon-arrow-left d-table-cell"></span>
              </a>
              <a href="#" id="next-slide" title="Próximo" class="button-smoke small-6 left no-margin bdr">
                <span class="icon-uniE603 d-table-cell"></span>
              </a>
            </div>

          </nav>
        </div><!-- //informações -->

        <div class="yellow-block small-6 large-4 abs"></div>
      </div><!-- row -->

    </section>
    <!-- fim slider de destaques -->