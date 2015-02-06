<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');

  // $obj = get_queried_object();
?>

  <div class="divide-20"></div>
  <section id="blog-content" class="small-12 left bg-white data-panel">
    <div class="row">
      
      <article class="small-12 medium-8 large-8 columns post-inner-content">
        
        <header class="small-12 left post-header">
          <time class="font-small small-12 left" pubdate><?php the_time('d \d\e F \d\e Y'); ?></time>
          <h2 class="no-margin lh-normal"><?php the_title(); ?></h2>
          <div class="divide-20"></div>

          <?php  get_template_part('content-share'); ?>

        </header><!-- //post-header -->

        <?php
          //Se o post tiver video
          global $post;
          $video = get_field('post_video',$post->ID);
          if($video != '') {
            ?>
            <div class="small-12 left">
              <figure class="flex-video small-12 left"><?php echo $video; ?></figure>
            </div>
            <div class="divide-20"></div>
            <?php
          }
        ?>

        <?php 
          if (have_posts()) : while (have_posts()) : the_post(); 
              the_content(); 
            endwhile; 
          endif;
        ?>
        
        <?php
          /*
            Tags
           */
          $posttags = get_the_tags();
          echo "<p class=\"posttags\">Tags:";
          foreach ($posttags as $tag):
            $tag_link = get_tag_link($tag->term_id);
        ?>
        <a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a>
        <?php 
          endforeach;
          echo "</p>"; 
        ?>
        
        <footer class="small-12 left">
          
          <?php  get_template_part('content-share'); ?>

          <div class="divide-20"></div>

          <nav id="comments" class="small-12 left">
            <div id="disqus_thread"></div>
              <script type="text/javascript">
                  /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                  var disqus_shortname = 'homegrill'; // required: replace example with your forum shortname

                  /* * * DON'T EDIT BELOW THIS LINE * * */
                  (function() {
                      var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                      dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                      (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                  })();
              </script>
              <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
          </nav>

        </footer>

      </article><!-- // artigo -->

      <?php
        /*
          ---------------------
          Sidebar blog
          ---------------------
         */
        get_sidebar('blog');
      ?>

    </div><!-- // row -->
  </section>

<?php
  // postagens do blog
  require get_template_directory() . "/inc/tab-posts.php";
  
  //footer
  get_footer();
?>
