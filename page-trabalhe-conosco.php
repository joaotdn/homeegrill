<?php
  //Header
  include_once "header.php";

  //breadcrumb
  include_once "content-breadcrumb.php";
?>

  <section id="blog-content" class="small-12 left data-panel">
    <div class="row">
      
      <article class="small-12 medium-8 large-8 left">
        
        <header class="small-12 columns post-header">
          <h2 class="no-margin lh-normal">trabalhe conosco</h2>
          <div class="divide-20"></div>

          <nav class="share-post small-12 left show-for-medium-up">
            <img src="media/share.png" alt="" class="left">
          </nav><!-- // share buttons -->

        </header><!-- //post-header -->

        <article class="small-12 left">
          
          <h5 class="divide-40 columns">Faça parte da equipe home & GRILL</h5>  
          <h5 class="font-lite divide-40 columns">Teremos imenso prazer de receber seu currículo. Estamos sempre buscando novos talentos, e você pode ser um desses.</h5>

          <div class="small-12 columns">
             <div class="dotted-row small-12 left"></div>
          </div>

          <div class="divide-40"></div>
          
          <form action="">
            <header class="divide-30 columns">
              <h5 class="no-margin">Seus dados pessoais:</h5>
            </header>

            <div data-abide class="small-12 left">       
              <div class="small-12 left"> 
                <div class="small-12 medium-6 columns form-field">
                  <input type="text" placeholder="Nome completo" required pattern="[a-zA-Z]+">
                  <small class="error small-12 columns">Obrigatório (apenas letras)</small>
                  <div class="divide-20"></div> 
                </div>

                <div class="small-12 medium-6 columns form-field">
                  <input type="text" placeholder="Telefone" pattern="number">
                  <small class="error small-12 columns">Somente números</small>
                  <div class="divide-20"></div> 
                </div>
              </div> <!-- //row -->
              
              <div class="small-12 left">
                <div class="small-12 medium-6 columns form-field">
                  <input type="email" placeholder="Seu e-mail" pattern="email" required>
                  <small class="error small-12 columns">Obrigatório (e-mail inválido)</small>
                  <div class="divide-20"></div> 
                </div>

                <div class="small-12 medium-6 columns form-field">
                  <?php
                    $est = 'Acre,Alagoas,Amapá,Amazonas,Bahia,Ceará,Distrito Federal,Espírito Santo,Goiás,Maranhão,Mato Grosso,Mato Grosso do Sul,Minas Gerais,Pará,Paraíba,Paraná,Pernambuco,Piauí,Rio de Janeiro,Rio Grande do Norte,Rio Grande do Sul,Rondônia,Roraima,Santa Catarina,São Paulo,Sergipe,Tocantins';
                    $est = explode(',', $est);
                  ?>
                  <input type="text" placeholder="Estado" class="not-keyword" required pattern="[a-zA-Z]+">
                  <small class="error small-12 columns">Obrigatório (qual seu estado?)</small>
                  <i class="icon-arrow-down white font-bold abs" data-dropdown="list-states-form" aria-controls="list-states-form" aria-expanded="false"></i>
                  <ul id="list-states-form" class="f-dropdown small bg-white" aria-hidden="true" tabindex="-1">
                  
                  <?php
                    function slugify($text) { 
                      $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
                      $text = trim($text, '-');
                      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
                      $text = strtolower($text);
                      $text = preg_replace('~[^-\w]+~', '', $text);

                      if (empty($text))
                      {
                        return 'n-a';
                      }
                      return $text;
                    }

                    for ($i=0; $i < count($est); $i++) { 
                      //echo "<option value=\"". slugify($est[$i]) ."\">". $est[$i] ."</option>";
                      echo "<li><a href=\"#\" class=\"font-medium primary\">". $est[$i] ."</a></li>";
                    }
                  ?>
                  </ul>
                  <div class="divide-20"></div>
                </div> <!-- //row -->

                <div class="small-12 columns form-field">
                  <textarea name="" id="" cols="30" rows="10" placeholder="Sua mensagem" required></textarea>
                  <small class="error small-12 columns">Obrigatório (escreva-nos algo)</small>
                </div>

                <div class="small-12 columns form-field">
                  <div class="divide-20"></div>
                  <button type="submit" class="button">
                    Enviar mensagem <span class="icon-chevron-circle-right font-small"></span>
                  </button>
                </div>

                <div class="divide-20"></div>
              </div>

            </div>
          </form>
          
          <div class="divide-20"></div>
        </article>

        <footer class="small-12 columns">
          
          <nav class="share-post small-12 left show-for-medium-up">
            <img src="media/share.png" alt="" class="left">
          </nav><!-- // share buttons -->
          
        </footer>
      
      </article><!-- // artigo -->

      <aside id="sidebar" class="page-sidebar small-12 medium-4 columns">
        <!-- widget: ligue para gente -->
        <div id="widget" class="small-12 left call-we">
          <figure class="small-12 left bg-cover rel" data-thumb="images/atendente.png">
            <figcaption class="abs p-top p-left bg-white font-bold font-large">Ligue para nós</figcaption>
          </figure>
          <section class="small-12 left bg-white">
            <h5 class="no-margin">João Pessoa</h5>
            <p class="no-margin">(83) 3333 9999</p>
            <p class="font-small no-margin">contato@homeegrill.com</p>
            <div class="divide-20"></div>

            <h5 class="no-margin">São Paulo</h5>
            <p class="no-margin">(83) 3333 9999</p>
            <p class="font-small no-margin">contato@homeegrill.com</p>
            <div class="divide-20"></div>
          </section>
        </div>
      </aside>

    </div><!-- // row -->
  </section>

<?php
  //footer
  include_once "footer.php";
?>
