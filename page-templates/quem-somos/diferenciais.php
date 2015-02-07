<section id="our-features" class="small-12 left rel">
    
    <div class="small-11 medium-7 large-6 abs p-left p-top bg-rows">
      <div class="bg-oil small-12 left"></div>
      <div class="bg-oil-light small-12 left"></div>
    </div>

    <div class="small-11 medium-5 large-6 abs p-right p-top full-height features-thumb-cycle cycle-slideshow about-features-cycle"
      data-cycle-fx="tileBlind"
      data-cycle-timeout="0"
      data-cycle-slides="> figure"
      data-cycle-pager=".nav-our-features"
      data-cycle-prev=".prev-feature"
      data-cycle-next=".next-feature"
    >
      <?php
        $features = get_field('sobre_diferenciais',$post->ID);
        foreach($features as $feature):
      ?>
      <figure class="small-12 left full-height bg-cover" data-thumb="<?php echo $feature['sb_diferencial_img']; ?>" data-cycle-pager-template="<span><?php echo $feature['sb_diferencial_titulo']; ?></span>"></figure>
      <?php
        endforeach;
      ?>
    </div>

    <div class="row rel">
      <header class="small-12 columns bg-rows-header">
        <div class="small-12 left d-table">
          <h3 class="white no-margin d-table-cell">nossos diferenciais</h3>
        </div>
        <div class="small-12 left d-table">
          <nav class="small-12 d-table-cell nav-our-features">
          </nav>
        </div>
      </header>

      <article class="small-12 medium-9 large-8 columns end nav-content-features bg-ghost">

        <nav class="small-12 left cycle-slideshow content-features-cycle"
          data-cycle-timeout="0"
          data-cycle-slides="> div"
        >
          <?php
            $features = get_field('sobre_diferenciais',$post->ID);
            foreach($features as $feature):
          ?>
          <div class="small-12 left">
            <h5 class="divide-40"><?php echo $feature['sb_diferencial_cabecalho']; ?></h5>
            <p class="font-large"><?php echo $feature['sb_diferencial_texto']; ?></p>
          </div>
          <?php
            endforeach;
          ?>
        </nav>

        <div class="small-12 left showroom-controls">
          <ul class="inline-list no-margin">
            <li>
              <a href="#" class="btn d-table prev-feature">
                <span class="icon-arrow-left d-table-cell"></span>
              </a>
            </li>

            <li>
              <a href="#" class="btn d-table next-feature">
                <span class="icon-uniE603 d-table-cell"></span>
              </a>
            </li>

            <li>
              <?php 
                $page = get_page_by_title('Como funciona');
                if($page) {
                  $link = get_page_link($page->ID);
                } else {
                  $link = "#";
                }
              ?>
              <h5 class="text-low"><a href="<?php echo esc_html($link); ?>" title="Ver todas as churrasqueiras">veja como funciona nossa churrasqueira</a></h5>
            </li>
          </ul>
        </div>
      </article>

    </div>

  </section> <!-- nossos diferenciais -->