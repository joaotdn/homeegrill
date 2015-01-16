<?php
  include_once "header.php";
?>
    
    <!-- inicio slider de destaquer -->
    <section id="main-slider" class="small-12 left rel">
      
      <div class="small-12 left text-center loader d-table abs">
        <div class="d-table-cell">
          <img src="images/loader.png" alt="" class="zigzag">
        </div>
      </div>
      
      <nav class="slider-thumbs small-9 abs"
        data-cycle-swipe="true"
        data-cycle-swipe-fx="scrollHorz"
      >
        <figure class="small-12 left bg-cover" data-thumb="http://www.monogram.com/outdoor-grills/images/outdoor_grill_banner_02.jpg">
          <a href="#" title="" class="d-block abs anchor-mask"></a>
        </figure>

        <figure class="small-12 left bg-cover" data-thumb="http://southerntouchlandscape.com/wp-content/uploads/2013/05/DSC_0001_0.jpg">
          <a href="#" title="" class="d-block abs anchor-mask"></a>
        </figure>

        <figure class="small-12 left bg-cover" data-thumb="http://st.houzz.com/simgs/d25163f50006b4ca_4-6778/traditional-outdoor-grills.jpg">
          <a href="#" title="" class="d-block abs anchor-mask"></a>
        </figure>
      </nav>

      <div class="row rel">
        <nav class="small-12 medium-6 large-4 columns rel">
          
          <div class="small-12 left slide-info">

            <article class="item small-12 left">
              <header class="small-12 left d-table">
                <hgroup class="d-table-cell">
                  <h3 class="font-lite no-margin lh-normal">Lançamento</h3>
                  <h3 class="font-bold no-margin lh-normal">Lorem ipsum dolor consectetur adipisicing</h3>
                </hgroup>
              </header>
              <p class="no-margin d-table lh-normal font-large">
                <span class="d-table-cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, hic, sed aperiam accusantium amet, consectetur adipisicing.</span>
              </p>
              <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">saiba mais <span class="icon-chevron-circle-right font-large"></span></a>
            </article>

            <article class="item small-12 left">
              <header class="small-12 left d-table">
                <hgroup class="d-table-cell">
                  <h3 class="font-lite no-margin lh-normal">Churrasqueiras</h3>
                  <h3 class="font-bold no-margin lh-normal">Quis, hic, sed aperiam accusantium amet</h3>
                </hgroup>
              </header>
              <p class="no-margin d-table lh-normal font-large">
                <span class="d-table-cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, hic, sed aperiam accusantium amet, consectetur adipisicing.</span>
              </p>
              <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">saiba mais <span class="icon-chevron-circle-right font-large"></span></a>
            </article>

            <article class="item small-12 left">
              <header class="small-12 left d-table">
                <hgroup class="d-table-cell">
                  <h3 class="font-lite no-margin lh-normal">Grelhadeiras</h3>
                  <h3 class="font-bold no-margin lh-normal">Duis, hic, sed aperiam accusantium amet</h3>
                </hgroup>
              </header>
              <p class="no-margin d-table lh-normal font-large">
                <span class="d-table-cell">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, hic, sed aperiam accusantium amet, consectetur adipisicing.</span>
              </p>
              <a href="#" title="" class="button small-12 left font-xlarge font-bold no-margin">saiba mais <span class="icon-chevron-circle-right font-large"></span></a>
            </article>

            <a href="#" id="prev-slide" title="Anterior" class="button-smoke small-5 left no-margin">
              <span class="icon-arrow-left"></span>
            </a>
            <a href="#" id="next-slide" title="Próximo" class="button-smoke small-5 left no-margin bdr">
              <span class="icon-uniE603"></span>
            </a>
          </div>
        </nav>
      </div><!-- row -->

    </section>
    <!-- fim slider de destaquer -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="scripts.js"></script>
  </body>
</html>
