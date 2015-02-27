<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>

    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/vnd.microsoft.icon"/>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-ico"/>
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>

    <script>
      //<![CDATA[
      var getData = {
        'urlDir':'<?php bloginfo('template_directory'); ?>/',
        'ajaxDir':'<?php echo stripslashes(get_admin_url()).'admin-ajax.php'; ?>'
      }
      //]]>
    </script>

    <?php
      $scripts = get_option('nt_sah');
      if($scripts) {
        echo stripcslashes($scripts);
      }
    ?>

    <?php wp_head(); ?>
  </head>
  <body id="body-wrapper">
    
    <!-- offcanvas menu -->
    <a href="#" class="close-offcanvas hide-offcanvas small-12"></a>

    <nav id="offcanvas-menu" class="hide-for-medium-up">
      <div class="mo-menu-container small-12 left">
        <div class="small-12 left">
          <a href="#" class="close-offcanvas button-submit right no-margin">
            <span class="icon-close"></span>
          </a>
        </div>

        <ul>
        <?php
          $defaults = array(
            'theme_location'  => '',
            'menu'            => 'Menu principal',
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'main_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '%3$s',
            'depth'           => 0,
            'walker'          => ''
          );
          wp_nav_menu( $defaults );
        ?>
      </div>
    </nav>

    <!-- Inicio header -->
    <header id="header" class="row rel">
      
      <figure class="small-5 medium-3 large-2 columns logo">
        <h1 class="no-margin">
          <a href="<?php bloginfo('home'); ?>" title="Início" class="d-block">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Home & Grill">
          </a>
        </h1>
      </figure>

      <h3 class="small-5 columns right hide-for-medium-up get-mo-menu">
        <a href="#" class="button-submit right close-offcanvas" title="Menu principal">
          <span class="left fix hide-for-tiny">menu</span>
          <i class="icon-three-bars left"></i>
        </a>
      </h3><!-- menu mobile button -->

      <section class="top-info right">
        <h2 class="font-medium font-lite no-margin left contact-top show-for-medium-up">
          <span class="show-for-large-up left">Ligue agora:</span>
          <?php
            $tel = get_option('nt_head_contact');
            if($tel) {
              echo stripcslashes($tel);
            }
          ?>
        </h2>
        
        <nav class="select-lang clang left show-for-medium-up" role="navigation">
          <!--<ul class="inline-list no-margin lh-normal">
            <li><a href="#" title="Português brasileiro" class="active" data-language="pt"><strong>Brasil</strong></a></li>
            <li><a href="#" title="English" onClick="traduzir('body-wrapper','body-wrapper','en');" data-language="en"><strong>English</strong></a></li>
          </ul>-->
          
          <ul class="inline-list no-margin lh-normal">
            <li><strong><?php echo do_shortcode('[glt language="Portuguese" label="Brasil"]'); ?></strong></li>
            <li><strong><?php echo do_shortcode('[glt language="English" label="English"]'); ?></strong></li>
          </ul>

          <?php // echo do_shortcode('[google-translator]'); ?>
        </nav><!-- selecionar lingua -->
        
        <nav class="menu-subscriber left">
          
          <ul class="inline-list menu-top no-margin left">
            
            <li class="hide-for-medium-up">
              <h3 class="no-margin">
                <a href="#" title="" class="button-glass no-margin font-xlarge toggle-lang">
                  <i class="d-block left icon-container small-no-margin">
                    <i class="icon-en d-block"></i>
                  </i>
                </a>
              </h3>
            </li>
            
            <li class="no-margin">
              <?php
                // Link para o e-commerce
                $shop_link = get_option('nt_shop_link');
                if($shop_link):
              ?>
              <h3 class="no-margin font-large">
                <a href="<?php echo $shop_link; ?>" target="_blank" title="Loja virtual" class="button-glass no-margin font-large">
                  <i class="d-block left icon-container small-no-margin">
                    <i class="icon-cart d-block"></i>
                  </i>
                  <span class="show-for-medium-up">loja virtual</span>
                </a>
              </h3>
              <?php endif; ?>
            </li>

            <li class="hide-for-small-only">
              <h3 class="no-margin font-large">
                <a href="#" title="Ligamos pra você" aria-controls="drop-subscribe" data-options="align:bottom" data-dropdown="drop-subscribe" class="button-glass no-margin font-large">
                  <i class="d-block left icon-container">
                    <i class="icon-chat d-block"></i>
                  </i>
                  <span>ligamos pra você</span>
                </a>
              </h3>
            </li>

            <li>
              <?php
                $page = get_page_by_title('Faça seu projeto');
                if($page):
              ?>
              <h3 class="no-margin font-large">
                <a href="<?php echo esc_html(get_page_link($page->ID)); ?>" title="Faça seu projeto" class="button-glass no-margin font-large make-project">
                  <i class="d-block left icon-container tiny-no-margin">
                    <i class="icon-pencil d-block"></i>
                  </i>
                  <span>Faça seu projeto</span>
                </a>
              </h3>
              <?php endif; ?>
            </li>

            <li class="show-for-tiny">
              <h3 class="no-margin">
                <a href="#" title="Redes sociais" aria-controls="drop-share" aria-expanded="false" data-options="align:left" data-dropdown="drop-share" class="button-glass menu white no-margin font-xlarge make-project">
                  <i class="d-block left icon-container tiny-no-margin">
                    <i class="icon-share2 d-block"></i>
                  </i>
                </a>
              </h3>
            </li>

            <li class="show-for-medium-up">
              <ul class="inline-list social-top no-margin">
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
            </li>
          </ul>

          <!-- Dropdowns -->
          <div id="drop-subscribe" data-dropdown-content class="f-dropdown small content show-for-medium-up auto-jump" aria-hidden="true" tabindex="-1">
            <form action="" data-abide>
              <p class="font-small small-12 columns white">Digite seu nome e telefone aqui e a <strong>Home & Grill liga pra você:</strong></p>
              <p class=" small-12 columns name-field">
                <label>
                  <input type="text" placeholder="Seu nome" required pattern="alpha">
                  <small class="error">(Obrigatório) Não é permitido números</small>
                </label>
              </p>
              <p class=" small-4 columns">
                <input type="text" placeholder="DD" class="mk-dd" required pattern="number">
              </p>
              <p class=" small-8 columns">
                <input type="text" placeholder="Número do telefone" class="mk-phone" maxlength="8" required pattern="number">
              </p>
              <p class="small-12 columns ">
                <button class="button-submit" type="submit">ligue me <span class="icon-chevron-circle-right"></span></button>
              </p>
            </form>
          </div><!-- drop ligamos pra você -->
          
          <ul id="drop-share" class="small f-dropdown show-for-tiny" data-dropdown-content>
            <?php
              if ($youtube) {
                printf('<li><a href="%s" class="d-block small-12 left" title="Seguir no Youtube" target="_blank"><span class="left icon-youtube-play"></span> <span class="left font-medium text-up">Seguir no Youtube</span></a></li>',$youtube);
              }

              if ($instagram) {
                printf('<li><a href="%s" class="d-block small-12 left" title="Seguir no Instagram" target="_blank"><span class="left icon-instagram2"></span> <span class="left font-medium text-up">Seguir no Instagram</span></a></li>',$instagram);
              }

              if ($facebook) {
                printf('<li><a href="%s" class="d-block small-12 left" title="Seguir no Facebook" target="_blank"><span class="left icon-facebook"></span> <span class="left font-medium text-up">Seguir no Facebook</span></a></li>',$facebook);
              }

              if ($twitter) {
                printf('<li><a href="%s" class="d-block small-12 left" title="Seguir no Twitter" target="_blank"><span class="left icon-twitter"></span> <span class="left font-medium text-up">Seguir no Twitter</span></a></li>',$twitter);
              }
            ?>
          </ul><!-- drop redes sociais (320px) -->
        </nav>
      </section>
    </header>
    <!-- fim header -->

    <!-- inicio menu principal -->
    <nav id="main-menu" class="small-12 left show-for-medium-up rel">
      <div class="row">
        <div class="small-12 columns main-menu-container">

          <ul>
            <?php
              $defaults = array(
                'theme_location'  => '',
                'menu'            => 'Menu principal',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'main_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'walker'          => ''
              );
              wp_nav_menu( $defaults );
            ?>
          </ul>

        </div>
      </div><!-- //row -->
    </nav>

    <div class="submenu-bar small-12 left show-for-medium-up">
      <div class="row"><div class="submenu-container small-12 columns"></div></div>
    </div>

    <div class="small-12 left header-lines">
      <div class="line-1 small-1"></div>
      <div class="line-2 small-2"></div>
      <div class="line-3 small-2"></div>
      <div class="line-4 small-3"></div>
      <div class="line-5 small-2"></div>   
      <div class="line-6 small-2"></div>   
    </div>
    <!-- fim menu principal -->