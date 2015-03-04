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

  <?php

    /*
      Cabeçalho
      ------------------------------------------------------------------
     */
    require get_template_directory() . "/page-templates/quem-somos/cabecalho.php"; 

    /*
      Vídeo institucional
      ------------------------------------------------------------------
     */
    require get_template_directory() . "/page-templates/quem-somos/video.php";

    /*
      Nossos diferenciais
      ------------------------------------------------------------------
     */
    require get_template_directory() . "/page-templates/quem-somos/diferenciais.php";

    /*
      Fábrica
      ------------------------------------------------------------------
     */
    //require get_template_directory() . "/page-templates/quem-somos/fabrica.php";

    /*
      Links
      ------------------------------------------------------------------
     */
    require get_template_directory() . "/page-templates/quem-somos/links.php";

    /*
      Depoimentos
      ------------------------------------------------------------------
     */
    
    require get_template_directory() . "/page-templates/quem-somos/depoimentos.php";


  //footer
  get_footer();
?>
