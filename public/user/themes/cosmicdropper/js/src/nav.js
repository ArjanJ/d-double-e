import { $, $$ } from './utils';

const nav = (() => {
	const components = {
		nav: $('.site-nav'),
		navItems: $$('.site-nav__item'),
		hamburger: $('.site-header__hamburger button.c-hamburger'),
		main: $('.site-main')
	};

	const cssClasses = {
		navActive: 'site-nav--active',
		navItemActive: 'site-nav__item--active',
		hamburgerActive: 'c-hamburger--active',
		mainActive: 'site-main--active'
	};

	const toggleNav = (event) => {
		event.stopPropagation();
		event.preventDefault();

		const { nav, navItems, hamburger, main } = components;
		const { navActive, navItemActive, hamburgerActive, mainActive } = cssClasses;

		nav.classList.toggle(navActive);
		hamburger.classList.toggle(hamburgerActive);
		main.classList.toggle(mainActive);

		setTimeout(() => {
			navItems.forEach(item => item.classList.toggle(navItemActive));
		}, 150);
		

		if (nav.classList.contains(navActive)) {
			document.addEventListener('click', closeNav);
		}
	};

	const closeNav = () => {
		const { nav, navItems, hamburger, main } = components;
		const { navActive, navItemActive, hamburgerActive, mainActive } = cssClasses;

		nav.classList.remove(navActive);
		hamburger.classList.remove(hamburgerActive);
		main.classList.remove(mainActive);
		navItems.forEach(item => item.classList.remove(navItemActive));

		if (nav.classList.contains(navActive)) {
			document.removeEventListener('click', closeNav);
		}
	};

	const init = () => {
		components.hamburger.addEventListener('click', toggleNav);
	};

	return {
		init
	};
})();

export default nav;
