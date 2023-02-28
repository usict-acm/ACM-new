// *************************contact_us function**********************************************
function showcontact() {
	document.getElementById('contact').style.display = 'flex';
	// document.getElementById('navbar').style.display = 'none';
	// document.getElementById('myCarousel').style.display = 'none';
	// document.getElementById('about1').style.display = 'none';
	// document.getElementById('about2').style.display = 'none';
	// document.getElementById('blogs').style.display = 'none';
	// document.getElementById('team').style.display = 'none';
	// document.getElementById('footer').style.display = 'none';
}
function closecontact() {
	document.getElementById('contact').style.display = 'none';
	var fields = document.getElementsByClassName("form-control");
	for (x in fields) {
		fields[x].value = "";
	}
}
// ****************************contact us function end*******************************************

// ******************hero section ************************************************
// HERO SLIDER
var menu = [];
jQuery('.swiper-slide').each(function (index) {
	menu.push(jQuery(this).find('.slide-inner').attr('data-text'));
});
var interleaveOffset = 0.5;
var swiperOptions = {
	loop: true,
	speed: 1000,
	parallax: true,
	autoplay: {
		delay: 6500,
		disableOnInteraction: false,
	},
	watchSlidesProgress: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	on: {
		progress: function () {
			var swiper = this;
			for (var i = 0; i < swiper.slides.length; i++) {
				var slideProgress = swiper.slides[i].progress;
				var innerOffset = swiper.width * interleaveOffset;
				var innerTranslate = slideProgress * innerOffset;
				swiper.slides[i].querySelector('.slide-inner').style.transform =
					'translate3d(' + innerTranslate + 'px, 0, 0)';
			}
		},

		touchStart: function () {
			var swiper = this;
			for (var i = 0; i < swiper.slides.length; i++) {
				swiper.slides[i].style.transition = '';
			}
		},

		setTransition: function (speed) {
			var swiper = this;
			for (var i = 0; i < swiper.slides.length; i++) {
				swiper.slides[i].style.transition = speed + 'ms';
				swiper.slides[i].querySelector('.slide-inner').style.transition = speed + 'ms';
			}
		},
	},
};

var swiper = new Swiper('.swiper-container', swiperOptions);

// DATA BACKGROUND IMAGE
var sliderBgSetting = $('.slide-bg-image');
sliderBgSetting.each(function (indx) {
	if ($(window).width() < 700) {
		if ($(this).attr('data-background-small')) {
			// background: linear - gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1578934191836-ff…cHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80');
			$(this).css(
				'background',
				'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' + $(this).data('background-small') + ')'
			);
			$(this).css('background-size', 'cover');
			$(this).css('background-position', 'top');
		}
	} else {
		if ($(this).attr('data-background')) {
			// background: linear - gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1578934191836-ff…cHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80');
			$(this).css(
				'background',
				'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' + $(this).data('background') + ')'
			);
			$(this).css('background-size', 'cover');
			$(this).css('background-position', 'top');
		}
	}
});
$(window).resize(function () {
	sliderBgSetting.each(function (indx) {
		if ($(window).width() < 700) {
			if ($(this).attr('data-background-small')) {
				// background: linear - gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1578934191836-ff…cHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80');
				$(this).css(
					'background',
					'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' +
						$(this).data('background-small') +
						')'
				);
				$(this).css('background-size', 'cover');
				$(this).css('background-position', 'top');
			}
		} else {
			if ($(this).attr('data-background')) {
				// background: linear - gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1578934191836-ff…cHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80');
				$(this).css(
					'background',
					'linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(' + $(this).data('background') + ')'
				);
				$(this).css('background-size', 'cover');
				$(this).css('background-position', 'top');
			}
		}
	});
});
// ************************hero section ends*********************************
// typewriter effect begin
document.addEventListener('DOMContentLoaded', init);

function WaitingFor(ms) {
	return new Promise((resolve) => setTimeout(resolve, ms));
}

const KeyEffect = async (wait, content) => {
	var effectTag = document.querySelector('.typewriter-box');
	for (const el of content) {
		await WaitingFor(wait);
		var print;
		for (i = 0; i < el.length; i++) {
			print = el[i];
			effectTag.innerHTML = effectTag.innerHTML + print;
			await WaitingFor(wait);
		}
		await WaitingFor(wait);
	}
};

function init() {
	const effectTag = document.querySelector('.typewriter-box');
	var wait = effectTag.getAttribute("data-wait");
	var Rawcontent = effectTag.getAttribute('data-content');
	const content = JSON.parse(Rawcontent);
	KeyEffect(wait, content);
}
// typewriter effect end

// ---------navbar start-----------
function test() {
	var tabsNewAnim = $('#navbarSupportedContent');
	var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
	var activeItemNewAnim = tabsNewAnim.find('.active');
	var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
	var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
	var itemPosNewAnimTop = activeItemNewAnim.position();
	var itemPosNewAnimLeft = activeItemNewAnim.position();
	$('.hori-selector').css({


		height: activeWidthNewAnimHeight + 'px',
		width: activeWidthNewAnimWidth + 'px',
	});
	$('#navbarSupportedContent').on('click', 'li', function (e) {
		$('#navbarSupportedContent ul li').removeClass('active');
		$(this).addClass('active');
		var activeWidthNewAnimHeight = $(this).innerHeight();
		var activeWidthNewAnimWidth = $(this).innerWidth();
		var itemPosNewAnimTop = $(this).position();
		var itemPosNewAnimLeft = $(this).position();
		$('.hori-selector').css({
			top: itemPosNewAnimTop.top + 'px',
			left: itemPosNewAnimLeft.left + 'px',
			height: activeWidthNewAnimHeight + 'px',
			width: activeWidthNewAnimWidth + 'px',
		});
	});
}
$(document).ready(function () {
	setTimeout(function () {
		test();
	});
});
$(window).on('resize', function () {
	setTimeout(function () {
		test();
	}, 500);
});
$('.navbar-toggler').click(function () {
	$('.navbar-collapse').slideToggle(300);
	setTimeout(function () {
		test();
	});
});

jQuery(document).ready(function ($) {
	var path = window.location.pathname.split('/').pop();

	if (path == '') {
		path = 'index.html';
	}

	var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');

	target.parent().addClass('active');
});
// ********************navbar end********************************

// for dropdown button
$(document).ready(function () {
	$('.drop-down').click(function () {
		$('.dropdown a').removeClass('clicked');
		$('.dropdown a').children('span').removeClass('clicked');
		$('.arrow').toggleClass('open');
		$('.dropdown').toggleClass('open');
	});

	$('.dropdown a').click(function () {
		$('.dropdown a').removeClass('clicked');
		$('.dropdown a').children('span').removeClass('clicked');
		$(this).toggleClass('clicked');
		$(this).children('span').toggleClass('clicked');
	});
});

// for events section


var mySwiper;
if ($(window).width() < 500) {
	if (mySwiper) {
		mySwiper.destroy('swiper');
	}
	mySwiper = new Swiper('.mySwiper', {
		effect: 'creative',
		creativeEffect: {
			prev: {
				// will set `translateZ(-400px)` on previous slides
				translate: ['-200%', 0, 0],
			},
			next: {
				// will set `translateX(100%)` on next slides
				translate: ['200%', 0, 0],
			},
		},
		speed: 1000,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		grabCursor: true,
		pagination: false,
		navigation: false,
	});
} else {
	if (mySwiper) {
		mySwiper.destroy('swiper');
	}
	mySwiper = new Swiper('.mySwiper', {
		effect: 'cards',
		speed: 1000,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		grabCursor: true,
		pagination: {
			el: '.events-swiper-pagination',
		},
		navigation: {
			nextEl: '.events-swiper-button-next',
			prevEl: '.events-swiper-button-prev',
			disabledClass: 'events-button-disabled',
		},
	});
}
$(window).resize(function () {
	if ($(window).width() < 500) {
		if (mySwiper) {
			mySwiper.destroy('swiper');
		}
		mySwiper = new Swiper('.mySwiper', {
			effect: 'creative',
			creativeEffect: {
				prev: {
					// will set `translateZ(-400px)` on previous slides
					translate: ['-200%', 0, 0],
				},
				next: {
					// will set `translateX(100%)` on next slides
					translate: ['200%', 0, 0],
				},
			},
			speed: 1000,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			grabCursor: true,
			pagination: false,
			navigation: false,
		});
	} else {
		if (mySwiper) {
			mySwiper.destroy('swiper');
		}
		mySwiper = new Swiper('.mySwiper', {
			effect: 'cards',
			speed: 1000,
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			grabCursor: true,
			pagination: {
				el: '.events-swiper-pagination',
			},
			navigation: {
				nextEl: '.events-swiper-button-next',
				prevEl: '.events-swiper-button-prev',
				disabledClass: 'events-button-disabled',
			},
		});
	}
});

// event section ends

// scroll to top js
$(window).scroll(function () {
	if ($(this).scrollTop() > 100) {
		$('.scrolltop:hidden').stop(true, true).fadeIn();
	} else {
		$('.scrolltop').stop(true, true).fadeOut();
	}
});
$(function () {
	$('.scroll').click(function () {
		$('html,body').animate({ scrollTop: 0 }, { duration: '900', easing: 'linear' });
		return false;
	});
});
// *******************our team ****************************************
window.addEventListener('load', (event) => {
	var swiperWrapper = document.querySelector('.swiper-wrapper');

	/* Show More */

	var btnShow = document.querySelectorAll('.more');

	btnShow.forEach(function (el) {
		el.addEventListener('click', showMore);
	});

	function showMore(event) {
		var card = event.target.closest('.swiper-slide');

		if (card.classList.contains('show-more')) {
			card.classList.remove('show-more');
		} else {
			card.classList.add('show-more');
		}
	}

	/* Social Hover */
	var icon = document.querySelectorAll('.icon');

	icon.forEach(function (el) {
		el.addEventListener('mouseenter', followCursor);
	});

	function followCursor(event) {
		var pointer = event.currentTarget.closest('.swiper-slide').querySelector('.pointer'),
			index = event.currentTarget.dataset.index,
			sizeIcon = 60 * index + 25;

		pointer.style.transform = `translateX(${sizeIcon}px)`;
	}

	/* end */
});

function validateform() {
	var name = document.contact.name.value;
	var email = document.contact.email.value;
	var phone = document.contact.phone.value;
	var message = document.contact.message.value;

	const re =
		/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	const pere = /^\d{10}$/;

	if (name == null || name == '') {
		alert("Name can't be blank !");
		return false;
	}
	if (!re.test(email)) {
		alert('Please enter a valid e-mail address !');
		return false;
	}
	if (message == null || message == '') {
		alert("Message can't be blank !");
		return false;
	}
	if (phone.length != '' && !pere.test(phone)) {
		alert('Please enter a 10 digit number !');
		return false;
	}
}

$(document).on('scroll', function () {
	var pageTop = $(document).scrollTop();
	var pageBottom = pageTop + $(window).height();
	var tags = $('.tag');

	for (var i = 0; i < tags.length; i++) {
		var tag = tags[i];

		if ($(tag).position().top < pageBottom) {
			$(tag).addClass('visible');
		} else {
			$(tag).removeClass('visible');
		}
	}
});
