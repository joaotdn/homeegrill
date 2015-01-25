// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();


/*
	------------------------------------
	Preloader
	------------------------------------
 */
$(document).ready(function() {
	$('#jpreBar','#jpreOverlay').clone().appendTo('#main-slider');
	$('body').jpreLoader({
		loaderVPos: '41.5%',
		splashID: '#logo-footer',
		//autoClose: false,
		showPercentage: false,
		closeBtnText: ''
	},function() {
		$('.slider-thumbs, .slide-info, .yellow-block, .slide-controls').addClass('show');
		$('.loader').fadeOut('fast');
	});
});

$('.prev-default').on('click touchstart',function(e) {
	e.preventDefault();
});

/*
	------------------------------------
	Torne data-thumb em background para 
	o elemento
	------------------------------------
 */
function dataThumb() {
	$('[data-thumb]').each(function(index, el) {
		var dt = $(this).data('thumb');
		$(this).css({
			backgroundImage: 'url('+ dt +')'
		});
	});
};
dataThumb();

//Mudar lingua em versões menores ou igual a 480px de largura
$('.toggle-lang').on('click touchstart',function(e) {
	e.preventDefault();
	if($('.icon-en',this).length) {
		$('.icon-en',this)
		.removeClass('icon-en')
		.addClass('icon-br')
	} else {
		$('.icon-br',this)
		.removeClass('icon-br')
		.addClass('icon-en')
	}
});

//Configurações para formulários
jQuery(function($){
    $('.mk-dd').autotab({ maxlength: 2, format: 'number', target: '.mk-phone' });
    $('.mk-phone').autotab({ maxlength: 8, format: 'number' });
    $('.mk-cnpj').autotab({ maxlength: 14, format: 'number' });
});

/*
	menu principal
 */
$('.submenu','#main-menu').each(function(index, el) {
	$('a',this).prepend('<i class="icon-uniE603 font-small"></i>');
});

$('li','#main-menu').each(function(index, el) {
	if ($('.submenu',this).length) {
		$('a:first-child',this).append('<span class="icon-chevron-circle-down"></span>')
	}
});

$('li a:first-child','#main-menu').on('click touchstart',function(e) {
	
	var $submenu = $(this).siblings('.submenu');

	if(!$(this).hasClass('active')) {

		if($submenu.length) {
			e.preventDefault();
			
			$(this).addClass('active')
			.parents('li')
			.siblings('li')
			.find('a:first-child')
			.removeClass('active')
			.find('.icon-chevron-circle-down')
			.removeClass('rotate');

			$('div','.header-lines').addClass('active');

			$('.icon-chevron-circle-down',this).addClass('rotate');

			$('.submenu-container').html('');
			$submenu.clone().appendTo('.submenu-container');
			
			$('.submenu-bar').animate({
				height: '58px'},
				'fast', function() {
				$('.submenu','.submenu-container').fadeIn('fast');
			});
		}

	} else {
		$(this).removeClass('active');
		$('.icon-chevron-circle-down',this).removeClass('rotate');
		$('.submenu','.submenu-container').fadeOut('fast',function() {
			$('.submenu-bar').animate({height: '0'},'fast',function() {
				$('div','.header-lines').removeClass('active');
			});
		});
	}
});

//$('ul','.main-menu-container').clone().appendTo('.mo-menu-container');

/*
	Menu offcanvas
 */
$('.mo-menu-container').perfectScrollbar({
	suppressScrollX: true
});

$('.close-offcanvas').click(function(event) {
	$('#offcanvas-menu, .hide-offcanvas').toggleClass('show');
});

$('li','#offcanvas-menu').each(function(index, el) {
	if($('.submenu',this).length)	{
		$(this).addClass('list-submenu').find('a:first').append('<span class="icon-chevron-circle-down"></span>');
		$('.submenu',this).wrap('<div class="submenu-mobile small-12 left"></div>');
	}
});

$('a:first','.list-submenu').on('click', function(event) {
	event.preventDefault();
	var h = $(this).siblings('.submenu-mobile').find('.submenu').height();

	if(!$(this).hasClass('active')) {
		$(this).addClass('active').siblings('.submenu-mobile').css('height',h)
		.end()
		.parents('li')
		.siblings('li')
		.find('.submenu-mobile').css('height',0);
	} else {
		$(this).removeClass('active').siblings('.submenu-mobile').css('height',0);
	}
});

/*
	Slider principal
 */
$('.slide-info').cycle({
	fx: 'none',
	speed: 500,
	slides: '> article',
	next: '#next-slide',
	prev: '#prev-slide',
	timeout: 8000
});

$('.slider-thumbs').cycle({
	fx: 'scrollHorz',
	speed: 500,
	slides: '> figure',
	next: '#next-slide',
	prev: '#prev-slide',
	timeout: 8000
});

/*
	------------------------------------
	Owl Slider (plugin) - Configurações 
	para slider responsivo para tabs
	------------------------------------
 */
function hgCarolsels() {

	/*
		churrasqueiras
	 */
	var churrasqueiras = $('.caroulsel-grill');

  	churrasqueiras.owlCarousel({
	    margin:10,
	    responsiveBaseElement: $('.row'),

	    responsive:{
	        0:{
	            items:1,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        400:{
	            items:2,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        700:{
	            items:3,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        }
	    }
	});

	$('.next-churrasqueira').click(function(e) {
		e.preventDefault();
    	churrasqueiras.trigger('next.owl.carousel');
	});

	$('.prev-churrasqueira').click(function(e) {
		e.preventDefault();
    	churrasqueiras.trigger('prev.owl.carousel');
	});

	/*
		Moveis
	 */
	var moveis = $('.carousel-moveis');

  	moveis.owlCarousel({
	    margin:10,
	    responsiveBaseElement: $('.row'),

	    responsive:{
	        0:{
	            items:1,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        400:{
	            items:2,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        700:{
	            items:3,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        }
	    }
	});

	$('.next-movel').click(function(e) {
		e.preventDefault();
    	moveis.trigger('next.owl.carousel');
	});

	$('.prev-movel').click(function(e) {
		e.preventDefault();
    	moveis.trigger('prev.owl.carousel');
	});

	//blog
	var posts = $('#nav-posts.carousel');

	posts.owlCarousel({
	    margin:10,
	    responsiveBaseElement: $('.row'),

	    responsive:{
	        0:{
	            items:1,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        400:{
	            items:2,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        },
	        700:{
	            items:3,
	            nav:false,
	            dots: false,
	            loop: true
	            
	        }
	    }
	});

	$('.next-posts').click(function(e) {
		e.preventDefault();
    	posts.trigger('next.owl.carousel');
	});

	$('.prev-posts').click(function(e) {
		e.preventDefault();
    	posts.trigger('prev.owl.carousel');
	});
};

hgCarolsels();

/*
	------------------------------------
	Páginas
	------------------------------------
 */

//nossas lojas
$('.display-shop-data').on('click', function(event) {
	event.preventDefault();
	$(this).parent()
	.siblings('.full-shop-data')
	.toggleClass('display');
});

//pontos de venda
(function() {
	//aparecer apenas os estados que estão nos mapas
	var stateItem = [];

	$('.shop-item','#shop-list').each(function(index, el) {
		stateItem[index] = $(this).data('state');
	});

	var stateUniqueArr = $.unique(stateItem);
	$.each(stateUniqueArr, function(index, val) {
		//console.log(stateUniqueArr[index]);
		
		$('#list-states').append('<li><a href="#" title="'+ stateUniqueArr[index] +'" class="font-medium small-12" data-select-state="'+ stateUniqueArr[index] +'">'+ stateUniqueArr[index] +'</a></li>');
	});
})();

$('a','#list-states').bind('click',function(e) {
	e.preventDefault();
	var state = $(this).data('select-state');

	$('h5','.select-writter').html('<span class="">'+ $(this).text() +'</span> <i class="icon-arrow-down right white font-bold"></i>');

	if(state != 'todos') {
		$('.shop-item','#shop-list').each(function(index, el) {
			var stateItem = $(this).data('state');

			if(stateItem == state) {
				$(this).fadeIn('fast');
			} else {
				$(this).fadeOut('fast');
			}
		});
	} else {
		$('.shop-item','#shop-list').each(function(index, el) {
			$(this).fadeIn('fast');
		});	
	}
});

//Perguntas frequentes
$('a','.faq-list').bind('click',function(e) {
	e.preventDefault();
	if(!$(this).hasClass('active')) {
		$(this).addClass('active').find('p').fadeIn('fast');
	} else {
		$(this).removeClass('active').find('p').fadeOut('fast');
	}
});

/*
	Slider de produtos
 */           
$(".zoom-image").zoom({on : 'grab'});

//miniaturas
$('a','.vertical-slider').on('click',function(e) {
	e.preventDefault();

	$('.border-mask',this).addClass('active');

	$(this).parent()
	.siblings('li')
	.find('.border-mask')
	.removeClass('active');

	var thFull = $(this).data('post-thumbnail');

	$('img','#product-canvas').attr({
		'src': thFull,
		'data-zoom-image': thFull
	});

	$(".zoom-image").trigger('zoom.destroy').zoom({on : 'grab'});
});

//scroll menu na pagina de produtos
$(document).on('scroll',function(e) {
	var sT = $(this).scrollTop(),
		elMenu = ($('#nav-product-data').position().top - 75),
		elProfile = ($('#product-profile').position().top - 75),
		elEspec = ($('#product-espec').position().top - 75),
		elFeatures = ($('#list-features').position().top - 75),
		elOther = ($('#other-products').position().top - 75),
		elRelated = ($('#related-posts').position().top - 75);

	
	if(sT >= elMenu) {
		$('#nav-product-data').addClass('fixed')
			.find('li').eq(1).addClass('active').siblings('li')
			.removeClass('active');
	}

	if(sT < elProfile) {
		$('#nav-product-data').removeClass('fixed');
	}

	if(sT >= elEspec) {
		$('#nav-product-data')
			.find('li').eq(2).addClass('active').siblings('li')
			.removeClass('active');
	}

	if(sT >= elFeatures) {
		$('#nav-product-data')
			.find('li').eq(3).addClass('active').siblings('li')
			.removeClass('active');
	}

	if(sT >= elOther) {
		$('#nav-product-data')
			.find('li').eq(4).addClass('active').siblings('li')
			.removeClass('active');
	}

	if(sT >= elRelated) {
		$('#nav-product-data')
			.find('li').eq(5).addClass('active').siblings('li')
			.removeClass('active');
	}
});

$('a','#nav-product-data').click(function(event) {
	event.preventDefault();
});

var elMenu = ($('#nav-product-data').position().top - 205),
	elProfile = ($('#product-profile').position().top - 205),
	elEspec = ($('#product-espec').position().top - 205),
	elFeatures = ($('#list-features').position().top - 205),
	elOther = ($('#other-products').position().top - 205),
	elRelated = ($('#related-posts').position().top - 205);

$('li','#nav-product-data').on('click',function(e) {
	e.preventDefault();
	var i = $(this).index();

	if(i == 0) {
		$('body').animate({scrollTop: 0}, 'fast');
	}

	if(i == 1) {
		$('body').animate({scrollTop: elProfile}, 'fast');
	}

	if(i == 2) {
		$('body').animate({scrollTop: elEspec}, 'fast');
	}

	if(i == 3) {
		$('body').animate({scrollTop: elFeatures}, 'fast');
	}

	if(i == 4) {
		$('body').animate({scrollTop: elOther}, 'fast');
	}

	if(i == 5) {
		$('body').animate({scrollTop: elRelated}, 'fast');
	}
});

$('.feature-thumb').on('click',function(e) {
	e.preventDefault();
	var showMore = $(this).find('.show-more');
	var figCaption = $(this).find('figcaption');
	
	if(showMore.hasClass('icon-add')) {
		showMore.removeClass('icon-add').addClass('icon-close');
		figCaption.addClass('active');

		$(this).parents('figure')
		.siblings('figure').find('.feature-thumb').find('figcaption')
		.removeClass('active');

	} else {
		showMore.addClass('icon-add').removeClass('icon-close');
		figCaption.removeClass('active');
	}

});

$('.button-white').on('click',function(e) {
	e.preventDefault();
	if($('.feature-thumb').length) {
		$(this).parent().siblings('.feature-thumb').trigger('click');
	}
});

//Footer
$('.footer-newsletter').clone().appendTo('.copy-newsletter');



