<?php
  /**
   * Template Name: Quem somos
   *
   * @package WordPress
   * @subpackage home_grill
   * @since home & GRILL 1.0
  */

  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');
?>
  
  <div class="row">
    
    <section id="blog-content" class="small-12 left data-panel">

      <header class="small-12 columns post-header">
        <h2 class="no-margin lh-normal text-low"><?php the_title(); ?></h2>
        <div class="divide-20"></div>

        <?php  get_template_part('content-share'); ?>

      </header><!-- //post-header -->
    
    </section>

  </div><!-- // row -->

  <section id="about-header" class="small-12 left rel">
    <figure class="about-thumb small-12 medium-6 abs p-right p-top full-height show-for-medium-up bg-cover" data-thumb="<?php getThumbUrl('full'); ?>"></figure>

    <div class="row full-height rel">
      <div class="small-12 medium-8 columns abs p-bottom p-left about-intro">
        
        <figure class="about-thumb small-12 medium-6 abs p-left full-height hide-for-tiny hide-for-medium-up bg-cover" data-thumb="<?php getThumbUrl('full'); ?>"></figure>

        <header class="left rel">
          <h4 class="left bg-white no-margin">evolução em churrasqueiras a gás</h4>
        </header>

        <article class="small-12 left rel">
          <p>Somos uma empresa brasileira, que tem por objetivo proporcionar às famílias do nosso país a oportunidade ímpar de viverem os prazeres do churrasco e da boa gastronomia em seu próprio lar, através das churrasqueiras a gás home & GRILL e o seus respectivos acessórios, desenvolvidos com o fim específico de oferecer praticidade, qualidade, economia, eficiência e comodidade ao novo chef da família.</p>
          <p>Contamos com uma equipe de colaboradores capacitados para oferecer aos nossos clientes todo suporte de que necessitam, e temos como meta não apenas a sua satisfação integral em relação aos serviços e produtos adquiridos, mas também manter uma ligação permanente com o que é de mais alta importância para nós: você.</p>
        </article>
      </div>
    </div>
  </section> <!-- cabeçalho -->

  <section id="about-video" class="small-12 left data-panel bg-ghost">
    <div class="row">
      <div class="divide-30"></div>

      <article class="small-12 large-3 columns">
        <hgroup class="small-12 left">
          <h4 class="text-low divide-30">Vídeo institucional</h4>
          <h5 class="divide-30 font-large">Sofisticação e praticidade em todos os momentos. Você merece!</h5>
        </hgroup>

        <p class="font-large">O sabor da carne preparada na home & GRILL é único, assim como prazer de fazer churrasco para pessoas especiais. Tenha mais sofisticação e praticidade em seu espaço gourmet com home & GRILL.</p>
      </article>

      <figure class="small-12 large-8 columns">
        <iframe src="//www.youtube.com/embed/C11RmvCvHtI?enablejsapi=1&amp;rel=0&amp;controls=1&amp;autoplay=0&amp;showinfo=0" frameborder="0" allowfullscreen="" width="100%" height="100%"></iframe>
      </figure>

    </div> <!-- //row -->  
  </section> <!-- video institucional -->

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
      
      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/diferenciais.png" data-cycle-pager-template="<span>conforto</span>"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quemsomos-expertise.png" data-cycle-pager-template="<span>expertise</span>"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quemsomos.png" data-cycle-pager-template="<span>performance</span>"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-sabor.png" data-cycle-pager-template="<span>sabor</span>"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-design.png" data-cycle-pager-template="<span>design</span>"></figure>

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

          <div class="small-12 left">
            <h5 class="divide-40">O prazer de um ótimo churrasco no conforto do seu lar</h5>
            <p class="font-large">Na home & GRILL, possuímos uma variedade de churrasqueiras a gás inovadoras e acessórios pra espaços gourmet, produtos totalmente voltados para pessoas que desejam usufruir dos prazeres do churrasco e da boa gastronomia em seu próprio lar, com muita harmonia e descontração, sem deixar de lado a simplicidade e a sofisticação desses ambientes.</p>
          </div>

          <div class="small-12 left">
            <h5 class="divide-40">Produto feito por quem sabe</h5>
            <p class="font-large">Todo componente em uma churrasqueira a gás home & GRILL é construído para trabalhar em conjunto e oferecer o mais moderno e atualizado sistema de cozimento. Desde as rodas até a tampa, cada componente foi desenhado e feito por trabalhadores experientes, pessoas entusiasmadas e conhecedoras da arte de grelhar.</p>
          </div>

          <div class="small-12 left">
            <h5 class="divide-40">Um churrasqueira de alta performance</h5>
            <p class="font-large">Nossos produtos foram construídos para durar. Neles, você encontrará qualidade, durabilidade, design e eficiência. Com as churrasqueiras a gás home & GRILL, você terá a certeza de que elas darão conta de tudo que for colocado dentro para grelhar e/ou assar. Já com os nossos acessórios, seu espaço gourmet terá mais praticidade e conforto, além de tornar o ambiente mais leve e sofisticado.</p>
          </div>

          <div class="small-12 left">
            <h5 class="divide-40">No coração de uma home & GRILL arte de grelhar</h5>
            <p class="font-large">Nós acreditamos que a arte de grelhar ou assar signifique um encontro relaxante ao redor da churrasqueira, seja em família ou entre amigos saboreando uma deliciosa refeição. O nosso sistema de cozimento proporciona a você a habilidade para grelhar/assar quase tudo na sua churrasqueira em qualquer estilo que você deseja, direta ou indiretamente, qualquer tipo de alimento, de frutas às carnes mais suculentas. Não importa o método que você utilize ou experiência que você tenha, nós proporcionamos a você um sistema de cozimento para que o trabalho seja feito. As churrasqueiras a gás home & GRILL são a escolha perfeita para os amantes da gastronomia e que não dispensam um alimento saboroso.</p>
          </div>

          <div class="small-12 left">
            <h5 class="divide-40">Um design de ponta</h5>
            <p class="font-large">Toda churrasqueira home & GRILL foi projetada para oferecer a melhor performance e durabilidade, mas não apenas isso. Os engenheiros prestaram atenção especial ao design e à funcionalidade. Dentro e fora de toda a home & GRILL você encontrará as características que farão seu grill funcionar da melhor forma possível, durar mais e proporcionar a você momentos inesquecíveis de harmonia e descontração junto à família e amigos.</p>
          </div>

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
              <h5 class="text-low"><a href="#" title="Ver todas as churrasqueiras">veja como funciona nossa churrasqueira</a></h5>
            </li>
          </ul>
        </div>
      </article>

    </div>

  </section> <!-- nossos diferenciais -->

  <section id="our-features" class="small-12 left rel">
    
    <div class="small-11 medium-7 large-6 abs p-left p-top bg-rows">
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
      
      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-fabrica4.png"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-fabrica5.png"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-fabrica.png"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-fabrica2.png"></figure>

      <figure class="small-12 left full-height bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/quem-somos-fabrica3.png"></figure>

    </div>

    <div class="row rel">
      <header class="small-12 columns bg-rows-header">
        <div class="small-12 left d-table">
          <h3 class="white no-margin d-table-cell">fábrica</h3>
        </div>
        <div class="small-12 left d-table">
          <h5 class="small-12 d-table-cell white">Tecnologia a favor do seu churrasco</h5>
        </div>
      </header>

      <article class="small-12 medium-9 large-8 columns nav-content-features bg-ghost">

        <div class="small-12 left">
          <p class="font-large">Com rigoroso controle de qualidade e profissionais capacitados e focados em desenvolver um produto que vai além da beleza e sofisticação, as churrasqueiras a gás home & GRILL são desenvolvidas para oferecer aos nossos clientes praticidade, qualidade, economia, eficiência e comodidade</p>
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
      
      <a href="#" title="" class="small-12 medium-9 large-8 columns end d-block more-pics white">
        <span class="left">Visão geral do parque fabril da home & GRILL</span>
        <span class="right"><i class="icon-chevron-circle-right hide-for-tiny"></i></span>
      </a>
    </div>

  </section> <!-- fabrica -->

  <section id="about-links" class="small-12 left data-panel bg-white">
    
    <nav class="row" role="navigation">
      
      <figure class="small-12 medium-4 columns">
        <a href="#" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/nossaslojas.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="" class="white">Nossas lojas</a></h5>
            <p class="font-medium white no-margin">O showroom completo pra você</p>
          </article>
        </figcaption>

        <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>

      <figure class="small-12 medium-4 columns">
        <a href="#" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/pontosdevenda.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="" class="white">Nossos pontos de venda</a></h5>
            <p class="font-medium white no-margin">Onde encontrar home & GRILL</p>
          </article>
        </figcaption>

        <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>

      <figure class="small-12 medium-4 columns">
        <a href="#" class="d-block small-12 left about-link-thumb bg-cover" data-thumb="http://www.homeegrill.com.br/site/images/quemsomos/trabalheconosco.png"></a>

        <figcaption class="small-12 left bg-oil d-table">
          <article class="small-12 d-table-cell">
            <h5 class="font-medium no-margin"><a href="#" title="" class="white">Trabalhe aqui</a></h5>
            <p class="font-medium white no-margin">Junte-se a nossa equipe</p>
          </article>
        </figcaption>

        <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">ver agora <span class="icon-chevron-circle-right font-medium"></span></a>
      </figure>

    </nav>

  </section> <!-- links -->

  <!-- inicio tab depoimentos -->
  <nav id="showroom-tab" class="small-12 left bg-oil">
      <div class="row">
        <div class="small-12 columns">
          
          <ul class="inline-list tab-options">
            <li>
              <h4 class="font-large"><a href="#" class="d-block silver text-low active" title="">Depoimentos</a></h4>
            </li>
          </ul>

          <div id="nav-posts" class="small-12 left carousel">
            
            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Receitas</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="https://static.groupon.com.br/00/86/1337869288600.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">Customizing the grid is easy with the Sass variables provided in the options</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://www.estrategista.net/wp-content/uploads/2013/07/pic_andre.jpg"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Receitas</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="http://i0.statig.com.br/bancodeimagens/bb/lo/cm/bblocmnyhpy562t3bzutfq7aj.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">You can further customize your grid columns using the provided options in the</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://jurnalul.ro/thumbs/big/2012/12/05/incredibil-nuvela-mendebilul-de-cartarescu-renegata-de-autor-materie-obligatorie-la-clasa-a-cincea-18436872.JPG"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Receitas</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="http://luxurylaunches.com/wp-content/uploads/2012/12/fireplace.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">Using these source ordering classes, you can shift columns around classes</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://cyfroteka.pl/images/authors/autor_Zygmunt_Miloszewski.jpg"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Receitas</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="http://s2.hubimg.com/u/2677915_f520.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">This means if you place sub-navigation below main content on small displays</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://economics.mit.edu/timages/11"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Coluna</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="http://www.furniturefashion.com/image/2009/06/outdoor%20grill%20and%20refrigerator.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">Prefix push/pull with the size of the device you want to apply the styles to</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://economics.mit.edu/timages/11"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

            <div class="item">
              <figure class="small-12 left rel">
                <a href="#" title="" class="d-block abs bg-white block-url text-low font-bold get-cat">Institucional</a>
                <div class="small-12 left container-thumb">
                  <a href="#" class="blog-thumb d-block small-12 left bg-cover" title="" data-thumb="http://www.investtimoveis.com.br/blog/wp-content/uploads/2013/11/cozinhas-modernas-10.jpg"></a>
                </div>
              </figure>

              <article class="post-title fix small-12 left block-url bg-white d-table">
                <h2 class="font-large no-margin d-table-cell">
                  <a href="#" title="">Lorem ipsum dolor sit amet, consectetur adipisicing elit ipsum dolor</a>
                </h2>
              </article>

              <a href="#" class="d-block small-12 left author-link">
                <div class="small-4 left author-avatar bg-cover" data-thumb="http://www.artofwrestling.cz/wp-content/uploads/2014/04/Mickie-James-200x300.jpg"></div>

                <div class="author-name small-6 left d-table">
                  <div class="small-12 d-table-cell">
                    <h3 class="yellow font-large no-margin">Administração</h3>
                    <p class="no-margin white font-small">Equipe Home & Grill</p>
                  </div>
                </div>

                <span class="small-2 d-table left go-post">
                  <span class="icon-chevron-circle-right d-table-cell text-center"></span>
                </span>
              </a>
            </div>

          </div>
          
          <!-- controles do carrossel -->
          <div class="small-12 left showroom-controls">
            <ul class="inline-list no-margin">
              <li>
                <a href="#" class="btn d-table prev-posts">
                  <span class="icon-arrow-left d-table-cell"></span>
                </a>
              </li>
              <li>
                <a href="#" class="btn d-table next-posts">
                  <span class="icon-uniE603 d-table-cell"></span>
                </a>
              </li>
              <li>
              </li>
            </ul>
          </div>
        </div><!-- coluna -->
      </div><!-- row -->
  </nav>
  <!-- fim tab depoimentos -->

<?php
  //footer
  get_footer();
?>
