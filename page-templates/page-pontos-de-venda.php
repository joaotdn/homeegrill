<?php
  //Header
  include_once "header.php";

  //breadcrumb
  include_once "content-breadcrumb.php";
  ?>
  
  <div class="row">
    
    <section id="blog-content" class="small-12 left data-panel">

      <header class="small-12 columns post-header">
        <h2 class="no-margin lh-normal text-low">Pontos de venda</h2>
        <div class="divide-20"></div>

        <nav class="share-post small-12 left show-for-medium-up">
          <img src="media/share.png" alt="" class="left">
        </nav><!-- // share buttons -->

      </header><!-- //post-header -->

      <section class="small-12 left">
        <div class="tiny-12 small-6 medium-4 columns end select-writter">
          <nav class="small-12 left">
            <h5 class="no-margin small-12 left font-medium" data-dropdown="list-states" aria-controls="list-states" aria-expanded="false">
              <span class="">Todos os estados</span>
              <i class="icon-arrow-down right white font-bold"></i>
            </h5>
          </nav>

          <div class="divide-20"></div>
        </div>

        <ul id="list-states" class="f-dropdown bg-white small" data-dropdown-content aria-hidden="true" tabindex="-1">
          <li><a href="#" title="Todos" class="font-medium small-12" data-select-state="todos">Todos os estados</a></li>
        </ul>
      </section><!-- seleciona o estado -->
      
      <section class="small-12 columns">
        <nav id="shop-list" class="small-12 left list-markets">

          <!-- loja -->
          <div class="shop-item rel small-12 left market-item" data-state="Paraíba">

            <figure class="shop-front shop-map-point bg-white small-12 medium-8 right sale-point full-height">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.221434357672!2d-34.837045999999994!3d-7.100315000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd169e895165%3A0xa03a65ce4d48bafb!2shome%26GRILL+-+Jo%C3%A3o+Pessoa!5e0!3m2!1spt-BR!2sbr!4v1422207346929" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
            </figure>

            <div class="small-12 medium-4 left bg-white rel full-height sale-point fix">
              <hgroup class="small-12">
                <h4 class="text-low no-margin">showroom joão pessoa</h4>
                <h5 class="divide-10 font-lite">João Pessoa - PB</h5>
                <h6 class="font-lite font-medium">(83) 9999 3333</h6>
                <h6 class="font-lite font-medium no-margin">Rua Dr. Manoel Lopes de Carvalho, 962, Loja 966, Centro.</h6>
              </hgroup>
            </div>

          </div>
          <!-- // loja -->

          <!-- loja -->
          <div class="shop-item rel small-12 left market-item" data-state="Pernambuco">

            <figure class="shop-front shop-map-point bg-white small-12 medium-8 right sale-point full-height">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.221434357672!2d-34.837045999999994!3d-7.100315000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd169e895165%3A0xa03a65ce4d48bafb!2shome%26GRILL+-+Jo%C3%A3o+Pessoa!5e0!3m2!1spt-BR!2sbr!4v1422207346929" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
            </figure>

            <div class="small-12 medium-4 left bg-white rel full-height sale-point fix">
              <hgroup class="small-12">
                <h4 class="text-low no-margin">showroom Recife</h4>
                <h5 class="divide-10 font-lite">João Pessoa - PB</h5>
                <h6 class="font-lite font-medium">(83) 9999 3333</h6>
                <h6 class="font-lite font-medium no-margin">Rua Dr. Manoel Lopes de Carvalho, 962, Loja 966, Centro.</h6>
              </hgroup>
            </div>

          </div>
          <!-- // loja -->

          <!-- loja -->
          <div class="shop-item rel small-12 left market-item" data-state="Bahia">

            <figure class="shop-front shop-map-point bg-white small-12 medium-8 right sale-point full-height">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.221434357672!2d-34.837045999999994!3d-7.100315000000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd169e895165%3A0xa03a65ce4d48bafb!2shome%26GRILL+-+Jo%C3%A3o+Pessoa!5e0!3m2!1spt-BR!2sbr!4v1422207346929" width="100%" height="100%" frameborder="0" style="border:0"></iframe>
            </figure>

            <div class="small-12 medium-4 left bg-white rel full-height sale-point fix">
              <hgroup class="small-12">
                <h4 class="text-low no-margin">showroom salvador</h4>
                <h5 class="divide-10 font-lite">João Pessoa - PB</h5>
                <h6 class="font-lite font-medium">(83) 9999 3333</h6>
                <h6 class="font-lite font-medium no-margin">Rua Dr. Manoel Lopes de Carvalho, 962, Loja 966, Centro.</h6>
              </hgroup>
            </div>

          </div>
          <!-- // loja -->
          
          <div class="divide-20"></div>
        </nav>
      </section>

      <nav class="share-post small-12 columns show-for-medium-up">
        <img src="media/share.png" alt="" class="left">
      </nav><!-- // share buttons -->

    </section>

  </div><!-- // row -->

<?php
  //footer
  include_once "footer.php";
?>
