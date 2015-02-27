<section id="our-features" class="small-12 left rel">
    
    <div class="small-12 medium-7 large-6 abs p-left p-top bg-rows">
      <div class="bg-oil small-12 left"></div>
      <div class="bg-oil-light small-12 left"></div>
    </div>

    <div class="small-11 medium-5 large-6 abs p-right p-top full-height features-thumb-cycle cycle-slideshow"
      data-cycle-fx="tileBlind"
      data-cycle-timeout="0"
      data-cycle-slides="> figure"
      data-cycle-prev=".prev-pic"
      data-cycle-next=".next-pic"
    >
      <?php
        $gallery = get_field('sobre_fabrica',$post->ID);
        foreach($gallery as $img):
      ?>
      <figure class="small-12 left full-height bg-cover" data-thumb="<?php echo $img['sobre_fabrica_foto']; ?>"></figure>
      <?php endforeach; ?>

    </div>

    <div class="row rel">
      <header class="small-12 columns bg-rows-header">
        <div class="small-12 left d-table">
          <h3 class="white no-margin d-table-cell">fábrica</h3>
        </div>
        <div class="small-12 left d-table">
          <h5 class="small-12 d-table-cell white"><?php echo get_field('sobre_fabrica_cabecalho',$post->ID); ?></h5>
        </div>
      </header>

      <article class="small-12 medium-9 large-8 columns end nav-content-features bg-ghost">

        <div class="small-12 left">
          <p class="font-large"><?php echo get_field('sobre_fabrica_texto',$post->ID); ?></p>
        </div>

        <div class="small-12 left showroom-controls">
          <ul class="inline-list no-margin">
            <li>
              <a href="#" class="btn d-table prev-pic">
                <span class="icon-arrow-left d-table-cell"></span>
              </a>
            </li>

            <li>
              <a href="#" class="btn d-table next-pic">
                <span class="icon-uniE603 d-table-cell"></span>
              </a>
            </li>

            <li>
              
            </li>
          </ul>
        </div>
      </article>
      
      <a href="#" title="" class="small-12 medium-9 large-8 columns end d-block more-pics white prev-default no-cursor">
        <span class="left">Visão geral do parque fabril da home & GRILL</span>
        <span class="right"><i class="icon-chevron-circle-right hide-for-tiny"></i></span>
      </a>
    </div>

  </section> <!-- fabrica -->