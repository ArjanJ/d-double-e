import { $ } from './utils';

const bio = (() => {
	const components = {
		left: $('.bio__fixed-bg-left'),
		right: $('.bio__fixed-bg-right'),
	};

	const animation = () => {
		const scrolled = window.pageYOffset;
		const translateY = scrolled / 1.5;
		const { left, right } = components;

		left.style.transform = `translateY(${-scrolled / 3.5}px)`;
		left.style.opacity = 1 - (scrolled / 600);
		right.style.transform = `translateY(${-scrolled / 1.5}px)`;
		right.style.opacity = 1 - (scrolled / 750);
	};

	const handleScroll = () => {
		window.requestAnimationFrame(animation);
	};

	const init = () => {
		if ($('main').classList.contains('Bio')) {
			window.addEventListener('scroll', handleScroll);
		}
	};

	return {
		init,
	};
})();

export default bio;
