(function() {
	$.fn.getDataThumb = function(options) {
		options = $.extend({
			bgClass : 'bg-cover'
		}, options || {});

		return this.each(function() {
			var th = $(this).data('thumb');

			if (th.length) {
				$(this).css('background-image','url('+ th +')')
				.addClass(options.bgClass);
			}
		});
	};

	$.fn.setFirstClass = function(opts) {
		opts = $.extend({
			firstClass: 'active'
		}, opts || {});

		return this.eq(0).addClass(opts.firstClass);
	};


	//Ajax setup
	$.ajaxSetup({
		url: getData.ajaxDir,
		type: 'GET',
		dataType: 'html',
		error: function(e) {
			console.log(e.statusText);
		},
		success: function() {
			dataThumb();
		}
	});
	
	$("img",".post-inner-content").parent("a").addClass("thickbox");

})();

$('a','.tab-options').setFirstClass();
$('a','.tab-moveis').setFirstClass();

(function() {	
	$('input').each(function(index, el) {
		if($(this).attr('class') === 'req-name') {
			$(this).attr({
				required:'',
				pattern: '[a-zA-Z]+'
			});
		}
	});
})();

// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation();

//diferenciais
$('a, span','#nav-features').on('click',function(e) {
	e.preventDefault();

	$(this).parents('figure')
	.find('figcaption')
	.toggleClass('active');

	if(!$(this).parents('figure').find('.icon-add').hasClass('icon-close')){
		$(this).parents('figure')
		.find('.icon-add')
		.addClass('icon-close');
	} else {
		$(this).parents('figure')
		.find('.icon-add')
		.removeClass('icon-close');
	}
	
});

//tipos de churrasqueiras
(function() {
	if($('.product-info-box').length) {
		$('.product-info-box').each(function(index, el) {
			var btn = $('.display-product-data').eq(index);
			
			btn.bind('click',function(e) {
				e.preventDefault();

				var h = ($('.product-info-container').eq(index).innerHeight());
				
				
				if(!$(this).hasClass('active')) {
					$('.product-info-box').eq(index)
					.animate({height: h + 'px'}, 'fast', function() {
						$('.product-info-box').eq(index).css('height','auto');
					});

				} else {
					$('.product-info-box').eq(index)
					.animate({height: '0px'}, 'fast');
				}
			});

		});
	}
})();


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
		$('a:first-child',this).append('<span class="icon-chevron-circle-down"></span>').bind('click touchstart',function(e)
			{e.preventDefault();} );
	}
});

$('li','#main-menu').each(function(index, el) {
	if ($(this).hasClass('current-menu-parent')) {
		$(this).find('a').trigger('click');
	};
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
$('.mo-menu-container, .states-drop').perfectScrollbar({
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

function initTabsCarousels() {
	
	var tabChurrasqueiras = $(".caroulsel-grill");

	  tabChurrasqueiras.owlCarousel({
	    responsiveBaseWidth: $('.row'),
	    responsive: true,
    	responsiveRefreshRate : 200,
	    pagination: false,
	    itemsCustom : [
	          [200, 1],
	          [400, 2],
	          [766, 3],
	        ],
	    rewindNav: false,
	    rewindSpeed: 300
	  });

	$(".next-churrasqueira").click(function(e){
		e.preventDefault();
	    tabChurrasqueiras.trigger('owl.next');
	});

	$(".prev-churrasqueira").click(function(e){
		e.preventDefault();
	  	tabChurrasqueiras.trigger('owl.prev');
	});

	/*
		Moveis
	 */
	var tabMoveis = $(".carousel-moveis");

	  tabMoveis.owlCarousel({
	    responsiveBaseWidth: $('.row'),
	    responsive: true,
    	responsiveRefreshRate : 200,
	    pagination: false,
	    itemsCustom : [
	          [200, 1],
	          [400, 2],
	          [766, 3],
	        ],
	    rewindNav: false,
	    rewindSpeed: 300
	  });

	$(".next-movel").click(function(e){
		e.preventDefault();
	    tabMoveis.trigger('owl.next');
	});

	$(".prev-movel").click(function(e){
		e.preventDefault();
	  	tabMoveis.trigger('owl.prev');
	});

	/*
		Blog
	 */
	var tabBlog = $("#nav-posts.carousel");

	  tabBlog.owlCarousel({
	    responsiveBaseWidth: $('.row'),
	    responsive: true,
    	responsiveRefreshRate : 200,
	    pagination: false,
	    itemsCustom : [
	          [200, 1],
	          [400, 2],
	          [766, 3],
	        ],
	    rewindNav: false,
	    rewindSpeed: 300
	  });

	$(".next-posts").click(function(e){
		e.preventDefault();
	    tabBlog.trigger('owl.next');
	});

	$(".prev-posts").click(function(e){
		e.preventDefault();
	  	tabBlog.trigger('owl.prev');
	});

}

initTabsCarousels();

/*
	Requisita produtos nas tabs
 */

var owlchurraqueiras = $(".caroulsel-grill").data('owlCarousel');
	owlmoveis = $(".carousel-moveis").data('owlCarousel');
	owlblog = $("#nav-posts.carousel").data('owlCarousel');

function requestAjaxProducts(tabOptions,container,instance) {

	$('a',tabOptions).bind('click', function(event) {
		event.preventDefault();

		$(this).addClass('active')
		.parents('li')
		.siblings('li')
		.find('a')
		.removeClass('active');

		var thisTerm = $(this).data('product-term'),
			thisType = $(this).data('product-type'),
			caroulselContainer = $(this).parents('#showroom-tab').find(container);

		$.ajax({
			data: {
				action: 'req_products_list',
				thisterm: thisTerm,
				thistype: thisType
			},
			beforeSend: function() {
				console.log('foi');
				caroulselContainer.animate({opacity: 0}, 'fast', function() {
					$('.ajax-loader-mac').fadeIn('fast');
				});
			},
			complete: function() {
				console.log('comleto');
				caroulselContainer.animate({opacity: 1}, 'fast', function() {
					$('.ajax-loader-mac').css('display', 'none');
				});
			},
			success: function(data) {
				caroulselContainer.html(data);
				instance.reinit();
			}
		});
	});

};

requestAjaxProducts('.tab-moveis','.carousel-moveis',owlmoveis);
requestAjaxProducts('.tab-churrasqueiras','#showroom-carousel',owlchurraqueiras);

/*
	Requisita postagens nas tabs
 */
$('a','.tab-blog').on('click',function(event) {
		event.preventDefault();

		$(this).addClass('active')
		.parents('li')
		.siblings('li')
		.find('a')
		.removeClass('active');

		var thisTerm = $(this).data('category'),
			thisTermId = $(this).data('category-id'),
			caroulselContainer = $(this).parents('#showroom-tab').find('#nav-posts');

		console.log(thisTerm + ', ' + thisTermId);

		$.ajax({
			data: {
				action: 'req_posts_list',
				term: thisTerm,
				termid: thisTermId
			},
			beforeSend: function() {
				
			},
			complete: function() {
				console.log('comleto');
				caroulselContainer.animate({opacity: 1}, 'fast', function() {
					$('.ajax-loader-mac.blob-loader').css('display', 'none');
				});
			},
			success: function(data) {
				caroulselContainer.animate({opacity: 0}, 'fast', function() {
					$(this).html(data);
					$('.ajax-loader-mac.blob-loader').fadeIn('fast');
					owlblog.reinit();
					console.log(data);
					dataThumb();
				});
			}
		});
});


/*
	------------------------------------
	Páginas
	------------------------------------
 */

//geral
$('.icon-arrow-down','.form-field').on('click', function() {

	//$(this).siblings('select');

});

//se o menu estiver ativo
(function() {
	$('li','#main-menu').each(function(index, el) {
		if($(this).hasClass('current-menu-parent')) {
			$('.submenu',this).clone().appendTo('.submenu-container');
			$('.submenu','.submenu-container').show();
			$('.submenu-bar').height(58);
			$('a',this).addClass('active');
			$('div','.header-lines').addClass('active');
		}
	});
})();

$('.not-keyword').keypress(function(event) {
	/* Act on the event */
	event.preventDefault();
});

$('a','#list-states-form').bind('click',function(e) {
	e.preventDefault();

	var txt = $(this).text();
	
	$(this).parents('.states-container')
	.siblings('.wpcf7-form-control-wrap').find('input[type="text"]')
	.val(txt);

	Foundation.libs.dropdown.close($('#list-states-form'));

});

$('input','.select-state').focus(function(event) {
	$('i','.select-state').trigger('click');
});

//nossas lojas
$('.display-shop-data').on('click', function(event) {
	event.preventDefault();
	
	$(this)
	.toggleClass('active')
	.parent()
	.siblings('.full-shop-data')
	.toggleClass('display');

	if($(this).hasClass('active')) {
		$(this).html('Fechar <span class="icon-chevron-circle-right font-medium">');
	} else {
		$(this).html('Ver agora <span class="icon-chevron-circle-right font-medium">');
	}
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
		
		$('#list-states').append('<li><a href="#" title="'+ stateUniqueArr[index] +'" class="font-medium small-12 primary" data-select-state="'+ stateUniqueArr[index] +'">'+ stateUniqueArr[index] +'</a></li>');
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

//tipos de churrasqueiras
$('.display-product-data').bind('click',function(e) {
	e.preventDefault();

	$(this)
	.toggleClass('active');

	if($(this).hasClass('active')) {
		$(this).html('Fechar <span class="icon-chevron-circle-right font-medium">');
	} else {
		$(this).html('Ver agora <span class="icon-chevron-circle-right font-medium">');
	}
});

//quem somos
$('.cycle-slideshow.about-features-cycle').on('cycle-next',function() {
	$('.content-features-cycle').cycle('next');
});

$('.cycle-slideshow.about-features-cycle').on('cycle-prev',function() {
	$('.content-features-cycle').cycle('prev');
});

$('.cycle-slideshow.content-features-cycle').on('cycle-after',function(event, optionHash, outgoingSlideEl, incomingSlideEl, forwardFlag) {
	$(this).height($('div.cycle-slide-active',this).height());
});

$(window).resize(function(event) {
	var h = $('div.cycle-slide-active','.cycle-slideshow.content-features-cycle').height();
	$('.cycle-slideshow.content-features-cycle').height(h);
});

$('.cycle-slideshow.about-features-cycle').on('cycle-pager-activated',function(event, optionHash) {
	$('.cycle-slideshow.content-features-cycle').cycle('goto', optionHash.currSlide);
});

//formularios
$('.send-btn').on('click',function(e) {
	e.preventDefault();
	$(this).siblings('.wpcf7-form-control-wrap').find('input[type="file"]').trigger('click');
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
	

	if($('#nav-product-data').length) {
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
	}
});

$('a','#nav-product-data').click(function(event) {
	event.preventDefault();
});


if($('#nav-product-data').length) {
	var elMenu = ($('#nav-product-data').position().top - 205),
		elProfile = ($('#product-profile').position().top - 205),
		elEspec = ($('#product-espec').position().top - 205),
		elFeatures = ($('#list-features').position().top - 205),
		elOther = ($('#other-products').position().top - 205),
		elRelated = ($('#related-posts').position().top - 205);
}

$('li','#nav-product-data').on('click',function(e) {
	e.preventDefault();
	var i = $(this).index();

	if($('#nav-product-data').length) {
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



