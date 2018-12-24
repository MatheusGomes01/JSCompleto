(() => {
	let html = document.querySelector('html');
	let btn = document.querySelector('.header-nav__hamburgger');

	consoloe.log(asfasdf)
	html.classList.remove('no-js');
	html.classList.add('js');

	btn.addEventListener('click', () => {
		html.classList.toggle('menu-opened')
	})
})()