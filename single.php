<?php
  //Header
  include_once "header.php";

  //breadcrumb
  include_once "content-breadcrumb.php";
?>

  <div class="divide-20"></div>
  <section id="blog-content" class="small-12 left bg-white data-panel">
    <div class="row">
      
      <article class="small-12 medium-8 large-8 columns">
        
        <header class="small-12 left post-header">
          <time class="font-small small-12 left" pubdate>29 de julho de 2014</time>
          <h2 class="no-margin lh-normal">Saiba o que o gaúcho Marcos Arruda está achando das churrasqueiras home & GRILL</h2>
          <div class="divide-20"></div>

          <nav class="share-post small-12 left show-for-medium-up">
            <img src="media/share.png" alt="" class="left">
          </nav><!-- // share buttons -->

        </header><!-- //post-header -->

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, quo necessitatibus a rerum! Enim, possimus, sapiente consectetur veniam temporibus magni odio impedit corrupti sunt delectus iste rerum nesciunt necessitatibus architecto! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, unde, ipsum, omnis, doloribus consequatur quidem dolore quam impedit odio dicta ut porro distinctio praesentium magni alias dolores similique. Quis, esse.</p>

        <p>
          <div class="aligncenter">
            <img src="http://www.espacogourmetecia.com.br/_libs/imgs/final/1227.jpg" alt="">
          </div>
        </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, sunt, quis provident eligendi quod optio explicabo nemo consectetur ea iure. Ratione, nam alias libero natus ad autem ipsum illum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, eveniet aperiam voluptatum obcaecati nam fugiat odio culpa quo. Officia qui ullam cupiditate perspiciatis non totam iusto quasi molestias ex.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, sunt, quis provident eligendi quod optio explicabo nemo consectetur ea iure. Ratione, nam alias libero natus ad autem ipsum illum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, eveniet aperiam voluptatum obcaecati nam fugiat odio culpa quo. Officia qui ullam cupiditate perspiciatis non totam iusto quasi molestias ex.</p>

        <p>
          <nav id="post-galery" class="small-12 left rel">
            <div class="small-12 left cycle-slideshow"
              data-cycle-fx="scrollHorz"
              data-cycle-pause-on-hover="true"
              data-cycle-speed="200"
              data-cycle-timeout="8000"
              data-cycle-prev="#prev-gallery-thumb"
              data-cycle-next="#next-gallery-thumb"
              data-cycle-slides="> a"
              data-cycle-pager=".gallery-pager"
              data-cycle-pager-template="<span></span>"
              data-cycle-swipe="true"
              data-cycle-swipe-fx="scrollHorz"
            >
              <a href="http://www.comerjapones.com/cursos/img/cursos/teppanyaki/teppanyaki-miele.jpg" data-lightbox="post-gallery" class="gallery-thumb d-block small-12 left bg-cover" data-thumb="http://www.comerjapones.com/cursos/img/cursos/teppanyaki/teppanyaki-miele.jpg">
              </a>

              <a href="http://blog.gardelino.de/wp-content/uploads/2012/01/Fire-Magic-Echelon-Gasgrill-Station-2012.jpg" data-lightbox="post-gallery" class="gallery-thumb d-block small-12 left bg-cover" data-thumb="http://blog.gardelino.de/wp-content/uploads/2012/01/Fire-Magic-Echelon-Gasgrill-Station-2012.jpg">
              </a>

              <a href="http://hgtv.sndimg.com/HGTV/2012/02/24/GH2012_BBQ-Courtyard-01-Wide-Grill-Table_Courtyard-3-Hero_s4x3_lg.jpg" data-lightbox="post-gallery" class="gallery-thumb d-block small-12 left bg-cover" data-thumb="http://hgtv.sndimg.com/HGTV/2012/02/24/GH2012_BBQ-Courtyard-01-Wide-Grill-Table_Courtyard-3-Hero_s4x3_lg.jpg">
              </a>

              <a href="http://www.likecool.com/Home/Outdoor/Jag%20Grill%20BBQ%20Table/Jag-Grill-BBQ-Table.jpg" data-lightbox="post-gallery" class="gallery-thumb d-block small-12 left bg-cover" data-thumb="http://www.likecool.com/Home/Outdoor/Jag%20Grill%20BBQ%20Table/Jag-Grill-BBQ-Table.jpg">
              </a>

              <div class="small-12 left text-center">
                <div class="gallery-pager centered"></div>
              </div>
            </div>

  
            <a href="#" id="prev-gallery-thumb" title="Imagem anterior" class="d-block abs p-left nav-gallery">
              <span class="icon-arrow-left d-block"></span>
            </a>

            <a href="#" id="next-gallery-thumb" title="Próxima imagem" class="d-block abs p-right nav-gallery">
              <span class="icon-uniE603 d-block"></span>
            </a>


            <div class="divide-10"></div>
          </nav>
        </p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, sunt, quis provident eligendi quod optio explicabo nemo consectetur ea iure. Ratione, nam alias libero natus ad autem ipsum illum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, eveniet aperiam voluptatum obcaecati nam fugiat odio culpa quo. Officia qui ullam cupiditate perspiciatis non totam iusto quasi molestias ex.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, sunt, quis provident eligendi quod optio explicabo nemo consectetur ea iure. Ratione, nam alias libero natus ad autem ipsum illum dolor. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad, veritatis, eveniet aperiam voluptatum obcaecati nam fugiat odio culpa quo. Officia qui ullam cupiditate perspiciatis non totam iusto quasi molestias ex.</p>

        <p>Tags: <a href="#">Churrasqueiras</a>, <a href="#">grelhadeiras</a></p>
        
        <footer class="small-12 left">
          
          <nav class="share-post small-12 left show-for-medium-up">
            <img src="media/share.png" alt="" class="left">
          </nav><!-- // share buttons -->

        </footer>

      </article><!-- // artigo -->

      <?php
        /*
          ---------------------
          Sidebar blog
          ---------------------
         */
        include_once "sidebar-blog.php";
      ?>

    </div><!-- // row -->
  </section>

<?php
  // postagens do blog
  include_once "inc/tab-posts.php";
  
  //footer
  include_once "footer.php";
?>
