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
		$('.slider-thumbs, .slide-info').addClass('show');
		$('.loader').fadeOut('fast');
	});
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
			$('.submenu-bar').animate({height: '0'},'fast');
		});
	}
});

$('ul','.main-menu-container').clone().appendTo('.mo-menu-container');

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
	if($('ul',this).length)	{
		$(this).addClass('list-submenu').find('a:first').append('<span class="icon-chevron-circle-down show-for-large-up"></span>');
	}
});

$('a:first','.list-submenu').on('click touchstart', function(event) {
	event.preventDefault();
	$(this).siblings('.submenu').toggleClass('show');
});

$('.slide-info').cycle({
	fx: 'none',
	speed: 500,
	slides: '> article',
	next: '#next-slide',
	prev: '#prev-slide'
});

$('.slider-thumbs').cycle({
	fx: 'scrollHorz',
	speed: 500,
	slides: '> figure',
	next: '#next-slide',
	prev: '#prev-slide',
	timeout: 8000
});