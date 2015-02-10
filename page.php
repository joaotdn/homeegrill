<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');
?>

  <section id="blog-content" class="small-12 left data-panel">
    <div class="row">
      
      <article class="small-12 medium-8 large-8 left">
        
        <header class="small-12 columns post-header">
          <h2 class="no-margin lh-normal"><?php the_title(); ?></h2>
          <div class="divide-20"></div>

          <?php  get_template_part('content-share'); ?>

        </header><!-- //post-header -->

        <article class="small-12 left">
          
          <?php 
            if (have_posts()) : while (have_posts()) : the_post(); 
                the_content(); 
              endwhile; 
            endif;
          ?>
          
          <div class="divide-20"></div>
        </article>

        <footer class="small-12 columns">
          
        <?php  get_template_part('content-share'); ?>
          
        </footer>
      
      </article><!-- // artigo -->

      <aside id="sidebar" class="page-sidebar small-12 medium-4 columns">
        <!-- widget: ligue para gente -->
        <div id="widget" class="small-12 left call-we">
          <figure class="small-12 left bg-cover rel" data-thumb="<?php echo get_template_directory_uri(); ?>/images/atendente.png">
            <figcaption class="abs p-top p-left bg-white font-bold font-large">Ligue para nós</figcaption>
          </figure>
          <section class="small-12 left bg-white">

            <?php
              $args = array( 'posts_per_page' => 2, 'post_type' => 'lojas' );
              $produtos_posts = get_posts( $args );
              foreach ($produtos_posts as $post): setup_postdata( $post );
                $tel = get_field('loja_telefone',$post->ID);
                $email = get_field('loja_email',$post->ID);
            ?>

            <h5 class="no-margin"><?php the_title(); ?></h5>
            
            <?php if ($tel): ?>
              <p class="no-margin"><?php echo $tel; ?></p>
            <?php endif ?>

            <?php if ($email): ?>
              <p class="font-small no-margin"><?php echo $email; ?></p>
            <?php endif ?>

            <div class="divide-20"></div>

            <?php 
              endforeach;
              $whatsapp = get_option('nt_ws');
               if ($whatsapp) {
                 echo "<p class=\"no-margin font-small\"><strong>Whatsapp</strong></p>";
                 printf('<p class="font-small">%s</p><div class="divide-20"></div>',$whatsapp);
               }
            ?>

          </section>
        </div>
      </aside>

    </div><!-- // row -->
  </section>

<?php
  //footer
  get_footer();
?>
