<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home & Grill</title>
    <link href='http://fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style.css" />
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  </head>
  <body>
    
    <!-- offcanvas menu -->
    <?php
      /*
        Implementa clone do menu principal
       */
    ?>
    <a href="#" class="close-offcanvas hide-offcanvas small-12"></a>

    <nav id="offcanvas-menu" class="hide-for-medium-up">
      <div class="mo-menu-container small-12 left">
        <div class="small-12 left">
          <a href="#" class="close-offcanvas button-submit right no-margin">
            <span class="icon-close"></span>
          </a>
        </div>
      </div>
    </nav>

    <!-- Inicio header -->
    <header id="header" class="row rel">
      
      <figure class="small-5 medium-3 large-2 columns logo">
        <h1 class="no-margin">
          <a href="#" title="Início" class="d-block">
            <img src="images/logo.png" alt="Home & Grill">
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
        <h2 class="font-medium font-lite no-margin left contact-top hide-for-small-only"><span class="show-for-large-up left">Ligue agora:</span> João Pessoa <strong>(83) 9999.0000</strong> • São Paulo <strong>(83) 0000.0000</strong></h2>
        
        <nav class="select-lang clang left hide-for-small-only" role="navigation">
          <ul class="inline-list no-margin lh-normal">
            <li><a href="#" title="Português brasileiro" class="active"><strong>Brasil</strong></a></li>
            <li><a href="#" title="English"><strong>English</strong></a></li>
          </ul>
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
              <h3 class="no-margin">
                <a href="#" title="Loja virtual" class="button-glass no-margin font-xlarge">
                  <i class="d-block left icon-container small-no-margin">
                    <i class="icon-cart d-block"></i>
                  </i>
                  <span class="show-for-medium-up">loja virtual</span>
                </a>
              </h3>
            </li>

            <li class="hide-for-small-only">
              <h3 class="no-margin">
                <a href="#" title="Ligamos pra você" aria-controls="drop-subscribe" data-options="align:bottom" data-dropdown="drop-subscribe" class="button-glass no-margin font-xlarge">
                  <i class="d-block left icon-container">
                    <i class="icon-chat d-block"></i>
                  </i>
                  <span>ligamos pra você</span>
                </a>
              </h3>
            </li>

            <li>
              <h3 class="no-margin">
                <a href="#" title="Faça seu projeto" class="button-glass no-margin font-xlarge make-project">
                  <i class="d-block left icon-container tiny-no-margin">
                    <i class="icon-pencil d-block"></i>
                  </i>
                  <span>Faça seu projeto</span>
                </a>
              </h3>
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
          </ul>

          <ul class="inline-list social-top no-margin abs">
            <li>
              <a href="#" class="d-block icon-youtube-play" title="" target="_blank"></a>
            </li>
            <li>
              <a href="#" class="d-block icon-instagram2" title="" target="_blank"></a>
            </li>
            <li>
              <a href="#" class="d-block icon-facebook" title="" target="_blank"></a>
            </li>
            <li>
              <a href="#" class="d-block icon-twitter" title="" target="_blank"></a>
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
            <li>
              <a href="#" class="d-block" title="Seguir no Youtube" target="_blank">
                <span class="icon-youtube-play"></span> <span class="font-medium text-up">Seguir no Youtube</span>
              </a>
            </li>
            <li>
              <a href="#" class="d-block" title="Seguir no Instagram" target="_blank">
                <span class="icon-instagram2"></span> <span class="font-medium text-up">Seguir no Instagram</span>
              </a>
            </li>
            <li>
              <a href="#" class="d-block" title="Seguir no Facebook" target="_blank">
                <span class="icon-facebook"></span> <span class="font-medium text-up">Seguir no Facebook</span>
              </a>
            </li>
            <li>
              <a href="#" class="d-block" title="Seguir no Twitter" target="_blank">
                <span class="icon-twitter"></span> <span class="font-medium text-up">Seguir no Twitter</span>
              </a>
            </li>
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
            <li>
              <a href="#">Churrasqueiras</a>

              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">acessórios</a>

              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">móveis</span></a>
              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">blog</span></a>
              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">aprenda</span></a>
              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>

            <li>
              <a href="#">quem somos</a>
            </li>

            <li>
              <a href="#">contato</span></a>
              <ul class="submenu">
                <li>
                  <a href="#">Churrasqueira a gás</a>
                </li>
              </ul>
            </li>
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