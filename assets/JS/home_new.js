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
	document.getElementById('contactus').style.display = 'block';
	// document.getElementById('navbar').style.display = 'flex';
	// document.getElementById('myCarousel').style.display = 'flex';
	// document.getElementById('about1').style.display = 'block';
	// document.getElementById('about2').style.display = 'block';
	// document.getElementById('blogs').style.display = 'block';
	// document.getElementById('team').style.display = 'block';
	// document.getElementById('footer').style.display = 'block';
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
		for (j = el.length; j >= 0; j--) {
			var printminus = el.slice(0, j);
			effectTag.innerHTML = printminus;
			await WaitingFor(wait / 4);
		}
	}
	init();
};

function init() {
	const effectTag = document.querySelector('.typewriter-box');
	var wait = effectTag.getAttribute('data-wait');
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
		top: itemPosNewAnimTop.top + 'px',
		left: itemPosNewAnimLeft.left + 'px',
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
var swiper = new Swiper('.mySwiper', {
	effect: 'cards',
	slideShadows: 'true',
	speed: 1000,
	autoplay: {
		delay: 5000,
		disableOnInteraction: false,
	},
	fadeEffect: {
		crossFade: true,
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
window.addEventListener("load", event => {

    var swiperWrapper = document.querySelector('.swiper-wrapper');

    /* The Team */
    // var team = [{
    //         name: "Alice Stone",
    //         role: "UI Designer",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    //     {
    //         name: "Adam Turner",
    //         role: "Project Manager",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    //     {
    //         name: "Nancy Hughes",
    //         role: "UX Specialist",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.pexels.com/photos/774909/pexels-photo-774909.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    //     {
    //         name: "Jonathan Campbell",
    //         role: "Front-End Developer",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    //     {
    //         name: "Jack Keller",
    //         role: "Back-End Developer",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    //     {
    //         name: "Sara Carroll",
    //         role: "Head of UI Design",
    //         desc: "Far far away, behind the world mountains, far from the countries Vokalia and Consonantia, theres live the blind texts.",
    //         photo: "https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9?auto=compress&cs=tinysrgb&dpr=2&h=300&w=300",
    //         website: "https://rafaelalucas.com",
    //         email: "mailto:rafaelavlucas@gmail.com",
    //         linkedin: "https://www.linkedin.com/in/rafaelalucas/",
    //         dribbble: "https://dribbble.com/rafaelalucas",
    //     },
    // ];

    // /* Social Icons */
    // var icons = [{
    //     iWebsite: "https://rafaelalucas.com/dailyui/6/assets/link.svg",
    //     iEmail: "https://rafaelalucas.com/dailyui/6/assets/email.svg",
    //     iLinkedin: "https://rafaelalucas.com/dailyui/6/assets/linkedin.svg",
    //     iDribbble: "https://rafaelalucas.com/dailyui/6/assets/dribbble.svg",
    // }];

    // var iWebsite = icons[0].iWebsite,
    //     iEmail = icons[0].iEmail,
    //     iLinkedin = icons[0].iLinkedin,
    //     iDribbble = icons[0].iDribbble;


    /* Function to populate the team members */
//     function addTeam() {
//         for (let i = 0; i < team.length; i++) {

//             /* Variables for the team */
//             var name = team[i].name,
//                 role = team[i].role,
//                 desc = team[i].desc,
//                 photo = team[i].photo,
//                 website = team[i].website,
//                 email = team[i].email,
//                 linkedin = team[i].linkedin,
//                 dribbble = team[i].dribbble;
// console.log(name)
//             /* Template for the Team Cards */
//             var template = `
//                 <div class="swiper-slide">
//                 <div class="card">
//                     <span class="bg"></span>
//                     <span class="more"></span>
//                     <figure class="photo"><img src="${photo}"></figure>
//                         <article class="text">
//                             <p class="name">${name}</p>
//                             <p class="role">${role}</p> 
//                             <p class="desc">${desc}</p> 
//                         </article>
                        
//                         <div class="social">
//                         <span class="pointer"></span>
//                         <div class="icons">
//                             <a class="icon" href="${website}" target="_blank" data-index="0"><img src="${iWebsite}"></a>
//                             <a class="icon" href="${email}" target="_blank" data-index="1"><img src="${iEmail}"></a>
//                             <a class="icon" href="${linkedin}" target="_blank" data-index="2"><img src="${iLinkedin}"></a>
//                             <a class="icon" href="${dribbble}" target="_blank" data-index="3"><img src="${iDribbble}"></a>
//                             </div>
//                             </div>
//                     </div>
//                 </div>`;

//             swiperWrapper.insertAdjacentHTML('beforeend', template);
//         }
//     };


//     addTeam();



    /* Swiper Settings */

    // var mySwiper = new Swiper(".swiper-container", {
    //     // Optional parameters
    //     direction: "horizontal",
    //     loop: true,
    //     centeredSlides: false,
    //     speed: 800,
    //     slidesPerView: 3,
    //     spaceBetween: 40,
    //     threshold: 5,


    //     // If we need pagination
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true
    //     },

        // Navigation arrows
        // navigation: {
        //     nextEl: ".swiper-button-next",
        //     prevEl: ".swiper-button-prev"
        // },
    //     breakpoints: {
    //         1180: {
    //             slidesPerView: 2,
    //             spaceBetween: 40,
    //             centeredSlides: false,
    //         },
    //         799: {
    //             slidesPerView: 1,
    //             spaceBetween: 20,
    //             centeredSlides: true,
    //             loop: true,
    //         },
    //     }
    // });

    /* Show More */

    var btnShow = document.querySelectorAll('.more');



    btnShow.forEach(function (el) {
        el.addEventListener('click', showMore);
    });

    function showMore(event) {
        var card = event.target.closest(".swiper-slide");

        if (card.classList.contains('show-more')) {
            card.classList.remove('show-more');
        } else {
            card.classList.add('show-more')
        }

    }


    /* Social Hover */
    var icon = document.querySelectorAll('.icon');

    icon.forEach(function (el) {
        el.addEventListener("mouseenter", followCursor);

    });


    function followCursor(event) {
        var pointer = event.currentTarget.closest(".swiper-slide").querySelector('.pointer'),
            index = event.currentTarget.dataset.index,
            sizeIcon = (60 * index) + 25;

        pointer.style.transform = `translateX(${sizeIcon}px)`;
    }


    /* end */
});