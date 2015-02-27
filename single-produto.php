<?php
  //Header
  get_header();

  //breadcrumb
  get_template_part('content-breadcrumb');

  global $post;
  $terms = wp_get_post_terms( $post->ID, 'produtos');
  $exclude = $terms[0]->slug;
  ?>
  
  <div class="row">
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal"><?php the_title(); ?></h2>
      <div class="divide-20"></div>

      <?php  get_template_part('content-share'); ?>
      
    </header><!-- //post-header -->

    <?php
      /*
        Galeria do produto
       */
      require get_template_directory() . "/inc/single-produtos/galeria.php";
    ?>

    <div class="divide-20"></div>
  </div><!-- // row -->

  <nav id="nav-product-data" class="small-12 left show-for-medium-up" role="navigation">
    <div class="row">
      <ul class="inline-list no-margin small-12 left">
        <li>
          <a href="#" title="Voltar para o topo" class="button white">
            <i class="icon-arrow-up"></i><br>
            <span>topo</span>
          </a>
        </li>

        <li>
          <a href="#product-profile" class="" title="Perfil do produto">
            <span class="d-table-cell">Características</span>
          </a>
        </li>

        <li <?php if($exclude == 'acessorios') echo "style=\"visibility:hidden;width:0;\""; ?>>
          <a href="#product-espec" class="" title="Especificações">
            <span class="d-table-cell">Especificações</span>
          </a>
        </li>

        <li>
          <a href="#list-features" class="" title="diferenciais">
            <span class="d-table-cell">diferenciais</span>
          </a>
        </li>

        <li>
          <a href="#other-products" class="" title="Outros produtos">
            <span class="d-table-cell">Outros produtos</span>
          </a>
        </li>

        <li>
          <a href="#related-posts" class="" title="Posts recomendados">
            <span class="d-table-cell">Posts recomendados</span>
          </a>
        </li>
      </ul>
    </div>
  </nav><!-- // navegador de conteudo do produto -->

  <?php
    /*
      -------------------
      Dados do Produto
      -------------------
     */
    
    /*
      -| Características
     */
    require get_template_directory() . "/inc/single-produtos/caracteristicas.php";

    /*
      -| Especificações
     */
    require get_template_directory() . "/inc/single-produtos/especificacoes.php";

    /*
      -| Diferenciais
     */
    require get_template_directory() . "/inc/single-produtos/diferenciais.php";
  ?>


  <div id="other-products" class="small-12 left">
    <?php require get_template_directory() . "/inc/tab-churrasqueiras.php"; // outros produtos ?>
  </div>

  <div id="related-posts" class="small-12 left">
    <?php require get_template_directory() . "/inc/tab-posts.php"; // postagens do blog ?>
  </div>

<?php
  //footer
  get_footer();
?>
