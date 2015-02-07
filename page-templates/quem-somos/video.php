<section id="about-video" class="small-12 left data-panel bg-ghost">
    <div class="row">
      <div class="divide-30"></div>

      <article class="small-12 large-3 columns">
        <hgroup class="small-12 left">
          <h4 class="text-low divide-30"><?php echo get_field('sobre_video_titulo',$post->ID); ?></h4>
          <h5 class="divide-30 font-large"><?php echo get_field('sobre_video_chamada',$post->ID); ?></h5>
        </hgroup>

        <p class="font-large"><?php echo get_field('sobre_video_texto',$post->ID); ?></p>
      </article>

      <figure class="small-12 large-8 columns">
        <?php echo get_field('sobre_video',$post->ID); ?>
      </figure>

    </div> <!-- //row -->  
  </section> <!-- video institucional -->