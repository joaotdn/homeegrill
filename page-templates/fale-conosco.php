<?php
  //Header
  include_once "../header.php";

  //breadcrumb
  include_once "../content-breadcrumb.php";
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
        include_once "../inc/sidebar-blog.php";
      ?>

    </div><!-- // row -->
  </section>

<?php
  // postagens do blog
  include_once "../inc/tab-posts.php";
  
  //footer
  include_once "../footer.php";
?>
