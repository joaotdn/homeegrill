<?php
  //Header
  get_header();

  //Slider de destaques
  require get_template_directory() . "/inc/main-slider.php";

  //Tab - churrasqueiras
  require get_template_directory() . "/inc/tab-churrasqueiras.php";

  //Tab - moveis
  $moveis = get_term_by( 'name', 'moveis', 'produtos' );
  $count = $moveis->count;
  if($count !== 0) require get_template_directory() . "/inc/tab-moveis.php";

  //Tab posts
  require get_template_directory() . "/inc/tab-posts.php";

  //footer
  get_footer();
?>
