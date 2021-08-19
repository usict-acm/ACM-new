function createModal() {
	const div = document.createElement('div');
	div.classList = 'modal js-modal';
	div.innerHTML = `
			<div class="modal-image">
				<svg viewBox="0 0 32 32" style="fill: #48db71">
					<path d="M1 14 L5 10 L13 18 L27 4 L31 8 L13 26 z"></path>
				</svg>
			</div>
			<h1 class="modal-heading">Success!</h1>
			<p class="modal-message">To dismiss click the button below</p>
			<button class="modal-btn js-close">Dismiss</button>
	`;
	document.querySelector('.wrap').append(div);
}
function removeModal() {
	const modal = document.querySelector('.modal');
	modal.remove();
}

// hasClass
function hasClass(elem, className) {
	return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
}
// toggleClass
function toggleClass(elem, className) {
	var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
	if (hasClass(elem, className)) {
		while (newClass.indexOf(' ' + className + ' ') >= 0) {
			newClass = newClass.replace(' ' + className + ' ', ' ');
		}
		elem.className = newClass.replace(/^\s+|\s+$/g, '');
	} else {
		elem.className += ' ' + className;
	}
}
// select
function select(selector) {
	var elements = document.querySelectorAll(selector);

	if (elements.length > 1) {
		return elements;
	} else {
		return elements.item(0);
	}
}
// External JS: JS Helper Functions
// External JS: Dynamics JS
var btnOpen = select('.js-open');

function hideModal() {
	var modal = select('.js-modal');
	dynamics.animate(
		modal,
		{
			opacity: 0,
			translateY: 100,
		},
		{
			type: dynamics.spring,
			frequency: 50,
			friction: 600,
			duration: 1500,
		}
	);
}
function showModal() {
	var modal = select('.js-modal');
	// Define initial properties
	dynamics.css(modal, {
		opacity: 0,
		scale: 0.5,
	});

	// Animate to final properties
	dynamics.animate(
		modal,
		{
			opacity: 1,
			scale: 1,
		},
		{
			type: dynamics.spring,
			frequency: 300,
			friction: 400,
			duration: 1000,
		}
	);
}
function showBtn() {
	dynamics.css(btnOpen, {
		opacity: 0,
	});

	dynamics.animate(
		btnOpen,
		{
			opacity: 1,
		},
		{
			type: dynamics.spring,
			frequency: 300,
			friction: 400,
			duration: 800,
		}
	);
}
function showModalChildren() {
	var modal = select('.js-modal');
	var modalChildren = modal.children;
	// Animate each child individually
	for (var i = 0; i < modalChildren.length; i++) {
		var item = modalChildren[i];

		// Define initial properties
		dynamics.css(item, {
			opacity: 0,
			translateY: 30,
		});

		// Animate to final properties
		dynamics.animate(
			item,
			{
				opacity: 1,
				translateY: 0,
			},
			{
				type: dynamics.spring,
				frequency: 300,
				friction: 400,
				duration: 1000,
				delay: 100 + i * 40,
			}
		);
	}
}
function toggleClasses() {
	toggleClass(btnOpen, 'is-active');
	var modal = select('.js-modal');
	toggleClass(modal, 'is-active');
}
// Open nav when clicking sandwich button
btnOpen.addEventListener('click', function (e) {
	createModal();
	toggleClasses();
	showModal();
	showModalChildren();

	var btnClose = select('.js-close');
	btnClose.addEventListener('click', function (e) {
		hideModal();
		removeModal();
		showBtn();
		toggleClass(btnOpen, 'is-active');
	});
});
