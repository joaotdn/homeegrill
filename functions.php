<?php
/**
 * Funções e definições para o site home & GRILL
 *
 * @package WordPress
 * @subpackage home_grill
 * @since home & GRILL 1.0
 */

//Versão do tema
define('HG_VERSION', '1.2.4');

if ( ! function_exists( 'ac_setup' ) ) :
	function hg_setup() {
		/**
		 * Suporte a miniaturas e miniaturas personalidas para o tema
		 * 
		 * @since home & GRILL 1.0
		 */
		add_theme_support( 'post-thumbnails' );

		if ( function_exists( 'add_image_size' ) ) { 
		  	add_image_size( 'destaques-thumb', 587, 380, true ); //miniatura para o slide de destaques
		}
		
		// Menus personalizados
		register_nav_menus( array(
			'main_menu' => __( 'Menu principal', 'home_e_grill' ),
			'footer_menu' => __( 'Menu rodapé', 'home_e_grill' ),
		) );

		// Muda o nome da classe de submenu nativa
		function change_submenu_class($menu) {  
		  $menu = preg_replace('/ class="sub-menu"/','/ class="submenu" /',$menu);  
		  return $menu;  
		}  
		add_filter('wp_nav_menu','change_submenu_class');  
	}
endif;

add_action('after_setup_theme','hg_setup');

function register_authors_tax() {
	$labels = array(
    'name'              => __( 'Autores'),
    'singular_name'     => __( 'Autor'),
    'search_items'      =>  __( 'Buscar' ),
    'popular_items'     => __( 'Mais usados' ),
    'all_items'         => __( 'Todos os autores' ),
    'parent_item'       => null,
    'parent_item_colon' => null,
    'edit_item'         => __( 'Adicionar novo' ),
    'update_item'       => __( 'Atualizar' ),
    'add_new_item'      => __( 'Adicionar novo autor' ),
    'new_item_name'     => __( 'Novo' )
    );

  register_taxonomy("colunista", array("post"), array(
    "hierarchical"      => true, 
    "labels"            => $labels, 
    "singular_label"    => "Autor", 
    "rewrite"           => true,
    "add_new_item"      => "Adicionar novo autor",
    "new_item_name"     => "Novo autor",
  ));
}
add_action('init','register_authors_tax');


/*
 * Incluir scripts essenciais
 */
function hg_load_scripts() {
	
	/*
		modernizr
	 */
	wp_enqueue_script( 
		'modernizr', 
		'//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', 
		array(), 
		HG_VERSION 
	);

	/*
		jQuery
	 */
	wp_enqueue_script( 
		'ac-jquery', 
		'//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js', 
		array(), 
		HG_VERSION 
	);

	/*
		Scripts essenciais minificados em
		um arquivo unico e essenciais para 
		o funcionamento do lado cliente
	 */
	wp_enqueue_script( 
		'scripts', 
		get_stylesheet_directory_uri() . '/scripts.js', 
		array(), 
		HG_VERSION,
		true 
	);
	
}
add_action( 'wp_footer', 'hg_load_scripts' );

/*
 * Incluir folha de estilo para o tema
 */
function hg_load_styles() {

	wp_enqueue_style( 
		'aberto_concursos', 
		get_stylesheet_directory_uri() . '/style.css', 
		array(), 
		HG_VERSION, 
		'screen' 
	);

}
add_action( 'wp_enqueue_scripts', 'hg_load_styles' );

/**********************************************
	Sidebars
***********************************************/
function hg_top_sidebar() {

	//Menus do rodape (centro)
    $args = array(
        'name'          => 'Menus do rodape (centro)', 
        'id'            => 'menu-redape-centro',
        'description'   => 'Adicione apenas menus personalizados construídos a partir do wordpress (Aparência > Menu)',
        'class'         => 'text-low',
        'before_widget' => '<nav class="site-map-widget small-12 left">',
        'after_widget'  => '</nav>',
        'before_title'  => '<header class="title-cat small-12 left"><h3 class="font-large no-margin">',
        'after_title'   => '</h3></header>' 
    );
    register_sidebar( $args );

    //Menus do rodape (direita)
    $args = array(
        'name'          => 'Menus do rodape (direita)', 
        'id'            => 'menu-rodape-direita',
        'description'   => 'Adicione apenas menus personalizados construídos a partir do wordpress (Aparência > Menu)',
        'class'         => 'text-low',
        'before_widget' => '<nav class="site-map-widget small-12 left">',
        'after_widget'  => '</nav>',
        'before_title'  => '<header class="title-cat small-12 left"><h3 class="font-large no-margin">',
        'after_title'   => '</h3></header>' 
    );
    register_sidebar( $args );
}

add_action( 'widgets_init', 'hg_top_sidebar' );

/**
 * Implementa opções para o tema
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/theme-options.php';


/**********************************************
	Funções utilitárias
***********************************************/
require get_template_directory() . '/inc/util-functions.php';


/**********************************************
	AJAX
***********************************************/

/**
 * Requisita produtos para o carrossel a partir do slug do termo clicado
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/requests/tabs-produtos.php';

/**
 * Requisita posts para o carrossel a partir do slug do termo clicado
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/requests/tabs-blog.php';


/**********************************************
	POST TYPES
***********************************************/

/**
 * Implementa tipo de post personalizado para "Nossas lojas"
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/inc/cpt-lojas.php';

/**
 * Implementa tipo de post personalizado para "Slider"
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/inc/cpt-slider.php';

/**
 * Implementa tipo de post personalizado para "Produtos"
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/inc/cpt-produtos.php';

/*
    Icones para post-types
    (http://melchoyce.github.io/dashicons/)
 */
function add_menu_icons_styles(){
?>
 
<style>
#menu-posts-lojas div.wp-menu-image:before {
  content: "\f513";
}

#menu-posts-slider div.wp-menu-image:before {
  content: "\f157";
}

#menu-posts-produtos div.wp-menu-image:before {
  content: "\f174";
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );
?>