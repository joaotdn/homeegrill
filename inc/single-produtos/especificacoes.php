<!-- especificações -->
  <div id="product-espec" class="small-12 left data-panel bg-ghost">
        <!-- inicio tab colunistas -->
    <nav id="showroom-tab-product" class="small-12 left">
      <div class="row">
        <div class="small-12 left">

          <div id="product-down" class="small-12 left">
            
            <?php
              /*
                Especificações
               */
              global $post;
              $espec = get_field('produto_especificacoes',$post->ID);
            ?>
            <div class="small-12 medium-4 large-4 columns">
              <figure class="small-12 left rel">
                <div class="small-12 left container-thumb">
                  <a href="<?php echo $espec; ?>" class="blog-thumb d-block small-12 left bg-cover" target="_blank" title="Especificações do produto" data-thumb="<?php echo get_template_directory_uri(); ?>/images/cuidados.png"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url d-table bg-oil">
                <h2 class="font-medium no-margin d-table-cell">
                  <a href="<?php echo $espec; ?>" target="_blank" title="Especificações do produto" class="white small-12 left lh-normal">Especificações do produto</a>
                  <span class="white small-12 left font-lite">Linha, modelos e tamanhos</span>
                </h2>
              </article>

              <a href="<?php echo $espec; ?>" target="_blank" title="Especificações do produto" class="d-block small-12 left button no-margin font-large">
                <span>Ver agora</span>
                <span class="icon-chevron-circle-right font-medium"></span>
              </a>
              <div class="divide-20 hide-for-medium-up"></div>
            </div>
            
            <?php
              /*
                Manual do proprietário
               */
              $manual = get_field('produto_manual',$post->ID);
            ?>
            <div class="small-12 medium-4 large-4 columns">
              <figure class="small-12 left rel">
                <div class="small-12 left container-thumb">
                  <a href="<?php echo $manual; ?>" class="blog-thumb d-block small-12 left bg-cover" title="Manual do proprietário" target="_blank" data-thumb="<?php echo get_template_directory_uri(); ?>/images/manual.png"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url d-table bg-oil">
                <h2 class="font-medium no-margin d-table-cell">
                  <a href="<?php echo $manual; ?>" title="Manual do proprietário" target="_blank" class="white small-12 left lh-normal">Manual do proprietário</a>
                  <span class="white small-12 left font-lite">Cuidados e manutenção</span>
                </h2>
              </article>

              <a href="<?php echo $manual; ?>" title="Manual do proprietário" target="_blank" class="d-block small-12 left button no-margin font-large">
                <span>Fazer download</span>
                <span class="icon-chevron-circle-right font-medium"></span>
              </a>
              <div class="divide-20 hide-for-medium-up"></div>
            </div>

            <div class="small-12 medium-4 large-4 columns">
              <?php
                /*
                  Manual do proprietário
                */
                $catalogo = get_option('nt_catalogo');
              ?>
              <figure class="small-12 left rel">
                <div class="small-12 left container-thumb">
                  <a href="<?php echo esc_html($catalogo); ?>" class="blog-thumb d-block small-12 left bg-cover" title="Catálogo institucional" data-thumb="<?php echo get_template_directory_uri(); ?>/images/catalogo.png"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url d-table bg-oil">
                <h2 class="font-medium no-margin d-table-cell">
                  <a href="<?php echo esc_html($catalogo); ?>" title="Catálogo institucional" class="white small-12 left lh-normal">Catálogo institucional</a>
                  <span class="white small-12 left font-lite">Tudo sobre a home & GRILL</span>
                </h2>
              </article>

              <a href="<?php echo esc_html($catalogo); ?>" title="Catálogo institucional" target="_blank" class="d-block small-12 left button no-margin font-large">
                <span>Ver agora</span>
                <span class="icon-chevron-circle-right font-medium"></span>
              </a>
              <div class="divide-20 hide-for-medium-up"></div>
            </div>
          
        </div><!-- coluna -->
      </div><!-- row -->
    </nav>
    
  </div>
  <!-- // especificações -->