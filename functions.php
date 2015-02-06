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
		  	add_image_size( 'produto-mini-thumb', 90, 90, true );
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

		// remove paragrafo em resumos
		remove_filter('the_excerpt', 'wpautop'); 

		function tb(){
		    wp_enqueue_script('thickbox',null,array('jquery'));
		    wp_enqueue_style('thickbox.css', '/'.WPINC.'/js/thickbox/thickbox.css', null, '1.0');
		}
		add_action('init','tb');

		function HGSearchFilter($query) {
			if ($query->is_search) {
				$query->set('post_type', 'post');
			}
			return $query;
		}

		add_filter('pre_get_posts','HGSearchFilter');
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

/**
 * Alterar a saída padrão do wp
 *
 * @since home & GRILL 1.0
 */
add_filter('post_gallery', 'my_post_gallery', 10, 2);

function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output .= "<nav id=\"post-galery\" class=\"small-12 left rel\"><div class=\"small-12 left cycle-slideshow\" data-cycle-fx=\"scrollHorz\" data-cycle-pause-on-hover=\"true\" data-cycle-speed=\"200\" data-cycle-timeout=\"8000\" data-cycle-prev=\"#prev-gallery-thumb\" data-cycle-next=\"#next-gallery-thumb\" data-cycle-slides=\"> a\" data-cycle-pager=\".gallery-pager\" data-cycle-pager-template=\"<span></span>\" data-cycle-swipe=\"true\" data-cycle-swipe-fx=\"scrollHorz\">";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
        $thumb = wp_get_attachment_image_src($id, 'large');
        $full = wp_get_attachment_image_src($id, 'full');

        $output .= "<a href=\"". $full[0] ."\" data-lightbox=\"post-gallery\" class=\"gallery-thumb d-block small-12 left bg-cover\" data-thumb=\"". $thumb[0] ."\"></a>";
    }
    $output .= '<div class="small-12 left text-center"><div class="gallery-pager centered"></div></div></div>';

    $output .= '<a href="#" id="prev-gallery-thumb" title="Imagem anterior" class="d-block abs p-left nav-gallery"><span class="icon-arrow-left d-block"></span></a><a href="#" id="next-gallery-thumb" title="Próxima imagem" class="d-block abs p-right nav-gallery"><span class="icon-uniE603 d-block"></span></a>';

    $output .= '<div class="divide-10"></div></nav>';

    return $output;
}


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

/**
 * Implementa tipo de post personalizado para "Diferenciais"
 *
 * @since home & GRILL 1.0
 */
require get_template_directory() . '/inc/cpt-diferenciais.php';

/*
    Icones para post-types
    (http://melchoyce.github.io/dashicons/)
    edit.php?post_type=acf
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

#menu-posts-produto div.wp-menu-image:before {
  content: "\f174";
}

#menu-posts-diferencial div.wp-menu-image:before {
  content: "\f155";
}
li#toplevel_page_edit-post_type-acf {
	display: none !important;
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_menu_icons_styles' );
?>