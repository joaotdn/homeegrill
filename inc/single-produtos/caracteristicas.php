<!-- caracteristicas -->
  <div id="product-profile" class="small-12 left data-panel bg-white">
    <div class="row">
      <?php global $post; ?>

      <?php
        $intro_title = get_field('produto_caracteristicas_intro_titulo',$post->ID);
        $intro = get_field('produto_caracteristicas_intro',$post->ID);
      ?>
      <header class="columns">
        <?php if ($intro_title): ?>
          <h5><?php echo $intro_title; ?></h5>
        <?php endif ?>

        <?php if ($intro): ?>
          <h6 class="font-lite"><?php echo $intro; ?></h6>
        <?php endif ?>
      </header>

      <nav class="nav-espec small-12 columns">
        <ul class="no-margin no-bullet small-12 left">
          <?php
            $features = get_field('produto_caracteristicas',$post->ID);
            foreach ($features as $feature):
          ?>
          <li>
            <span><?php echo $feature['produto_caracteristica']; ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </div>
  <!-- // caracteristicas -->