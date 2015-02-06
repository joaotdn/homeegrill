<?php
  /**
   * Template Name: FAQ
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
    
    <header class="small-12 columns post-header">
      <h2 class="no-margin lh-normal text-low"><?php the_title(); ?></h2>
      <div class="divide-20"></div>

      <?php  get_template_part('content-share'); ?>
    </header><!-- //post-header -->

    <nav class="faq-list small-12 columns">
      <ul class="no-margin no-bullet small-12 left">
        <?php
          $faq_lista = get_field('faq_lista',$post->ID);
          foreach ($faq_lista as $faq):
        ?>
        <li>
          <a href="#" title="" class="d-block small-12 left primary">
            <h6 class="font-medium no-margin"><?php echo $faq['faq_pergunta']; ?></h6>
            <p class="font-medium no-margin silver"><?php echo $faq['faq_resposta']; ?></p>
          </a>
        </li>
        <?php endforeach; ?>
      </ul>

      <div class="divide-20"></div>
    </nav>

  </div><!-- // row -->

<?php
  //footer
  get_footer();
?>
