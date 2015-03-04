   
   <!-- inicio rodape -->
   <footer id="footer" class="small-12 left bg-white">
    <div class="row">

      <section class="tiny-12 small-12 medium-4 large-4 columns">

        <div class="tiny-12 small-6 medium-12 left">
          <figure class="logo-footer small-12 left">
            <a href="<?php bloginfo('home'); ?>" title="Início">
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo-footer.png" alt="Home & Grill">
            </a>
          </figure>
          
          <nav class="social-footer left">
            <ul class="inline-list no-margin">
              <?php
                  /*
                    Social links
                   */
                  $twitter = get_option('nt_tw');
                  $facebook = get_option('nt_fb');
                  $youtube = get_option('nt_yt');
                  $instagram = get_option('nt_ins');

                  if ($youtube) {
                    printf('<li><a href="%s" class="d-block icon-youtube-play" title="Siga-nos no Youtube" target="_blank"></a></li>',$youtube);
                  }

                  if ($instagram) {
                    printf('<li><a href="%s" class="d-block icon-instagram2" title="Siga-nos no Instagram" target="_blank"></a></li>',$instagram);
                  }

                  if ($facebook) {
                    printf('<li><a href="%s" class="d-block icon-facebook" title="Siga-nos no Facebook" target="_blank"></a></li>',$facebook);
                  }

                  if ($twitter) {
                    printf('<li><a href="%s" class="d-block icon-twitter" title="Siga-nos no Twitter" target="_blank"></a></li>',$twitter);
                  }
              ?>
            </ul>
          </nav>

          <nav class="share-footer small-12 left">
          </nav>
        </div>

        <div class="tiny-12 small-6 medium-12 left">
          <div class="contact-footer small-12 left">

            <?php
               $whatsapp = get_option('nt_ws');
               if ($whatsapp) {
                 echo "<p class=\"no-margin font-small\"><strong>Whatsapp</strong></p>";
                 printf('<p class="font-small">%s</p>',$whatsapp);
               }

              $args = array( 'posts_per_page' => 2, 'post_type' => 'lojas' );
              $produtos_posts = get_posts( $args );
              foreach ($produtos_posts as $post): setup_postdata( $post );
                $tel = get_field('loja_telefone',$post->ID);
                $email = get_field('loja_email',$post->ID);
                $endereco = get_field('loja_endereco',$post->ID);
                $cidade = get_field('loja_cidade',$post->ID);
                $cep = get_field('loja_cep',$post->ID);
            ?>

            <p class="no-margin font-small"><strong><?php the_title(); ?></strong></p>
            
            <?php if ($tel): ?>
              <p class="no-margin font-small">Contato: <?php echo $tel; ?></p>
            <?php endif ?>

            <?php if ($endereco): ?>
              <p class="no-margin font-small"><?php echo $endereco; ?></p>
            <?php endif ?>

            <?php if ($cidade): ?>
              <p class="no-margin font-small"><?php echo $cidade; ?></p>
            <?php endif ?>

            <?php if ($cep): ?>
              <p class="no-margin font-small">Cep.: <?php echo $cep; ?></p>  
            <?php endif ?>

            <?php if ($email): ?>
              <p class="font-small"><?php echo $email; ?></p>
            <?php endif ?>

            <?php endforeach; ?>
            
          </div>
        </div>

      </section>

      <section class="tiny-12 small-6 medium-4 large-4 columns show-for-medium-up">
        
        <?php 
          if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-redape-centro') ) : 
            endif;
        ?>

      </section>

      <section class="tiny-12 small-6 medium-4 large-4 columns show-for-medium-up">

        <nav class="small-12 left footer-menu">
          <ul class="no-bullet">
            <?php
              $defaults = array(
                'theme_location'  => '',
                'menu'            => 'Menu rodapé',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'footer_menu',
                'before'          => '<h5 class="text-low no-margin">',
                'after'           => '</h5>',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu( $defaults );
            ?>
          </ul>
        </nav>

        <?php 
          if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('menu-rodape-direita') ) : 
            endif;
        ?>

        <div class="footer-newsletter small-12 left">
          <header>
            <h3 class="font-large">receba nossas novidades</h3>
          </header>

          <form action="https://foccus.mailee.me/go/add_contact_form" id="mailee-form" method="post" class="small-12 left">
            
            <input name='key' type='hidden' value='49d87b'>
            <?php
              $page = get_page_by_title("Dados enviados com sucesso");
              $link = get_page_link($page->ID);
            ?>
            <input name='url_ok' type='hidden' value='<?php echo esc_html( $link ); ?>'>
            <?php
              $page = get_page_by_title("Erro ao enviar os dados");
              $link = get_page_link($page->ID);
            ?>
            <input name='url_error' type='hidden' value='<?php echo esc_html( $link ); ?>'>
            
            <label class="no-margin small-8 left">
              <input type="email" name="email" class="small-12 left bg-white" placeholder="cadastre seu email" required>
            </label>
            
            <label class="no-margin small-4 left">
              <input type="submit" value="enviar" class="button small-12 text-center">
            </label>
          </form>
        </div>

      </section>

      <div class="small-12 columns copy-newsletter hide-for-medium-up">
      </div><?php //clone da newsletter ?>

    </div>  <!-- row -->
   </footer>
   <!-- fim rodape -->

   <!-- creditos -->
   <section id="credits" class="small-12 left">
     <div class="row rel">
       
        <p class="no-margin font-smallest small-12 medium-12 large-6 columns">
          <span class="left"><?php echo date('Y'); ?> Copyright - Todos os direitos reservados à home & GRILL.</span>
          <a href="http://foccus.cc/" class="right d-block icon-foccus" target="_blank" title="Desenvolvido por Foccus - Estratégia Digital"></a>
        </p>

        <figure class="abs products-footer icon-products show-for-large-up"></figure>

     </div><!-- // row -->
   </section>
   <!-- // creditos -->
    
    <?php
      /*
        Google Analytics
       */
      $ga = get_option('nt_ga');
      if($ga != '') {
        echo stripcslashes($ga);
      }

      $scripts = get_option('nt_saf');
      if($scripts) {
        echo stripcslashes($scripts);
      }
    ?>
    
    <!-- google translate -->
    <script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

    <!-- formulario da newsletter -->
    <script>
     document.getElementById('mailee-form').onsubmit = function(){
       re = /^[a-z0-9\.]+@([a-z0-9][a-z0-9]*[a-z0-9-]\.)+([a-z-]+\.)?([a-z-_]+)$/
       if(!this.email.value.match(re)) {
         alert("Por favor, preencha corretamente o email");
         this.email.focus();
         return false;
       }
       return true;
     }
    </script>

    <?php wp_footer(); ?>
  </body>
</html>