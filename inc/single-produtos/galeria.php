    <section id="#the-product" class="small-12 left">
      
      <!-- galeria com zoom -->
      <div class="small-12 medium-8 large-8 columns">
        <div id="product-gallery" class="small-12 left rel">
          <nav class="list-small-thumbs rel left">
            
            <a href="#" class="white prev-default abs small-12 p-top p-left small-thumb-nav small-thumb-next d-table text-center">
              <span class="icon-arrow-up font-xlarge d-table-cell"></span>
            </a>
            <a href="#" class="white prev-default abs small-12 p-bottom p-left small-thumb-nav small-thumb-prev d-table text-center">
              <span class="icon-arrow-down font-xlarge d-table-cell"></span>
            </a>

            <?php
              global $post;
              $gallery = get_field('produto_galeria',$post->ID);
            ?>
            
            <ul class="no-margin no-bullet vertical-slider cycle-slideshow vertical"
              data-cycle-fx='carousel'
              data-cycle-timeout='0'
              data-cycle-next=".small-thumb-next"
              data-cycle-prev=".small-thumb-prev"
              data-cycle-carousel-visible='<?php echo count($gallery); ?>'
              data-cycle-carousel-vertical='true'
              data-cycle-slides="> li"
              data-allow-wrap="false"
            >
              <?php
                $i = 0; 
                foreach ($gallery as $photo):
                  $i++;
                  $small = wp_get_attachment_image_src( $photo['produto_foto'], 'medium' );
                  $large = wp_get_attachment_image_src( $photo['produto_foto'], 'full' );
                  if (1 == $i) { $i = "active"; }
              ?>
              <li>
                <a href="#" class="d-block small-12 left rel full-height" data-post-thumbnail="<?php echo $large[0]; ?>">
                  <span class="border-mask small-12 abs <?php echo $i; ?>"></span>
                  <div class="small-12 left full-height bg-cover" data-thumb="<?php echo $small[0]; ?>">
                    <!--<img src="" alt="">-->
                  </div>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </nav>

          <figure id="product-canvas" class="left text-center d-table rel">
            <div class="zoom-image">
              <?php 
                global $post;
                $gallery = get_field('produto_galeria',$post->ID);
                $u = 0;
                foreach ($gallery as $photo):
                  $u++;
                  if(1 == $u):
                  $large = wp_get_attachment_image_src( $photo['produto_foto'], 'full' );
              ?>
              <img src="<?php echo $large[0]; ?>" alt="">
              <?php endif; endforeach; ?>
            </div>

            <figcaption class="small-12 abs p-bottom p-left text-right">
              <span class="font-bold text-low">clique e arraste para ver o zoom <i class="icon-glass d-block right"></i></span>
            </figcaption>
          </figure>
        </div>
      </div>
      <!-- // galeria com zoom -->

      <!-- informações sobre o produto -->
      <?php
        $intro = get_field('produto_chamada',$post->ID);
        $preco = get_field('produto_preco',$post->ID);
        $parcelas = get_field('produto_parcelas',$post->ID);
        $link = get_field('produto_url',$post->ID);
        $garantia = get_field('produto_garantia',$post->ID);
        $frete = get_field('produto_frete',$post->ID);
      ?>
      <div id="product-info" class="small-12 medium-4 large-4 columns rel">
        
        <?php if ($intro): ?>
        <header class="divide-30">
          <h5 class="no-margin"><?php echo $intro; ?></h5 class="no-margin">
        </header>
        <?php endif ?>
        
        <article class="tiny-12 small-6 medium-12 left">
          <?php if ($preco): ?>
            <h2 class="price oil no-margin lh-normal"><?php echo $preco; ?></h2>
            <p class="no-margin lh-normal font-small oil">À vista</p>
          <?php endif ?>
          
          <?php if ($parcelas): ?>
            <p class="no-margin lh-normal font-small oil">Ou em <strong>até <?php echo $parcelas; ?></strong> no cartão de crédito</p>  
          <?php endif ?>
          
          <?php if ($link): ?>
          <p class="divide-30 show-for-medium-up">
            <h3>
              <a href="<?php echo $link; ?>" class="button-success small-12 left text-left text-low font-xlarge" target="_blank">
                <span class="left">Comprar agora</span>
                <span class="d-block left icon-cart2"></span>
              </a>
            </h3>
          </p>  
          <?php endif ?>
          
          <div class="divide-30 show-for-medium-only"></div>
        </article>

        <footer class="info-footer abs p-bottom tiny-12 small-6 medium-12">
          <nav class="about-product">
            <ul class="no-bullet no-margin">
              <li>
                <?php $page = get_page_by_title('Perguntas frequentes'); ?>
                <p class="font-medium font-bold divide-10"><a href="<?php echo esc_html(get_page_uri($page->ID)); ?>" title="Dúvidas sobre o seu projeto?" class="font-bold"><i class="icon-help d-block left"></i> Dúvidas sobre o seu projeto?</a></p>
              </li>

              <li>
                <?php $page = get_page_by_title('Pontos de venda'); ?>
                <p class="font-medium font-bold divide-10"><a href="<?php echo esc_html(get_page_uri($page->ID)); ?>" title="Veja nossos pontos de venda" class="font-bold"><i class="icon-location2 d-block left"></i> Veja nossos pontos de venda</a></p>
              </li>

              <li>
                <?php if ($garantia): ?>
                <p class="font-medium font-bold divide-10"><i class="icon-calendar-o d-block left"></i> Garantia de <?php echo $garantia; ?></p>
                <?php endif ?>
              </li>

              <li>
                <?php if ($frete): ?>
                  <p class="font-medium font-bold no-margin"><i class="icon-prazo d-block left"></i> Prazo de entrega: até <?php echo $frete; ?> úteis</p>
                <?php endif ?>
              </li>
            </ul>
          </nav>
        </footer>
      </div>
      <!-- // informações sobre o produto -->
      <div class="divide-30"></div>
      
    </section>