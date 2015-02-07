  
  <section id="about-header" class="small-12 left rel">
    <figure class="about-thumb small-12 medium-6 abs p-right p-top full-height show-for-medium-up bg-cover" data-thumb="<?php getThumbUrl('full'); ?>"></figure>

    <div class="row full-height rel">
      <div class="small-12 medium-8 columns abs p-bottom p-left about-intro">
        
        <figure class="about-thumb small-12 medium-6 abs p-left full-height hide-for-tiny hide-for-medium-up bg-cover" data-thumb="<?php getThumbUrl('full'); ?>"></figure>

        <header class="left rel">
          <h4 class="left bg-white no-margin"><?php echo get_field('sobre_titulo_cabecalho',$post->ID); ?></h4>
        </header>

        <article class="small-12 left rel">
          <p><?php echo get_field('sobre_cabecalho',$post->ID); ?></p>
        </article>
      </div>
    </div>
  </section> <!-- cabeçalho -->