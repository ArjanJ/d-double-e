import { $, $$ } from './utils';

const header = ((window, document, undefined) => {
	const components = {
		header: $('header.site-header'),
		nav: $('nav.site-nav')
	};

	const cssClasses = {
		headerActive: 'site-header--scrolled',
		navActive: 'site-nav--scrolled'
	};

	const scrollTarget = (window.innerHeight) - (300);

	const init = () => {
		window.addEventListener('scroll', handleScroll);
	};

	const handleScroll = () => {
		const scrolled = window.pageYOffset;
		const { header, nav } = components;
		const { headerActive, navActive } = cssClasses;

		if (scrolled >= scrollTarget && !(header.classList.contains(headerActive))) {
			header.classList.add(headerActive);
			nav.classList.add(navActive);
		}

		if (scrolled < scrollTarget && header.classList.contains(headerActive)) {
			header.classList.remove(headerActive);
			nav.classList.remove(navActive);
		}
	};

	return {
		init
	};
})(window, document);

export default header;
