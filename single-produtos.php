<?php
  //Header
  include_once "header.php";

  //breadcrumb
  include_once "content-breadcrumb.php";
  ?>
  
  <div id="the-content" class="row">
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal">Compact premium hg-2b de embutir</h2>
      <div class="divide-20"></div>

      <nav class="share-post small-12 left">
        <img src="media/share.png" alt="" class="left">
      </nav><!-- // share buttons -->
    </header><!-- //post-header -->

    <!-- informações gerais dos produtos -->
    <section id="#the-product" class="small-12 left">
      
      <!-- galeria com zoom -->
      <div class="small-12 medium-8 large-8 columns">
        <div id="product-gallery" class="small-12 left rel">
          <nav class="list-small-thumbs rel left">
            
            <a href="#" class="white prev-default abs small-12 p-top p-left small-thumb-nav small-thumb-next d-table text-center">
              <span class="icon-arrow-up font-xlarge d-table-cell"></span>
            </a>
            <a href="#" class="white prev-default abs small-12 p-bottom p-left small-thumb-nav small-thumb-prev d-table text-center">
              <span class="icon-arrow-down font-xlarge d-table-cell"></span>
            </a>
            
            <ul class="no-margin no-bullet vertical-slider cycle-slideshow vertical"
              data-cycle-fx='carousel'
              data-cycle-timeout='0'
              data-cycle-next=".small-thumb-next"
              data-cycle-prev=".small-thumb-prev"
              data-cycle-carousel-visible='5'
              data-cycle-carousel-vertical='true'
              data-cycle-slides="> li"
              data-allow-wrap="false"
            >
              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/3.png">
                  <span class="border-mask small-12 abs active"></span>
                  <img src="media/thp1.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/4.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp2.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/2.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp3.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/3.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp4.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/2.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp2.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/2.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp3.png" alt="">
                </a>
              </li>

              <li>
                <a href="#" class="d-block small-12 left rel" data-post-thumbnail="http://www.homeegrill.com.br/galerias/17/3.png">
                  <span class="border-mask small-12 abs"></span>
                  <img src="media/thp4.png" alt="">
                </a>
              </li>
            </ul>
          </nav>

          <figure id="product-canvas" class="left text-center d-table rel">
            <div class="zoom-image">
              <img src="http://www.homeegrill.com.br/galerias/17/3.png" alt="">
            </div>

            <figcaption class="small-12 abs p-bottom p-left text-right">
              <span class="font-bold text-low">clique e arraste para ver o zoom <i class="icon-glass d-block right"></i></span>
            </figcaption>
          </figure>
        </div>
      </div>
      <!-- // galeria com zoom -->

      <!-- informações sobre o produto -->
      <div id="product-info" class="small-12 medium-4 large-4 columns rel">
        <header class="divide-30">
          <h5 class="no-margin">Para os que desejam um grelhado excepcional e não abrem mão da sofisticação!</h5 class="no-margin">
        </header>

        <article class="divide-30">
          <h2 class="price oil no-margin lh-normal">R$ 2.800,00</h2>
          <p class="no-margin lh-normal font-small oil">À vista</p>
          <p class="no-margin lh-normal font-small oil">Ou em <strong>até 12 x de 260,00</strong> no cartão de crédito</p>
          <p class="divide-30">
            <h3>
              <a href="#" class="button-success small-12 left text-left text-low font-xlarge">
                <span class="left">Comprar agora</span>
                <span class="d-block left icon-cart2"></span>
              </a>
            </h3>
          </p>
        </article>

        <footer class="info-footer abs p-bottom small-12">
          <nav class="about-product">
            <ul class="no-bullet no-margin">
              <li>
                <p class="font-medium font-bold divide-10"><a href="#" class="font-bold"><i class="icon-help d-block left"></i> Dúvidas sobre o seu projeto?</a></p>
              </li>

              <li>
                <p class="font-medium font-bold divide-10"><a href="#" class="font-bold"><i class="icon-location2 d-block left"></i> Veja nossos pontos de venda</a></p>
              </li>

              <li>
                <p class="font-medium font-bold divide-10"><i class="icon-calendar-o d-block left"></i> Garantia de 3 anos</p>
              </li>

              <li>
                <p class="font-medium font-bold no-margin"><i class="icon-prazo d-block left"></i> Prazo de entrega: até 20 dias úteis</p>
              </li>
            </ul>
          </nav>
        </footer>
      </div>
      <!-- // informações sobre o produto -->
      
      <div class="divide-30"></div>
    </section>
    <!-- // informações gerais dos produtos -->

  </div><!-- // the-content -->

  <?php
  //footer
  include_once "footer.php";
?>
