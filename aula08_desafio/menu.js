(() => {
	let html = document.querySelector('html');
	let btn = document.querySelector('.header-nav__hamburgger');

	let ariaControl = btn.getAttribute('aria-controls');
	let menu = document.querySelector('#'+ariaControl);

	html.classList.remove('no-js');
	html.classList.add('js');

	btn.addEventListener('click', function()  {
		let ariaExpanded = this.getAttribute('aria-expanded') === "true";

		html.classList.toggle('menu-opened');
		this.setAttribute('aria-expanded', !ariaExpanded);
		menu.setAttribute('aria-expanded', !ariaExpanded);
	})
})()