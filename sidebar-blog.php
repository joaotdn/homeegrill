      
      <aside id="post-sidebar" class="small-12 medium-4 columns">
        <!-- widget: post-author -->
        <?php
        global $post;
          $terms = get_the_terms($post->ID, 'colunista');
          $i = 0;
          foreach ($terms as $term) {
            $i++;
            if(1 == $i) {
              $foto = get_field('colunista_foto',$term);
              $site = get_field('colunista_site',$term);
              $tel = get_field('colunista_telefone',$term);
              $social = get_field('colunista_social',$term);
              $name = $term->name;
              $profissao = get_field('colunista_profissao',$term);
              $archive = get_term_link( $term, 'colunista' );
              $descricao = $term->description;
              $autor_id = $term->term_id;
            }
          }
        ?>
        <section id="hg-widget" class="small-12 left post-author hide-for-small">
          <h5 class="font-medium no-margin font-lite">Autor do post:</h5>
          <figure class="small-12 left">
            <div class="divide-10"></div>
            <a href="<?php echo $archive; ?>" class="small-12 left d-block author-thumb bg-cover" title="<?php echo $name; ?>" data-thumb="<?php echo $foto; ?>"></a>

            <figcaption class="small-12 left">
              <h5 class="lh-small font-large no-margin"><a href="<?php echo $archive; ?>" title="Rubens Maia"><?php echo $name; ?></a></h5>
              <?php if ($profissao): ?>
                <p class="lh-small font-medium"><?php echo $profissao; ?></p>
              <?php endif; ?>

              <?php if ($descricao): ?>
                <p class="no-margin font-medium"><strong>Resumo do perfil:</strong></p>
                <p class="lh-normal font-medium"><?php echo $descricao; ?></p>
              <?php endif; ?>
              
              <?php if ($site): ?>
                <h6 class="no-margin">Site: <a href="<?php echo $site; ?>" target="_blank" title=""><?php echo $site; ?></a></h6>
              <?php endif; ?>

              <?php if ($tel): ?>
                <h6 class="no-margin">Telefone: <span class="font-lite"><?php echo $tel; ?></span></h6>
              <?php endif; ?>

              <?php 
                if ($social): 
                echo '<h6 class="no-margin author-social-links">Redes sociais:';
                foreach ($social as $network):
              ?>
                <a href="<?php echo $network['colunista_social_link']; ?>" target="_blank" title="<?php echo $network['colunista_social_nome']; ?>"><?php echo $network['colunista_social_nome']; ?></a>
              <?php 
                endforeach; 
                echo "</h6>";
                endif; 
              ?>
            </figcaption>
          </figure>

          <div class="divide-20"></div>
        </section>

        <!-- widget: busca no blog -->
        <section id="hg-widget" class="small-12 left search-in-blog hide-for-small footer-newsletter">
          <h5 class="font-large text-low">Faça sua busca no blog</h5>

          <form action="<?php bloginfo('home'); ?>/" class="small-12 left" method="GET">
            <label class="no-margin small-8 left">
              <input type="text" class="small-12 left" placeholder="O que você procura?" name="s" id="s">
            </label>
            
            <label class="no-margin small-4 left">
              <input type="submit" value="buscar" class="button small-12 text-center">
            </label>
          </form>

          <div class="divide-20"></div>
        </section>

        <!-- widget: outros arquitetos -->
        <section id="hg-widget" class="small-12 left other-authors hide-for-small footer-newsletter">
          <h5 class="font-large text-low">Outros colunistas</h5>
          <div id="" class="small-12 left">
            <?php
              $i = 0;
              $terms = get_terms( 'colunista', 'hide_empty=0&exclude=' . $autor_id );
              foreach ($terms as $term):
                if(3 == $i) {
                  break;
                }
                $avatar = get_field('colunista_avatar',$term);
                $name = $term->name;
                $profissao = get_field('colunista_profissao',$term);
                $archive = get_term_link( $term, 'colunista' );
            ?>
            
            <div class="small-12 left">
              <a href="<?php echo esc_html($archive); ?>" class="d-block small-12 left author-link" title="Todos os posts de <?php echo $name; ?>">
                <div class="small-4 left author-avatar bg-cover" data-thumb="<?php echo $avatar; ?>"></div>

                <div class="author-name medium-8 large-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin"><?php echo $name; ?></h3>
                    <p class="no-margin white font-small"><?php echo $profissao; ?></p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>

              </a>
              <div class="divide-10"></div>
            </div>

            <?php
              $i++; endforeach;
              
              $page = get_page_by_title('Colunistas');
              if($page):
            ?>
            <h6 class="divide-20 text-low"><a href="<?php echo get_page_link($page->ID); ?>" title="Ver todos os colunistas">Ver todos os colunistas</a></h6>
            <?php endif; ?>
        </section>

        <!-- widget: newsletter blog -->
        <section id="hg-widget" class="small-12 left search-in-blog footer-newsletter">
          <h5 class="font-large text-low">Receba os novos posts por email</h5>
          <p class="font-lite font-small font-medium divide-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, ad, modi incidunt et molestiae aut reprehenderit asperiores rem.</p>

          <form action="https://foccus.mailee.me/go/add_contact_form" id="mailee-form" method="post" class="small-12 left" data-abide>
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
              <input type="email" class="small-12 left bg-ghost" placeholder="cadastre seu email" required pattern="email">
              <small class="error small-12 left">E-mail inválido</small>
            </label>
            
            <label class="no-margin small-4 left">
              <input type="submit" value="enviar" class="button small-12 text-center">
            </label>
          </form>

          <div class="divide-20"></div>
        </section>
        
        <div class="divide-20"></div>
      </aside>