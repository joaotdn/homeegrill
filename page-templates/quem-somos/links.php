<section id="about-links" class="small-12 left data-panel bg-white">
    
    <nav class="row" role="navigation">
      
      <?php
        $page = get_page_by_title("Nossas lojas");
        if ($page) {
          $link = get_page_link($page->ID);
        } else {
          $link = "#";
        }
      ?>
      <figure class="small-12 medium-4 columns">
        <a href="<?php echo esc_html( $link ); ?>" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="<?php echo get_template_directory_uri(); ?>/images/nossaslojas.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="Nossas lojas" class="white">Nossas lojas</a></h5>
            <p class="font-medium white no-margin">O showroom completo pra você</p>
          </article>
        </figcaption>

        <a href="<?php echo esc_html( $link ); ?>" title="Nossas lojas" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>
      
      <?php
        $page = get_page_by_title("Pontos de venda");
        if ($page) {
          $link = get_page_link($page->ID);
        } else {
          $link = "#";
        }
      ?>
      <figure class="small-12 medium-4 columns">
        <a href="<?php echo esc_html( $link ); ?>" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="<?php echo get_template_directory_uri(); ?>/images/pontosdevenda.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="Nossos pontos de venda" class="white">Nossos pontos de venda</a></h5>
            <p class="font-medium white no-margin">Onde encontrar home & GRILL</p>
          </article>
        </figcaption>

        <a href="<?php echo esc_html( $link ); ?>" title="Nossos pontos de venda" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>
      
      <?php
        $page = get_page_by_title("Trabalhe conosco");
        if ($page) {
          $link = get_page_link($page->ID);
        } else {
          $link = "#";
        }
      ?>
      <figure class="small-12 medium-4 columns">
        <a href="<?php echo esc_html( $link ); ?>" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="<?php echo get_template_directory_uri(); ?>/images/trabalheconosco.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="Trabalhe aqui" class="white">Trabalhe aqui</a></h5>
            <p class="font-medium white no-margin">Junte-se a nossa equipe</p>
          </article>
        </figcaption>

        <a href="<?php echo esc_html( $link ); ?>" title="Nossos pontos de venda" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>

    </nav>

  </section> <!-- links -->